<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor\autoload.php';

use App\Entity\Request;

$request = new Request('Cardiff');

var_dump($request);