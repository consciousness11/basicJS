<?php 
include_once 'user_class_model.php';
class UserView {
    public function display($models) {
        var_dump($models);
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Username</th>";
        echo "<th>Password</th>";
        echo "<th>Action</th>";
        echo "</tr>";
        foreach ($models as $model) {
            if ($model->getId() != NULL) 
            {
            echo "<tr>";
            echo "<td>" . $model->getId() . "</td>";
            echo "<td>" . $model->getUsernames() . "</td>";
            echo "<td>" . $model->getPasswords() . "</td>";
            echo "<td>" . "Add/Edit" . "</td>";
            echo "</tr>";
            }
        }
        echo "</table>";
    }
    
}

?>
