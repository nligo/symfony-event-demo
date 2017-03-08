<?php

namespace App\DemoBundle\Events\EventListener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;


class RouteEventListener
{
    public function onKernelController(FilterControllerEvent $event)
    {
        $message = $event->getRequest()->query->get('data');
        $event->setController(
            function() use ($message) {
                return new Response($message, 400);
            }
        );
    }
}