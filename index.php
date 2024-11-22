<?php
// Load the controller and invoke the default action
require_once 'Controllers/HelloController.php';
$controller = new HelloController();
$controller->sayHello();
