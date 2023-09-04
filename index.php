<?php

include_once('inc/route.php');
include_once('inc/controller.php');
include_once('inc/views.php');
include_once('inc/model.php');

$route = $_GET['main_route'] ?? "";
new Routes($route);