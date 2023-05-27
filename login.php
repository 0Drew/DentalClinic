<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>YU1 Dental Care</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="./login.css" />
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
   
	<script src="https://kit.fontawesome.com/4f0b19e52a.js" crossorigin="anonymous"></script>

	<style type="text/css">
		span.fa {
			position: absolute;
			top: 66%;
			right: 60px;
			transform: translateY(-50%);
		}

		.form-group {
			position: relative;
		}
	</style>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>




  </head>

  <body>

<div >
 

    

    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="./php/store.php" method="post">
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your social media for registration</span>

          <br>
          <div class="row">
            <div class="col-md-4">
              <input type="text" placeholder="First" name="FirstName" id="FirstName" required />
            </div>
            <div class="col-md-4">
              <input type="text" placeholder="Middle" name="MiddleName"  id="MiddleName" />
            </div>
			<div class="col-md-4">
				
			<input type="text" placeholder="Last" style="width: 100%" name="LastName"  id="LastName" required />
			  </div>

          </div>
          <br>

     

          <div class="row">
            <div class="col-md-6">
				<input class="input" name="password1" id="password1"  type="password" placeholder="Enter Password" required><span id="togglePassword1" class="fa fa-eye-slash" 
				style="
				font-size: 22px; 
				position: absolute;
				top: 50%;
				left: 175px;
				transform: translateY(-50%);" ></span>
            </div>
            <div class="col-md-6">
				<input class="input" name="password2" id="password2" type="password" placeholder="Re-enter Password" required><span id="togglePassword2" class="fa fa-eye-slash" 
				style="
				font-size: 22px; 
				position: absolute;
				top: 50%;
				left: 175px;
				transform: translateY(-50%);" ></span> 
            </div>



			<script>
				const togglePassword1 = document.querySelector("#togglePassword1");
				const password1 = document.querySelector("#password1");
		
				togglePassword1.addEventListener("click", function() {
				
					const type = password1.getAttribute("type") === "password" ? "text" : "password";
					password1.setAttribute("type", type);
		
					this.classList.toggle("fa-eye");
				});
		
			
			</script>

			
	<script>
		const togglePassword2 = document.querySelector("#togglePassword2");
		const password2 = document.querySelector("#password2");

		togglePassword2.addEventListener("click", function() {
		
			const type = password2.getAttribute("type") === "password" ? "text" : "password";
			password2.setAttribute("type", type);

			this.classList.toggle("fa-eye");
		});

	
	</script>

		





          </div>
          <br>
		  <div class="row">
            <div class="col-md-6">
				<input type="email" placeholder="Email" name="Email" id="Email" required />

            </div>
            <div class="col-md-6">
                      
          <input type="date" placeholder="Birthdate" name="BirthDate" id="BirthDate"  required />
            </div>
          </div>

<br>
          <button type="submit">Sign Up</button>
        </form>
      </div>









      <div class="form-container sign-in-container">
        <form action="" method="post">
        <h1>Sign in</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account</span>
<br>


      <input type="email" placeholder="Email" name ="emaill" id="emaill"/><br>
		  <input class="input" name="password" id="password" type="password" placeholder="Password"><span id="togglePassword" class="fa fa-eye-slash" style="font-size: 25px;"></span>


	<script>
				const togglePassword = document.querySelector("#togglePassword");
				const password = document.querySelector("#password");
		
				togglePassword.addEventListener("click", function() {
				
					const type = password.getAttribute("type") === "password" ? "text" : "password";
					password.setAttribute("type", type);
		
					this.classList.toggle("fa-eye");
				});
		
			
			</script>
		



    <script>
		const SwalHandler = {

	

			handleSwal2: () => {
				Swal.fire(
					'Invalid Email and Password , Try Again!',
					'',
					'error'
					/*  'info' */
					/*  'error' */
				)

			},


		
			DoctorAndStaff: () => {
				Swal.fire(
					'Login Successfuly!',
					'',
					'success'
					/*  'info' */
					/*  'error' */
				).then(function() {
                    window.location.href = "appointment.php";
                })

			},

			Customer: () => {
				Swal.fire(
					'Login Successfuly!',
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






    <?php 

if(isset($_POST['login'])){


  $email =  $_POST['emaill'];
  $accpass = $_POST['password'];
  


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_dentalclinic";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT * FROM tbl_accounts WHERE Email ='$email' AND Password = '$accpass' AND AccountStatus='ACTIVE' ";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();



if($row['AccountType']=="Doctor"){
 

  $_SESSION['AccountID'] = $row['AccountID'];
  $_SESSION['FirstName'] = $row['FirstName'];
  $_SESSION['LastName'] = $row['LastName'];
  $_SESSION['AccountType'] = $row['AccountType'];
  $_SESSION['Email'] = $row['Email'];

  echo "<script>SwalHandler.DoctorAndStaff();</script>";

}
else if($row['AccountType']=="Customer"){

  $_SESSION['AccountID'] = $row['AccountID'];
  $_SESSION['FirstName'] = $row['FirstName'];
  $_SESSION['LastName'] = $row['LastName'];
  $_SESSION['AccountType'] = $row['AccountType'];
  $_SESSION['Email'] = $row['Email'];
  echo "<script>SwalHandler.Customer();</script>";
}
   
     
  } else {
    echo "<script>SwalHandler.handleSwal2();</script>";


    
  }
  $conn->close();





}



?>

  
        <a href="#" style="padding-left: 300px;">Forgot your password?</a>


     
       <button type="submit" name="login" id="login">Sign In</button>
        </form>


      


      </div>

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">

            <a href="index.php"><img src="./img/yu1-logo.png" width="auto" height="200"></a>


            <h1>Welcome Back!</h1>
            <p>
              A better life starts with a beautiful smile, schedule an
              appointment now!
            </p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>

          <div class="overlay-panel overlay-right">
            <a href="index.php"> <img src="./img/yu1-logo.png" width="auto" height="200"></a>
            <h1>Hi!</h1>
            <p>Register now, and experience a caring positive experience at our dental clinic.</p>
          <button class="ghost" id="signUp">Sign Up</button>
			<br><br><br>
          </div>
		  
        </div>
      </div>
    </div>

    <script src="./loginscript.js"></script>
  </body>
</html>
