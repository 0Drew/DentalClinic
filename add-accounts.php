<?php session_start(); ?>

<?php


if ($_SESSION['AccountType'] == "Staff" || $_SESSION['AccountID'] == "" || $_SESSION['FirstName'] == "" ||  $_SESSION['LastName'] == "" ||  $_SESSION['AccountType'] == "" ||  $_SESSION['AccountType'] == "Customer") {


    $locationLogin = 'login.php';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="0; ' . $locationLogin . '">';
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
                            <i class='bx bx-food-menu icon'></i>
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
                        <a href="accounts.php" title="Accounts">
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
                        <i class='bx bx-log-out icon'></i>
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
                <form method="POST">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <h5 class="card-title text"><b>CREATE ACCOUNT</b></h5>
                            </center>

                            <hr>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="col-form-label" style="font-size: 18px;">First Name:<b style="color: red;">*</b></label>
                                    <input type="text"  class="form-control" id="" name="fname" style="width: 100%;" placeholder="First Name" required>
                                </div>

                                <div class="col-lg-6">
                                    <label class="col-form-label" style="font-size: 18px;">Last Name:<b style="color: red;">*</b></label>
                                    <input type="text"  class="form-control" id="" name="lname" style="width: 100%;" placeholder="Last Name" required>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="col-form-label" style="font-size: 18px;">Email:<b style="color: red;">*</b></label>
                                    <input type="text"  class="form-control" id="" name="email" style="width: 100%;" placeholder="abc@example.com" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="col-form-label" style="font-size: 18px;">Password:<b style="color: red;">*</b></label>
                                    <input type="password" class="form-control" id="" name="password" style="width: 100%;" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="col-form-label" style="font-size:18px;">Account Type:<b style="color: red;">*</b></label>
                                    <select class="form-select  form-control" name="acctype" id="" required>
                                        <option value="Doctor">Doctor</option>
                                        <option value="Staff">Staff</option>
                                        <option value="Customer">Customer</option>

                                    </select>
                                </div>
                            </div>


                            <br>
                            <br>

                            <center>
                                <button type="submit" name="SubmitSave" class="btn btn-success btn-lg">Create</button>
                            </center>
                        </div>

                    </div>

                </form>


                <script>
		const SwalHandler = {

	

			handleSwal2: () => {
				Swal.fire(
					'Accoount created Successfully!',
					'',
					'success'
					/*  'info' */
					/*  'error' */
				).then(function() {
                    window.location.href = "accounts.php";
                })


			},

	


		};
	</script>

                <?php 


        if(isset($_POST['SubmitSave'])){

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $acctype = $_POST['acctype'];

           
            date_default_timezone_set("Asia/Manila");
            $datePhil = date('Y-m-d H:i:s');
        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_dentalclinic";
            
      
            $conn = mysqli_connect($servername, $username, $password, $dbname);
       
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "INSERT INTO tbl_accounts (FirstName, LastName, Email, Password, AccountType, CreationDate)
            VALUES ('$fname', '$lname', '$email', '$password', '$acctype','$datePhil')";
            
            if (mysqli_query($conn, $sql)) {
           
               
                $idsession = $_SESSION['AccountID'];
    
          
                $sql = "INSERT INTO tbl_logs (Description, DateAndTime,StaffID)
                VALUES ('Account Created', '$datePhil','$idsession')";
                
                if (mysqli_query($conn, $sql)) {
                echo "<script>SwalHandler.handleSwal2();</script>";
                } 
                
         
           


            } 
            
            mysqli_close($conn);


        }
        
        ?>

            </div>

            <div class="col-md-1">

            </div>
        </div>










        <script>
            $(document).ready(function() {
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