<?php

namespace Drupal\premium\EventSubscriber;

use Drupal\premium\Event\PremiumMessageEvent;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;

class PremiumEventSubscriber implements EventSubscriberInterface
{
    static function getSubscribedEvents()
    {
        $events[KernelEvents::REQUEST][] = array('OnKernelEventRequest');
        $events[KernelEvents::TERMINATE][] = array('OnKernelEventTerminate');
        $events[PremiumMessageEvent::PREMIUM_MESSAGE_SUBMIT] = array('OnMessageSubmit');

        return $events;
    }

    function OnKernelEventRequest(Event $event)
    {
        drupal_set_message('Kernel events occured');
    }

    function OnKernelEventTerminate(Event $event)
    {
        drupal_set_message('Kernel finished it\'s action');
    }

    function OnMessageSubmit(PremiumMessageEvent $event)
    {
        drupal_set_message($event->getMessage());
    }
}
