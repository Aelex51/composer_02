<?php

require_once __DIR__ . '/../vendor/autoload.php';
use App\Hello as Hello;

$hello = new Hello();

echo $hello->talk();