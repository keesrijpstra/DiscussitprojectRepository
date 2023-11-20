<?php

namespace App\Controller;

use App\Entity\Board;
use App\Entity\Comment;
use App\Entity\Post;
use App\Entity\User;
use App\Entity\UserProfile;
use App\Form\CommentType;
use App\Form\PostType;
use App\Repository\BoardRepository;
use App\Repository\CommentRepository;
use App\Repository\PostRepository;
use App\Repository\UserProfileRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\String\Slugger\SluggerInterface;

class PostController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function homePage(PostRepository $posts): Response
    {
        $allPosts = $posts->findAllWithComments();

        return $this->render('post/index.html.twig', [
            'posts' => $allPosts,
        ]);
    }

    #[Route('/post', name: 'app_show_all')]
    public function showAll(PostRepository $posts): Response
    {
        // Fetch all posts along with their comments from the database
        $allPosts = $posts->findAllWithComments();

        // Render the 'post/index.html.twig' template, passing the fetched posts as a variable
        return $this->render('post/index.html.twig', [
            'posts' => $allPosts,
        ]);
    }

    #[Route('/post/top-liked', name: 'app_post_top_liked')]
    public function topLiked(PostRepository $posts): Response
    {
        $postsInOrder = $posts->findAllWithMinLikes(2);
        usort($postsInOrder, function (Post $a, Post $b) {
            $likesA = count($a->getLikedBy());
            $likesB = count($b->getLikedBy());

            return $likesB - $likesA;
        });

        // Render the 'post/top_liked.html.twig' template by minimum likes on post
        return $this->render('post/top_liked.html.twig', [
            'posts' => $postsInOrder,
        ]);
    }

    #[Route('/post/follows', name: 'app_post_follows')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function follows(PostRepository $posts): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        // renders the template with all the post from the follows table.<<<<<<<<<<<<
        return $this->render('post/follows.html.twig', [
            'posts' => $posts->findAllByAuthors(
                $currentUser->getFollows()
            ),
        ]);
    }

    #[Route('/post/{post}', name: 'app_show_one')]
    #[IsGranted(Post::VIEW, 'post')]
    public function showOne(Post $post): Response
    {
        //render the post template, passing the specific post as variable
        return $this->render('post/show.html.twig', [
            'post' => $post,
        ]);
    }

    #[Route('/boards', name: 'app_show_post_boards')]
    public function boards(BoardRepository $repository): Response
    {
        //fetch all boards from the database
        $boards = $repository->findAll();

        // Renders the template passing the boards as variable
        return $this->render('post/boards.html.twig', [
            'posts' => $boards,
        ]);
    }

    #[Route('/boards/{board}', name: 'app_show_posts_by_board')]
    public function getPostsByBoard(Board $board, BoardRepository $repository): Response
    {


        //fetch posts for a specific board
        $posts = $board->getPosts()->toArray();
        $boardName = $board->getName();

        // render the template passing the posts from associated board passing them as a variable
        return $this->render('post/boards_with_their_posts.html.twig', [
            'posts' => $posts,
            'boardName' => $boardName,
        ]);
    }

    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    #[Route('/post/add', name: 'app_show_add', priority: 2)]
    public function add(Request $request, PostRepository $repository, SluggerInterface $slugger, BoardRepository $boardRepository): Response
    {
        $board = $boardRepository->findOneBy(['name' => 'Random']);

        $newPost = new Post();
        $form = $this->createForm(PostType::class, $newPost);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $postImage */
            $postImage = $form->get('postImage')->getData();

            /** @var Post $post */
            $post = $form->getData();

            if ($post->getBoard() == null)
            {
                $post->setBoard($board);
            }
            $post->setCreationDate(new \DateTime());
            $post->setAuthor($this->getUser());
            if ($postImage) {
                $originalFileName = pathinfo(
                    $postImage->getClientOriginalName(),
                    PATHINFO_FILENAME
                );
                $safeFilename = $slugger->slug($originalFileName);
                $newFileName = $safeFilename.'-'.uniqid().'.'.$postImage->guessExtension();

                try {
                    $postImage->move(
                        $this->getParameter('post_directory'),
                        $newFileName
                    );
                } catch (FileException $e) {
                }

                $newPost->setImage($newFileName);

                $repository->save($newPost, true);
            }

            $repository->save($newPost, true);

            $this->addFlash('success', 'Your post has been added!');

            return $this->redirectToRoute('app_show_all');
        }

        return $this->render('post/add.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/post/{post}/edit', name: 'app_show_edit', priority: 2)]
    #[IsGranted(Post::EDIT, 'post')]
    public function editPost(Post $post, Request $request, PostRepository $repository, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);
        //checks if the form was correctly send
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $postImage */
            $postImage = $form->get('postImage')->getData();

            $postData = $form->getData();
            // Checks if the image was passed
            if ($postImage) {
                /** @var Post $postData */
                $oldImage = $postData->getImage();
                $originalFileName = pathinfo(
                    $postImage->getClientOriginalName(),
                    PATHINFO_FILENAME
                );
                $safeFilename = $slugger->slug($originalFileName);
                $newFileName = $safeFilename.'-'.uniqid().'.'.$postImage->guessExtension();

                try {
                    $postImage->move(
                        $this->getParameter('post_directory'),
                        $newFileName
                    );
                } catch (FileException $e) {
                }

                if ($oldImage) {
                    $oldImagePath = $this->getParameter('post_directory').'/'.$oldImage;
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $postData->setImage($newFileName);

                $repository->save($postData, true);
                $this->addFlash('success', 'Your Post image was updated.');
            }

            $repository->save($postData, true);

            $this->addFlash('success', 'Your post has been updated!');

            return $this->redirectToRoute('app_show_all');
        }

        return $this->render(
            'post/edit.html.twig', [
            'form' => $form,
            'post' => $post,
        ]);
    }

    #[Route('/post/{post}/comment', name: 'app_add_comment')]
    public function addComment(
        Post $post,
        SluggerInterface $slugger,
        Request $request,
        CommentRepository $commentRepository
    ): Response {
        // Ensure that the user is fully authenticated before adding a comment
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // Create a form for adding a new comment
        $form = $this->createForm(CommentType::class, new Comment());

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $commentImage */
            $commentImage = $form->get('commentImage')->getData();

            // Retrieve data from the form
            /** @var Comment $comment */
            $comment = $form->getData();
            $comment->setPost($post);
            $comment->setAuthor($this->getUser());
            $comment->setCreated(new \DateTime());
            if ($commentImage) {
                // Handle comment image upload
                $originalFileName = pathinfo(
                    $commentImage->getClientOriginalName(),
                    PATHINFO_FILENAME
                );
                $safeFilename = $slugger->slug($originalFileName);
                $newFileName = $safeFilename.'-'.uniqid().'.'.$commentImage->guessExtension();

                try {
                    $commentImage->move(
                        $this->getParameter('comment_directory'),
                        $newFileName
                    );
                } catch (FileException $e) {
                    // Handle file upload error if needed
                }

                $comment->setImage($newFileName);

                $commentRepository->save($comment, true);
            }
            // Handle file upload error if needed
            $commentRepository->save($comment, true);

            $this->addFlash('success', 'Your comment has been updated!');

            // Redirect to the post page associated with the comment
            return $this->redirectToRoute(
                'app_show_one',
                ['post' => $post->getId()]);
        }

        return $this->render(
            'post/comment.html.twig', [
            'form' => $form,
            'post' => $post,
        ]);
    }

    #[Route('/comment/{comment}/edit', name: 'app_comment_edit', priority: 2)]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editComment(Comment $comment, Request $request, CommentRepository $repository, SluggerInterface $slugger): Response
    {
        // Retrieve the associated post for the comment

        $post = $comment->getPost();
        // Create a form for editing the comment

        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $commentImage */
            $commentImage = $form->get('commentImage')->getData();

            // Retrieve data from the form
            $postData = $form->getData();

            if ($commentImage) {
                // Handle comment image upload

                $originalFileName = pathinfo(
                    $commentImage->getClientOriginalName(),
                    PATHINFO_FILENAME
                );
                $safeFilename = $slugger->slug($originalFileName);
                $newFileName = $safeFilename.'-'.uniqid().'.'.$commentImage->guessExtension();

                try {
                    $commentImage->move(
                        $this->getParameter('comment_directory'),
                        $newFileName
                    );
                } catch (FileException $e) {
                    // Handle file upload error if needed

                }

                // Set the new image filename in the comment entity
                $comment->setImage($newFileName);

                // Save the comment entity with the new image
                $repository->save($comment, true);
            }

            // Save the updated comment data
            $repository->save($postData, true);

            // Flash a success message
            $this->addFlash('success', 'Your comment has been updated!');

            // Redirect to the post page associated with the comment
            return $this->redirectToRoute('app_show_one', ['post' => $post->getId()]);
        }

        return $this->render(
            'post/comment_edit.html.twig', [
            'form' => $form,
            'post' => $post,
            'comment' => $comment,
        ]);
    }
}
