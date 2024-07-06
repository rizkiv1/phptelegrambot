<?php
// load composer
require __DIR__ . "/vendor/autoload.php";
// load dotenv
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->loadEnv(__DIR__."/.env", __DIR__."/.env.local");

// set variable

$bot_api_key = $_ENV['BOT_API_KEY'];
$bot_username = $_ENV['$BOT_USERNAME'];
$HOOK_URL = $_ENV['HOOK_URL'];
