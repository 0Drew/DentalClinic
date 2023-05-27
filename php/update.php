<?php 
include '../class/Database.php';
include '../class/Todo.php';

$db = new Database();

$db =$db->connection();
$todo = new todo($db);

$data = [
    'task'=> $_POST['task'],
    'description'=> $_POST['description'],
    'status'=> $_POST['status'],
 ];
 
 echo json_encode($todo->update($data));


die();

$data = [
   'task'=> 'update1',
   'description'=> 'sample des',
   'status'=> 'PENDING',
];

echo json_encode($todo->update($data));

?>