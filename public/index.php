<?php

require '../helper.php';

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

require basePath('Framework/Router.php');