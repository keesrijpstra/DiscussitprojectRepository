<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImageController extends AbstractController
{
    #[Route('/image/{post}', name: 'app_show_image')]
    public function showFullscreenImage(Post $post): Response
    {
        return $this->render('shared/show_fullscreen.html.twig', [
            'post' => $post,
        ]);
    }

    #[Route('/image/comment/{comment}', name: 'app_show_comment_image')]
    public function showFullscreenCommentImage(Comment $comment): Response
    {
        return $this->render('shared/show_fullscreen_comment.html.twig', [
            'comment' => $comment,
        ]);
    }
}
