<?php
// TODO:
// idk

// load composer
require __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/config.php";

try {
    // create Telegram API Object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (\Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // $e->getMessage();
}