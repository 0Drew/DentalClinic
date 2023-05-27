<?php 
include '../class/Database.php';
include '../class/Todo.php';

$db = new Database();

$db =$db->connection();
$todo = new todo($db);


$data = [
    'FirstName'=> $_POST['FirstName'],
    'MiddleName'=> $_POST['MiddleName'],
    'LastName'=> $_POST['LastName'],
    'Email'=> $_POST['Email'],
    'BirthDate'=> $_POST['BirthDate'],
    'password1'=> $_POST['password1'],
    'password2'=> $_POST['password2'],
  
 ];
 


echo json_encode($todo->store($data));
 
?>