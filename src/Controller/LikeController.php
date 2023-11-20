<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\User;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class LikeController extends AbstractController
{
    #[Route('/like{id}', name: 'app_like')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function like(Post $post, PostRepository $repository, Request $request): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        $post->addLikedBy($currentUser);
        $repository->save($post, true);

        return $this->redirect($request->headers->get('referer'));
    }

    #[Route('/unlike{id}', name: 'app_unlike')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function unlike(Post $post, PostRepository $repository, Request $request): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        $post->removeLikedBy($currentUser);
        $repository->save($post, true);

        return $this->redirect($request->headers->get('referer'));
    }
}
