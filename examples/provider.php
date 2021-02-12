<?php

require __DIR__ . '/../vendor/autoload.php';

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

use Hayageek\OAuth2\Client\Provider\Yahoo;

// Replace these with your token settings
// Create a project at https://developer.yahoo.com/apps

$clientId = getenv('YAHOO_CLIENT_ID'); // $_ENV['YAHOO_CLIENT_ID'];
$clientSecret = getenv('YAHOO_CLIENT_SECRET'); // $_ENV['YAHOO_CLIENT_SECRET'];
// Change this if you are not using the built-in PHP server
$redirectUri = 'http://oauth2-yahoo.herokuapp.com/examples/index.php';

// Start the session
session_start();

// Initialize the provider
$provider = new Yahoo(compact('clientId', 'clientSecret', 'redirectUri'));

// No HTML for demo, prevents any attempt at XSS
// header('Content-Type', 'text/plain');

return $provider;
