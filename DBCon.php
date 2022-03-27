<?php 
class DbCon{

private $_host = "localhost";
private $_user = "root";
private $_pass = "";
private $_dbname = "login";

protected $connection = null;

public function __construct(){
if (!isset($this->connection)) {
$this->connection = new mysqli($this->_host,
 $this->_user, $this->_pass, $this->_dbname);
 if(!$this->connection) {
     echo 'Cannot connect to database server';
     exit;
 }
 return $this->connection;

}



}

?>