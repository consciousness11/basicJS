<?php
require_once 'user_class_view.php';
require_once 'user_class_model.php';
require_once 'user_class_controller.php';

$controller = new UserController();
$controller->userAction();


?>