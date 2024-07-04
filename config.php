<?php
// load composer
require __DIR__ . "/vendor/autoload.php";
// load dotenv
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->loadEnv(__DIR__."/.env", __DIR__."/.env.local");

// set variable
$BOT_API_KEY = "";
$BOT_USERNAME =  "username";
$HOOK_URL = "https://domain:port/path/tohook.php";