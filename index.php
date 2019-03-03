<?php
// Prepend a base path if Predis is not available in your "include_path".
require 'predis/autoload.php';

Predis\Autoloader::register();

$client = new Predis\Client('tcp://localhost:6379');
//$client = new Predis\Client();
$client->set('foo', 'bar');
$value = $client->get('foo');
echo $value; exit;