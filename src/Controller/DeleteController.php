<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Post;
use App\Entity\User;
use App\Repository\CommentRepository;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DeleteController extends AbstractController
{
    #[Route('/comment/delete/{comment}', name: 'app_delete_comment', priority: 2)]
    #[IsGranted(Comment::EDIT, 'comment')]
    public function deleteComment(Comment $comment, CommentRepository $repository): Response
    {
        $repository->remove($comment, true);

        $this->addFlash('success', 'Your comment has been deleted successfully!');

        return $this->redirectToRoute('app_show_all');
    }

    #[Route('/post/delete/{post}', name: 'app_delete_post', priority: 2)]
    #[IsGranted(Post::EDIT, 'post')]
    public function deletePost(Post $post, PostRepository $repository): Response
    {
        $repository->remove($post, true);

        $this->addFlash('success', 'Your post has been deleted successfully!');

        return $this->redirectToRoute('app_show_all');

    }

//    #[Route('/give_admin_role/{id}', name:'give_admin_role')]
//    public function giveAdminRole(UserRepository $userRepository, $id): Response
//    {
//        $user = $userRepository->find($id);
//
//        if (!$user) {
//            throw $this->createNotFoundException('User not found');
//        }
//        $user->setRoles((array)'ROLE_ADMIN');
//
//        $userRepository->save($user, true);
//
//        return $this->redirectToRoute('app_show_all');
//    }
}
