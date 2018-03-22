<?php

namespace Drupal\premium\Event;

use Symfony\Component\EventDispatcher\Event;

class PremiumMessageEvent extends Event
{
    const PREMIUM_MESSAGE_SUBMIT = 'premium.message.submit';

     /**
     * @var string $message
     */
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
