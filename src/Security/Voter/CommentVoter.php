<?php

namespace App\Security\Voter;

use App\Entity\Comment;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class CommentVoter extends Voter
{
    public function __construct(
        private Security $security
    ) {

    }
    protected function supports(string $attribute, mixed $subject): bool
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, [Comment::EDIT, Comment::VIEW, Comment::DELETE])
            && $subject instanceof Comment;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        /** @var User $user */
        $user = $token->getUser();
        $isAuth = $user instanceof UserInterface;

        if ($this->security->isGranted('ROLE_ADMIN')) {
            return true;
        }

        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case Comment::EDIT:
                return $isAuth
                    && ($subject->getAuthor()->getId() === $user->getId())
                    || $this->security->isGranted('ROLE_EDITOR');

            case Comment::VIEW:
                return true;

            case Comment::DELETE:
                return $isAuth
                    && ($subject->getAuthor()->getId() === $user->getId()
                        || $this->security->isGranted('ROLE_EDITOR')
                        || $this->security->isGranted('ROLE_ADMIN'));

        }

        return false;
    }
}
