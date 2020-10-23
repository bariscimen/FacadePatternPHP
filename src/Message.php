<?php

namespace App;

class Message
{
    private $message;

    /**
     * Message constructor.
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

}