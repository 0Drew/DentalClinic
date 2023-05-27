<?php 
include '../class/Database.php';
include '../class/Todo.php';

$db = new Database();

$db =$db->connection();
$todo = new todo($db);



echo json_encode($todo->getAll());

?>