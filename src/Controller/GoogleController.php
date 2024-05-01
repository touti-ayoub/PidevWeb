<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Security\LoginFormAuthenticator;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class GoogleController extends AbstractController
{
    private UserAuthenticatorInterface $userAuthenticator;
    private LoginFormAuthenticator $authenticator;

    public function __construct(UserAuthenticatorInterface $userAuthenticator, LoginFormAuthenticator $authenticator)
    {
        $this->userAuthenticator = $userAuthenticator;
        $this->authenticator = $authenticator;
    }

    /**
     * @Route("/connect/google", name="connect_google_start")
     */
    public function connectAction(ClientRegistry $clientRegistry)
    {
        return $clientRegistry
            ->getClient('google')
            ->redirect();
    }

    /**
     * @Route("/connect/google/check", name="connect_google_check")
     */
    public function connectCheckAction(Request $request, ClientRegistry $clientRegistry, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager)
    {
        // Fetch the user information from Google
        $googleUser = $clientRegistry->getClient('google')->fetchUser();

        // Check if the user exists in the database
        $existingUser = $this->getDoctrine()->getRepository(User::class)->findOneBy(['googleId' => $googleUser->getId()]);

        if (!$existingUser) {
            // If the user does not exist, create a new user
            $user = new User();
            $user->setGoogleId($googleUser->getId());
            $user->setEmail($googleUser->getEmail());
            $user->setName($googleUser->getName());
            $user->setPassword($passwordHasher->hashPassword($user, uniqid()));

            // Set the user's role to ROLE_USER and isVerified to true
            $user->setRoles(['ROLE_USER']);
            $user->setIsVerified(true);

            // Fetch the user's profile picture from Google
            $user->setProfileImage($googleUser->getAvatar());

            // Persist the user to the database
            $entityManager->persist($user);
            $entityManager->flush();
        } else {
            $user = $existingUser;
        }

        // Authenticate the user
        $this->userAuthenticator->authenticateUser(
            $user,
            $this->authenticator,
            $request
        );

        // Redirect the user to the main page
        return $this->redirectToRoute('app_main');
    }
}