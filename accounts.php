<?php session_start(); ?>

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
                    <a href="#" onclick="return SwalHandler.handleSwal3();">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                
            </div>
        </div>

    </nav>


    <section class="home">
        <div class="text">Accounts</div>
<br><br>


<div class="row">
    <div class="col-md-1">
    
    </div>  
    <div class="col-md-10">
    <a href="add-accounts.php"> <button type="button" class="btn btn-primary" style="background-color: #67c6b8; border-color: #67c6b8;">Add Accounts</button></a><br><br>
       
        <table id="example" class="display" style="width:100%; background-color: white; ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Account Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>




            <script>
		const SwalHandler = {

			handleSwal1: () => {
				Swal.fire(
					'Account Activated!',
					'',
					'success'
					/*  'info' */
					/*  'error' */
				).then(function() {
                    window.location.href = "accounts.php";
                })

			},

			handleSwal2: () => {
				Swal.fire(
					'Account Deactivated!',
					'',
					'success'
					/*  'info' */
					/*  'error' */
				).then(function() {
                    window.location.href = "accounts.php";
                })

			},


		
            handleSwal3: () => {

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

}


	


		};
	</script>




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

$sql = "SELECT * FROM tbl_accounts WHERE AccountType!='Customer'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

  echo "<tr>
  <td>" . $row["AccountID"]. "</td>
  <td>" . $row["FirstName"]. "</td>
  <td>" . $row["LastName"]. "</td>
  <td>" . $row["Email"]. "</td>
  <td>" . $row["AccountType"]. "</td>
  <td>


  <a href='edit-accounts.php?ID=" . $row["AccountID"]. "'> <button type='button' class='btn btn-success btn-sm'><i class='fa-solid fa-pen-to-square'></i></button></a>
      
";

if($row["AccountStatus"]=="ACTIVE"){
    echo '<a href="accounts.php?ID=' . $row["AccountID"]. '&Status=' . $row["AccountStatus"]. '"><button type="button" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to deactivate this account?\')" >Deactivate</button></td></a>';
}else{
    echo '<a href="accounts.php?ID=' . $row["AccountID"]. '&Status=' . $row["AccountStatus"]. '"><button type="button" class="btn btn-success btn-sm" onclick="return confirm(\'Are you sure you want to activate this account?\')">Activate</button></td></a>';
}


echo "</tr>";


  }
} 

mysqli_close($conn);
?>


<?php 

if(isset($_GET['ID']) && isset($_GET['Status'])){



$id = $_GET['ID'];
if($_GET['Status']=="ACTIVE"){
    $Status = "INACTIVE";
}
else{
    $Status = "ACTIVE";
}



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


$sql = "UPDATE tbl_accounts SET AccountStatus='$Status' WHERE AccountID ='$id'";

    if ($conn->query($sql) === TRUE) {
    


        if($_GET['Status']=="ACTIVE"){
            echo "<script>SwalHandler.handleSwal2();</script>";
        }
        else{
            echo "<script>SwalHandler.handleSwal1();</script>";
        }
        

     




    }

}

?>








        <!--         <tr>
                    <td>1</td>
                    <td>Carlo</td>
                    <td>Mallari</td>
                    <td>CarloMallari@gmail.com</td>
                    <td>Dentist</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm">Deactivate</button></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Salvador</td>
                    <td>Reylara</td>
                    <td>SalvadorReylara@gmail.com</td>
                    <td>Staff</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="button" class="btn btn-success btn-sm">Activate</button></td>
                </tr>
          
            -->
            
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Account Type</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>

    </div>

    <div class="col-md-1">
    
    </div>
</div>
    
      





    


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