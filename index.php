<?php
require "vendor/autoload.php";

use App\Storage;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

new Storage()->resolve()->put('storageNew/test.txt', 'Hello World!');