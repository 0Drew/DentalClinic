<?php session_start(); 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';?>


<?php 


if($_SESSION['AccountID']=="" || $_SESSION['FirstName'] =="" ||  $_SESSION['LastName'] =="" ||  $_SESSION['AccountType'] =="" ||  $_SESSION['AccountType'] !="Customer"){


  $locationLogin='login.php';
  echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$locationLogin.'">';
  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>YU1 Dental Care</title>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,700,300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



</head>

<body>


  <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="border-color: white;">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="index.php"><img class="logo" src="img/yu1-logo.png" style="width:auto; height: 60px; top:2px; position:fixed; "> </a>
      </div>


      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">

          <li class="hidden">
            <a class="page-scroll" href=""></a>
          </li>

          <li>

            <div class="dropdown">
              <button class="dropbtn">Profile</button>
              <div class="dropdown-content">
                <a href="#" data-toggle="modal" data-target="#myModalProf">Edit Profile</a>

              </div>
            </div>
          </li>
          <li onclick="return SwalHandler.handleSwal1();">
            <a class="page-scroll" href="#">Log Out</a>
          </li>

        </ul>
      </div>

    </div>

  </nav>

  <div class="container services">

    <div class="row">

      <div class="col-lg">

        <div class="card">
          <center>
            <div class="card-header">
              <h2>My Appointments</h2>
            </div>
          </center>
          <div class="card-body">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalHis">History</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalApp">Add Appointment</button>
            <br>
            <br>
            <table class="table table-bordered">
              <form method="POST">
              <thead>
                <tr>
           
                  <th>Date&Time</th>
                  <th>Category</th>
                  <th>Status</th>
                  <th>Doctor Assigned</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              


                <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_dentalclinic";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$id = $_SESSION['AccountID'];
$sql = "SELECT ac.AccountID,ap.UserID,ap.DoctorID, ap.Category ,ap.ID,ap.Status,ac.FirstName,ac.LastName,ap.DateAndTime, ap.RequestDateAndTime, ca.CategoryName, ac.Email FROM tbl_appointmentlist ap 
        JOIN tbl_accounts ac 
        ON ap.UserID=ac.AccountID
        JOIN tbl_category ca 
        ON ap.Category= ca.ID  WHERE ap.Status!='COMPLETE' AND ap.Status!='DECLINED'  AND ac.AccountID = '$id' AND ap.UserID = '$id'";





$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

    $doctorid = $row["DoctorID"];


   $sql1 = "SELECT * from tbl_accounts WHERE AccountID = '$doctorid'";


$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {

$row1 = mysqli_fetch_assoc($result1);

$firstName = $row1['FirstName'];
$LastName = $row1['LastName'];

}else{
  $firstName = "";
$LastName= "";
}





   

  echo '<tr>

  <td>' . $row["RequestDateAndTime"]. '</td>
  <td>' . $row["CategoryName"]. '</td>
  <td>' . $row["Status"]. '</td>




  <td>' . $firstName." ".$LastName. '</td>

  <td>
  <center><a href="profile.php?Cancel=' . $row["ID"]. '&reqDate=' . $row["RequestDateAndTime"]. '&FirstName=' . $row["FirstName"]. '&CategoryName=' . $row["CategoryName"]. '&Email=' . $row["Email"].'&accid='. $row["AccountID"].'&DoctorID='. $row["DoctorID"].' "  onclick="return confirm(\'Are you sure you want to cancel this appointment?\')" ><button type="button" class="btn btn-danger btn-sm">Cancel</button></a></center>
  </td>
    </tr>
';


  }
} 

mysqli_close($conn);
?>



<?php 
if(isset($_GET['Cancel'])){
 
    date_default_timezone_set("Asia/Manila");
    $datePhil = date('Y-m-d H:i:s');
    
   
    $id = $_GET['Cancel'];
   
  
 $email = "col.2018020003@lsb.edu.ph";
 $name = "Carlo";

  
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "db_dentalclinic";
      
      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      


    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);


    try {
     //Enable verbose debug output
     $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;
   
     //Send using SMTP
     $mail->isSMTP();
   
     //Set the SMTP server to send through
     $mail->Host = 'smtp.gmail.com';
   
     //Enable SMTP authentication
     $mail->SMTPAuth = true;
   
     //SMTP username
     $mail->Username = 'jayreylara33@gmail.com';
   
     //SMTP password
   /*     $mail->Password = 'gxebiqiafblqyfmq'; */
   
   //SMTP password
   $mail->Password = 'cgovrhwzpqawipve';
   
   
   
     //Enable TLS encryption;
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
   
     //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
     $mail->Port = 587;
   
     //Recipients
     $mail->setFrom('sampleemail@gmail.com', 'Dental Clinic Appointment');
   
     //Add a recipient
     $mail->addAddress($email, $name);
   
     //Set email format to HTML
     $mail->isHTML(true);
   
     $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
   
    
   
   
     $mail->Subject = 'YU1 Dental Clinic Appointment';
     $mail->Body    = 'Someone cancel their reservation; for further information, please visit the website.';
   
     $mail->send();
   
   
    } catch (Exception $e) {
       echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }





      
      $sql = "UPDATE tbl_appointmentlist SET Status='DECLINED' WHERE ID ='$id'";
      
          if ($conn->query($sql) === TRUE) {



     
            $idsession = $_SESSION['AccountID'];

      
            $sql = "INSERT INTO tbl_logs (Description, UserID, DateAndTime)
            VALUES ('Reservation Cancelled', '$idsession', '$datePhil')";
            
            if (mysqli_query($conn, $sql)) {
                echo "<script>SwalHandler.handleSwal3();</script>";
            }

       
          }


      

   



}




?>

              </tbody>
              </form>
            </table>

          </div>

        </div>

      </div>
    </div>
  </div>


  <script>

const SwalHandler = {

handleSwal1: () => {

Swal.fire({
  title: 'Are you sure you want to logout?',
  icon: 'info',
  showCancelButton: true,
  confirmButtonText: 'Logout',
  confirmButtonColor: "#ff5757",
  iconColor: '#ff5757',
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    window.location.href = "logout.php";
  }
                   
    
})

},

handleSwal2: () => {
				Swal.fire(
					'Appointment Reservation Completed!',
					'',
					'success'
					/*  'info' */
					/*  'error' */
				).then(function() {
                    window.location.href = "profile.php";
                })

			},
      handleSwal3: () => {
				Swal.fire(
					'Appointment Reservation Cancelled!',
					'',
					'success'
					/*  'info' */
					/*  'error' */
				).then(function() {
                    window.location.href = "profile.php";
                })

			},
      handleSwal4: () => {
				Swal.fire(
					'Email Updated!',
					'',
					'success'
					/*  'info' */
					/*  'error' */
				).then(function() {
                    window.location.href = "profile.php";
                })

			},

	


};

</script>




  <!-- Modal Add Appointment -->
  <div class="modal fade" id="myModalApp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">New Appointment</h4>
        </div>
        <form method="POST">
          <div class="modal-body">

            <div class="row">
              <div class="col-lg-5">
                <label for="message-text" class="col-form-label">Date and Time<b style="color: red;">*</b></label>
                <input type="datetime-local" name="DateAndTime" class="form-control" id="recipient-name" required>
              </div>




              <div class="col-lg-5">
                <label for="message-text" class="col-form-label">Service Type<b style="color: red;">*</b></label>
                <select class="form-select" name="ServiceType" required>
                  <option value="1">Tooth Extraction</option>
                  <option value="2">Orthodontics</option>
                  <option value="3">Dental Prevention</option>
                  <option value="4">Whitening Teeth</option>
                  <option value="5">Oral Surgery</option>
                  <option value="6">Emergency Care</option>
                </select>
              </div>
            </div>


          </div>
          <div class="modal-footer">
            <button type="submit" name="submitnewapp" onclick="return confirm('Are you sure you want to make an appointment?')"  class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php 
  
  if(isset($_POST['submitnewapp'])){
 
date_default_timezone_set("Asia/Manila");
$datePhil = date('Y-m-d H:i:s');
 $DateAndTime = $_POST['DateAndTime'];
 $ServiceType = $_POST['ServiceType'];
 $userid = $_SESSION['AccountID'];


 $email = "col.2018020003@lsb.edu.ph";
 $name = "Carlo";

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "db_dentalclinic";
 
 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
 
 
    //Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);


 try {
  //Enable verbose debug output
  $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;

  //Send using SMTP
  $mail->isSMTP();

  //Set the SMTP server to send through
  $mail->Host = 'smtp.gmail.com';

  //Enable SMTP authentication
  $mail->SMTPAuth = true;

  //SMTP username
  $mail->Username = 'jayreylara33@gmail.com';

  //SMTP password
/*     $mail->Password = 'gxebiqiafblqyfmq'; */

//SMTP password
$mail->Password = 'cgovrhwzpqawipve';



  //Enable TLS encryption;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

  //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
  $mail->Port = 587;

  //Recipients
  $mail->setFrom('sampleemail@gmail.com', 'Dental Clinic Appointment');

  //Add a recipient
  $mail->addAddress($email, $name);

  //Set email format to HTML
  $mail->isHTML(true);

  $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

 


  $mail->Subject = 'YU1 Dental Clinic Appointment';
  $mail->Body    = 'Someone made a reservation; for further information, please visit the website.';

  $mail->send();


 } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }



 $sql = "INSERT INTO tbl_appointmentlist (DateAndTime, RequestDateAndTime, UserID, Status, Category)
 VALUES ('$datePhil', '$DateAndTime', '$userid','PENDING','$ServiceType')";
 
 if (mysqli_query($conn, $sql)) {
 echo "<script>SwalHandler.handleSwal2();</script>";
 } 
 
 mysqli_close($conn);


  }
  ?>

  <!-- Modal History -->
  <div class="modal fade" id="myModalHis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Past Appointments</h4>
        </div>
        <div class="modal-body">
          <form method="POST">
            <table class="table table-bordered">
              <thead>
              


                
                <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_dentalclinic";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$id = $_SESSION['AccountID'];
$sql = "SELECT ac.AccountID,ap.UserID,ap.DoctorID, ap.Category ,ap.ID,ap.Status,ac.FirstName,ac.LastName,ap.DateAndTime, ap.RequestDateAndTime, ca.CategoryName, ac.Email FROM tbl_appointmentlist ap 
        JOIN tbl_accounts ac 
        ON ap.UserID=ac.AccountID
        JOIN tbl_category ca 
        ON ap.Category= ca.ID  WHERE ap.Status='DECLINED' || ap.Status='COMPLETED' AND ac.AccountID = '$id ' AND ap.UserID = '$id'";





$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

    $doctorid = $row["DoctorID"];


   $sql1 = "SELECT * from tbl_accounts WHERE AccountID = '$doctorid'";


$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {

$row1 = mysqli_fetch_assoc($result1);

$firstName = $row1['FirstName'];
$LastName = $row1['LastName'];

}else{
  $firstName = "";
$LastName= "";
}





   

  echo '<tr>

  <td>' . $row["RequestDateAndTime"]. '</td>
  <td>' . $row["CategoryName"]. '</td>
  <td>' . $row["Status"]. '</td>




  <td>' . $firstName." ".$LastName. '</td>


    </tr>
';


  }
} 

mysqli_close($conn);
?>


              




              </tbody>
            </table>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <!-- Modal EditProfile -->
  <div class="modal fade" id="myModalProf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><b>My Profile</b></h4>
        </div>
        <form action="" method="POST">
          <div class="modal-body">

            <div class="container">

              <div class="row">

                <div class="col-lg-3">
                  <h5>First Name</h5>
                  <input type="text" id="fn" class="form-control" value="<?php echo $_SESSION['FirstName']; ?>" readonly>
                </div>

           

                <div class="col-lg-3">
                  <h5>Last Name</h5>
                  <input type="text" id="ln" class="form-control" value="<?php echo $_SESSION['LastName']; ?>" readonly>
                </div>

              </div>

              <div class="row">
                <div class="col-lg-3">
                  <h5>Email</h5>
                  <input type="email" name="email"  class="form-control" value="<?php echo $_SESSION['Email']; ?>" id="email" placeholder="Email" required >
                </div>

            
              </div>




            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="profileSub" style="float:left" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>
        </form>
      </div>
    </div>
  </div>

  <?php 
  if(isset($_POST['profileSub'])){
    $emailupdate = $_POST['email'];
    $idsession = $_SESSION['AccountID'];


      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "db_dentalclinic";
      
      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      
      $sql = "UPDATE tbl_accounts SET Email='$emailupdate' WHERE AccountID ='$idsession'";
      
          if ($conn->query($sql) === TRUE) {

            $idsession = $_SESSION['AccountID'];

            $_SESSION['Email'] = $emailupdate;
            if (mysqli_query($conn, $sql)) {
                echo "<script>SwalHandler.handleSwal4();</script>";
            }

       
          }

  }

  
  ?>




  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="./script.js"></script>

</body>

</html>