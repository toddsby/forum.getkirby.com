<?php

define('DS', DIRECTORY_SEPARATOR);

// load the cms bootstrapper
include(__DIR__ . DS . 'forum' . DS . 'bootstrap.php');

// start the cms
echo forum::start();