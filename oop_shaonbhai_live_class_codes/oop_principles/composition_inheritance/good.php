<?php

interface NotificationChannel {
    public function send($message);
}

class EmailChannel implements NotificationChannel {
    public function send($message) {
        echo "Sending email: {$message}\n";
    }
}

class SMSChannel implements NotificationChannel {
    public function send($message) {
        echo "Sending SMS: {$message}\n";
    }
}

class Notifier {
    private $channels = [];

    public function addChannel(NotificationChannel $channel) {
        $this->channels[] = $channel;
    }

    public function notify($message) {
        foreach ($this->channels as $channel) {
            $channel->send($message);
        }
    }
}

// Usage
$notifier = new Notifier();
$notifier->addChannel(new EmailChannel());
$notifier->addChannel(new SMSChannel());

$notifier->notify("Important message!");

// Easy to add new channels
class PushNotificationChannel implements NotificationChannel {
    public function send($message) {
        echo "Sending push notification: {$message}\n";
    }
}

$notifier->addChannel(new PushNotificationChannel());
$notifier->notify("Another important message!");