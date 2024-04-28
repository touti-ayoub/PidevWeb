<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class BannedUserListener
{
    private $security;
    private $router;
    private $authorizationChecker;

    public function __construct(Security $security, RouterInterface $router, AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->security = $security;
        $this->router = $router;
        $this->authorizationChecker = $authorizationChecker;
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $currentRoute = $event->getRequest()->attributes->get('_route');

        // If the current route is the login page or the banned page, do not perform the ban check
        if ($currentRoute === 'app_login' || $currentRoute === 'app_banned') {
            return;
        }

        // If the user is not authenticated, do not perform the ban check
        if (!$this->authorizationChecker->isGranted('IS_AUTHENTICATED_FULLY')) {
            return;
        }

        $user = $this->security->getUser();

        // If the user is logged in and banned, redirect them to the banned page
        if ($user && $user->isIsBanned()) {
            $event->setResponse(new RedirectResponse($this->router->generate('app_banned')));
        }
    }
}