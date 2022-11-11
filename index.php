<?php

require_once 'vendor/autoload.php';

$connection = require 'doctrine.php';

$foo = new \Noemi\BugRepo\Foo($connection);
var_dump($foo->fetch1(1));
var_dump($foo->fetch2(1));
