<?php
require('vendor/autoload.php');

use Kitara\Client;

$client = new Client;

var_dump($client->plataform,$client->os,$client->ip,$client->device);
