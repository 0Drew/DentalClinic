<?php 
session_start(); 
?>

<?php 


if($_SESSION['AccountID']=="" || $_SESSION['FirstName'] =="" ||  $_SESSION['LastName'] =="" ||  $_SESSION['AccountType'] =="" ||  $_SESSION['AccountType'] =="Customer"){


  $locationLogin='login.php';
  echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$locationLogin.'">';
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="sidebarstyle.css">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/4f0b19e52a.js" crossorigin="anonymous"></script>

   

  <!----===== Mga link and script ng Data Table ===== -->
  <link href='https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>






    <title>YU1 Dental Care Management</title> 
</head>
<body>


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
					'Reservation Completed!',
					'',
					'success'
					/*  'info' */
					/*  'error' */
				).then(function() {
                    window.location.href = "reservation.php";
                })

			},

			handleSwal3: () => {
				Swal.fire(
					'Reservation Deleted!',
					'',
					'success'
					/*  'info' */
					/*  'error' */
				).then(function() {
                    window.location.href = "reservation.php";
                })

			},



};

</script>



    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                   <center> <img src="img/yu1-logo.png" alt=""></center>
                </span>

                <div class="text logo-text">
                    <span class="name">YU1 DENTAL CARE</span>
                    <span class="profession">Management Page</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar" style="padding-left: 10px;">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

         
               <ul style="padding: 0;">


                    <li>
                        <a href="appointment.php" title="Appointment list">
                            <i class='bx bx-food-menu icon' ></i>
                            <span class="text nav-text">Appointment list</span>
                        </a>
                    </li>

              

                    <li>
                        <a href="patientlist.php" title="Patients List">
                            <i class="fa fa-users icon"></i>
                            <span class="text nav-text">Patients List</span>
                        </a>
                    </li>

                    <li>
                        <a href="accounts.php"  title="Accounts">
                            <i class="fa fa-user-md icon"></i>
                            <span class="text nav-text">Accounts</span>
                        </a>
                    </li>

                 

                    <li>
                        <a href="logs.php" title="Logs">
                            <i class="fa fa-book icon"></i>
                            <span class="text nav-text">Logs</span>
                        </a>
                    </li>

                </ul>

            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#" onclick="return SwalHandler.handleSwal1();">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                
            </div>
        </div>

    </nav>


    <section class="home">
        <div class="text">Reservation List</div>
<br><br>


<div class="row">
    <div class="col-md-1">
    
    </div>  
    <div class="col-md-10">
        <button type="button" class="btn btn-primary" style="background-color: #67c6b8; border-color: #67c6b8;" data-bs-toggle="modal" data-bs-target="#myModal">History</button>
        <a href="appointment.php">  <button type="button" class="btn btn-primary" style="background-color: #67c6b8; border-color: #67c6b8;">Appointment</button></a><br><br>
       
       
       



<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">History</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

     
      <div class="modal-body">
      <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Date&Time</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Assigned Doctor</th>
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


$sql = "SELECT ap.ID,ac.FirstName,ac.LastName,ap.DateAndTime, ap.RequestDateAndTime, ap.Status, ca.CategoryName, ap.DoctorID FROM tbl_appointmentlist ap 
        JOIN tbl_accounts ac 
        ON ap.UserID=ac.AccountID
        JOIN tbl_category ca 
        ON ap.Category=ca.ID WHERE ap.Status='COMPLETE' OR ap.Status='DELETED'";





$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {




    $docID = $row['DoctorID'];

    $sql1 = "SELECT * FROM tbl_accounts WHERE AccountID='$docID'";

    $result1 = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($result1) > 0) {
        // output data of each row
        $row1 = mysqli_fetch_assoc($result1);
        

        }




  echo "<tr>
  <td>" . $row["RequestDateAndTime"]. "</td>
  <td>" . $row["CategoryName"]. "</td>
  <td>" . $row["Status"]. "</td>
  <td>" . $row1["FirstName"]." ".$row1["LastName"]. "</td>

    </tr>
";


  }
} 

mysqli_close($conn);
?>




                                </tbody>
          </table>
      </div>

  
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" style="background-color:#67C6B8;"data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

       
       
        <table id="example" class="display" style="width:100%; background-color: white; ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Date And Time</th>
                    <th>Request Date</th>
                    <th>Service</th>
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


$sql = "SELECT ac.AccountID,ap.ID,ac.FirstName,ac.LastName,ap.DateAndTime, ap.RequestDateAndTime, ap.Status, ca.CategoryName FROM tbl_appointmentlist ap 
        JOIN tbl_accounts ac 
        ON ap.UserID=ac.AccountID
        JOIN tbl_category ca 
        ON ap.Category=ca.ID WHERE ap.Status='ACCEPTED'";





$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

  echo '<tr>
  <td>' . $row["ID"]. '</td>
  <td>' . $row["FirstName"]. '</td>
  <td>' . $row["LastName"]. '</td>
  <td>' . $row["DateAndTime"]. '</td>
  <td>' . $row["RequestDateAndTime"]. '</td>
  <td>' . $row["CategoryName"]. '</td>
  <td>
  <a href="reservation.php?Complete=' .$row["ID"]. '&UserID=' .$row["AccountID"].'" onclick="return confirm(\'Are you sure this reservation is complete?\')"><button type="button" class="btn btn-success btn-sm">Complete</button></a>
  <a href="reservation.php?Delete=' . $row["ID"]. '&UserID=' .$row["AccountID"]. '" onclick="return confirm(\'Are you sure this reservation is cancelled?\')"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
  </td>
    </tr>
';


  }
} 

mysqli_close($conn);
?>



            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Date And Time</th>
                    <th>Request Date</th>
                    <th>Service</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>

    </div>

    <div class="col-md-1">
    
    </div>
</div>
    
      




<?php 
if(isset($_GET['Complete'])){
 


    $id = $_GET['Complete'];
    $userid = $_GET['UserID'];


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
      
      
      $sql = "UPDATE tbl_appointmentlist SET Status='COMPLETE' WHERE ID ='$id'";
      
          if ($conn->query($sql) === TRUE) {




            date_default_timezone_set("Asia/Manila");
            $datePhil = date('Y-m-d H:i:s');
            $idsession = $_SESSION['AccountID'];

      
            $sql = "INSERT INTO tbl_logs (Description, UserID, DateAndTime,StaffID)
            VALUES ('Reservation Completed', '$userid', '$datePhil','$idsession')";
            
            if (mysqli_query($conn, $sql)) {
                echo "<script>SwalHandler.handleSwal2();</script>";
            }
            
            mysqli_close($conn);
       






            
          }


      



}




?>


<?php 
if(isset($_GET['Delete'])){
 


    $id = $_GET['Delete'];
    $userid = $_GET['UserID'];
    
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
      
      
      $sql = "UPDATE tbl_appointmentlist SET Status='DELETED' WHERE ID ='$id'";
      
          if ($conn->query($sql) === TRUE) {


            date_default_timezone_set("Asia/Manila");
            $datePhil = date('Y-m-d H:i:s');
            $idsession = $_SESSION['AccountID'];

      
            $sql = "INSERT INTO tbl_logs (Description, UserID, DateAndTime,StaffID)
            VALUES ('Reservation Cancelled', '$userid', '$datePhil','$idsession')";
            
            if (mysqli_query($conn, $sql)) {
            echo "<script>SwalHandler.handleSwal3();</script>";
            } 
            
            mysqli_close($conn);
       

            
          
          }

}



?>

    


<script>
    $(document).ready(function () {
    $('#example').DataTable({
        paging: true,
        ordering: true,
        info: true,
    });
})
</script>











    </section>

    <script src="scriptsidebar.js"></script>

</body>
</html>