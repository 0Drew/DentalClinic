<?php


class Todo  {

    public $conn;
    private $defaultStatus;

    public function __construct($con) {
        
        $this ->conn = $con;


    }




public function store($data){

date_default_timezone_set("Asia/Manila");
$PhilTimezone = date('Y-m-d H:i:s');

 $pass1 = $data['password1'];
 $pass2 = $data['password2'];



if($pass1==$pass2){

    $sql=  "INSERT INTO `tbl_accounts` (`FirstName`, `MiddleName`, `LastName`, `Email`, `BirthDate`, `CreationDate`, `AccountType`,`Password`) VALUES ('".$data['FirstName']."', '".$data['MiddleName']."', '".$data['LastName']."','".$data['Email']."', '".$data['BirthDate']."', '$PhilTimezone', 'Customer', '".$data['password1']."')";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    
    
    echo "<script>alert('Account Created!');</script>";
    
    $locationLogin='../login.php';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$locationLogin.'">';

}
else{
  
    echo "<script>alert('the password does not match, Please try again!');</script>";
     
    $locationLogin='../login.php';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$locationLogin.'">';

}






}


public function update($data){
  
date_default_timezone_set("Asia/Manila");
$PhilTimezone = date('Y-m-d H:i:s');

    $sql = "UPDATE `todos` SET `task`= '".$data['task']."', `description`='".$data['description']."', `status` = '".$data['status']."', `updated_at` = SYSDATE() WHERE `id` = '11212'";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->rowCount();

    return $count;

}



public function getAll(){
   
    $sql = "SELECT * FROM `todos`";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return  $result;



}


public function getById(){

    $id = 1;
    $sql = "SELECT * FROM `todos` WHERE id = '$id'";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return  $result;

}






}




?>

