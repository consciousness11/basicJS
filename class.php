<?php 
class student {
    public $name;
    public $age;
         public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    function set_name( $name ) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}
$stud = new student("John", "35");
echo $stud->get_name();
echo $stud->age;
?>