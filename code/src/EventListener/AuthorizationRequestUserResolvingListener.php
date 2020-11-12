<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Trikoder\Bundle\OAuth2Bundle\Event\AuthorizationRequestResolveEvent;
use Trikoder\Bundle\OAuth2Bundle\OAuth2Events;

class AuthorizationRequestUserResolvingListener implements EventSubscriberInterface
{
    /**
     * @param AuthorizationRequestResolveEvent $event
     */
    public function onAuthorizationRequest(AuthorizationRequestResolveEvent $event)
    {
        if (null === $event->getUser()) {
            return;
        }
        $event->resolveAuthorization(AuthorizationRequestResolveEvent::AUTHORIZATION_APPROVED);
    }

    /**
     * @inheritDoc
     *
     * @return array|\array[][]
     */
    public static function getSubscribedEvents()
    {
        return [
            OAuth2Events::AUTHORIZATION_REQUEST_RESOLVE => [
                ['onAuthorizationRequest', 100],
            ],
        ];
    }
}
