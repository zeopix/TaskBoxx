<?php

namespace ShiftUp\TaskBoxxBundle\Handler;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LoginHandler implements AuthenticationSuccessHandlerInterface
{

    public function onAuthenticationSuccess(Request $request,
                                            TokenInterface $token)
    {
        $user = $token->getUser();
        $session = $request->getSession();
        $session->setLocale($user->getLocale());
        
        if ($targetUrl = $session->get('_security.target_path')) {
            $session->remove('_security.target_path');
        }
        else {
            $targetUrl = '/';
        }
        
        return new RedirectResponse(0 !== strpos($targetUrl, 'http') ? $request->getUriForPath($targetUrl) : $targetUrl);
    }

}