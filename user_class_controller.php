<?php
class UserController {
private $model;
private $view;

public function userAction(){
$model = new User();
$view = new UserView();
$view->display($model->getUsernames());
}

}
?>