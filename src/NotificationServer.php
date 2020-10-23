<?php

namespace App;

class NotificationServer
{
    /**
     * @param string $ipAddress
     * @return Connection
     */
    public function connect(string $ipAddress): Connection
    {
        return new Connection();
    }

    /**
     * @param string $appID
     * @param string $key
     * @return AuthToken
     */
    public function authenticate(string $appID, string $key): AuthToken
    {
        return new AuthToken();
    }

    /**
     * @param AuthToken $authToken
     * @param Message $message
     * @param string $target
     */
    public function send(AuthToken $authToken, Message $message, string $target)
    {
        echo "Sending a message" . PHP_EOL;
    }
}