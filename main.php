<?php

require __DIR__ . '/vendor/autoload.php';

$service = new \App\NotificationService();
$service->send("Hello World", "target");

