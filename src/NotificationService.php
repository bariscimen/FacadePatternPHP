<?php

namespace App;

class NotificationService
{
    /**
     * A wrapper method to send a message to Notification Server
     *
     * @param string $message
     * @param string $target
     */
    public function send(string $message, string $target)
    {
        $server = new NotificationServer();
        $connection = $server->connect("ip");
        $authToken = $server->authenticate("appID", "key");
        $server->send($authToken, new Message($message), $target);
        $connection->disconnect();
    }
}