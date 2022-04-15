<?php
include_once 'DAO.php';
class UserController {
private $model;
private $view;

public function userAction(){

$models[] = new User();
$view = new UserView();
$dao = new DAO();
$result = $dao->getData("select * from info");
foreach ( $result as $key =>$result) {
   
    $model = new User();
    $model->setUsernames($result['username']);
    $model->setPasswords($result['password']);
    $model->setId($result['id']);
    $models[] = $model; 
    
}

$view->display($models);
}
}
?>