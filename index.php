<?php session_start(); 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';?>





<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>YU1 Dental Care</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
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
      <a class="navbar-brand page-scroll" href="index.php"><img class="logo" src="img/yu1-logo.png" style="width:auto; height: 60px; top:2px; position:fixed; " > </a>
    </div>

  
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
       
        <li class="hidden">
          <a class="page-scroll" href=""></a>
        </li>
        <li>
          <a class="page-scroll" href="about.php">About</a>
        </li>
        <li>
          <a class="page-scroll" href="services.php">Services</a>
        </li>
        <li>
          <a class="page-scroll" href="contact.php">Contact</a>
        </li>
        <li>
          <a class="page-scroll" href="login.php">Login</a>
        </li>

      </ul>
    </div>

  </div>

</nav>

<div class="container-fluid hero-container">

  <div class="container">
    <div class="row hero-row">

      <div class="col-md-6 hero-text">
        <h1 class="hero-title"><b>Welcome to YU1 Dental Care</b></h1>
        <h3 class="hero-under-title">We offer high-quality dental care in the Olongapo City area.</h3>
        <button type="button" class="btn btn-lg btn-hero">Learn More</button>
        <button type="button" class="btn btn-lg btn-hero">Our Services</button>
      </div>

      <div class="col-md-6">
        <img class="hero-image" src="img/DocPicture1.png" style="padding-top:50px;">
      </div>
    </div>
  </div>

</div>



<div class="container services">

  <div class="row">

    <div class="col-lg-4">

      <div class="icon-list-item">

      <img class="hero-image" src="img/tooth-extraction.png" style="height:75px; width:auto;">
        <div class="icon-list-content">
          <h3 class="IconTitle">Tooth Extraction</h3>
          <h5 class="icon-list-under">A dental extraction is the removal of teeth from the dental alveolus in the alveolar bone.</h5>
        </div>

      </div>

    </div>

    <div class="col-lg-4">

      <div class="icon-list-item">
      <img class="hero-image" src="img/braces.png" style="height:75px; width:auto;">

        <div class="icon-list-content">
          <h3 class="IconTitle">Orthodontics</h3>
          <h5 class="icon-list-under">A dental specialty focused on aligning your bite and straightening your teeth.</h5>
        </div>

      </div>

    </div>

    <div class="col-lg-4">

      <div class="icon-list-item">

      <img class="hero-image" src="img/prevention.png" style="height:75px; width:auto;">

        <div class="icon-list-content">
          <h3 class="IconTitle">Dental Prevention</h3>
          <h5 class="icon-list-under">Preventive dentistry is dental care that helps maintain good oral health. It's a combination of regular dental check-ups along with developing good habits like brushing and flossing.</h5>
        </div>

      </div>

    </div>

  </div>

  <div class="row">

    <div class="col-lg-4">

      <div class="icon-list-item">

      <img class="hero-image" src="img/tooth-whitening.png" style="height:75px; width:auto;">

        <div class="icon-list-content">
          <h3 class="IconTitle">Whitening Teeth</h3>
          <h5 class="icon-list-under">Teeth whitening involves bleaching your teeth to make them lighter.</h5>
        </div>

      </div>

    </div>

    <div class="col-lg-4">

      <div class="icon-list-item">

      <img class="hero-image" src="img/prothesis.png" style="height:75px; width:auto;">

        <div class="icon-list-content">
          <h3 class="IconTitle">Oral Surgery</h3>
          <h5 class="icon-list-under">An operation performed on your teeth, gums, jaw or surrounding oral and facial structures.</h5>
        </div>

      </div>

    </div>

    <div class="col-lg-4">

      <div class="icon-list-item">

      <img class="hero-image" src="img/emergency-call.png" style="height:75px; width:auto;">

        <div class="icon-list-content">
          <h3 class="IconTitle">Emergency Care</h3>
          <h5 class="icon-list-under">A dental department concerned with unforeseen dental issues that require immediate attention.</h5>
        </div>

      </div>

    </div>

  </div>

</div>



<div class="container-fluid contact-section">

    <div class="container">
      <form action="" method="post">
        <div class="row">

          <div class="col-lg-6">

            <h2 class="contact-form-title">Testimonials</h2>
            <div class="testimonial">
              <p class="testimonial-text">"Thank you for providing me with excellent dental care over the years. I've been a patient at your clinic for over 15 years and couldn't be happier with the results. YU1 Dental Care is highly recommended. Outstanding work. I've had several root canals done at this clinic, and each one was painless and quick to heal."</p>
              <h4 class="testimonial-name">Carlo Andrew Mallari, Patient</h4>
            </div>
            <div class="testimonial">
              <p class="testimonial-text">"Thank you for providing me with excellent dental care over the years. I've been a patient at your clinic for over 15 years and couldn't be happier with the results. YU1 Dental Care is highly recommended. Outstanding work."</p>
              <h4 class="testimonial-name">Salvador Reylara, Patient</h4>
            </div>

          </div>

          <div class="col-lg-6">
            <h2 class="contact-form-title">Schedule Your Dental Appointment</h2>
            <ul class="input-list style-1 clearfix">
              <li>
                <input type="text" name="firstname" placeholder="Please enter your First Name" required>
              </li>
              <li>
                <input type="text" name="lastname" placeholder="Please enter your Last Name" required>
              </li>
              <li>
                <input type="email" name="email" placeholder="Enter your email" required>
              </li>
              <li>
                <label for="datetime" style="color:white" class="label-size">Choose Date & Time:</label>
                <input type="datetime-local" id="datetime" name="datetime" class="selectbox" required>
              </li>
              <li>
                <label for="categ" style="color:white"  class="label-size">Choose Category:</label>
                <select class="form-select selectbox" name="choice" id="categ" required>
                  <option value="Tooth Extraction">Tooth Extraction</option>
                  <option value="Orthodontics">Orthodontics</option>
                  <option value="Dental Prevention">Dental Prevention</option>
                  <option value="Whitening Teeth">Whitening Teeth</option>
                  <option value="Oral Surgery">Oral Surgery</option>
                  <option value="Emergency Care">Emergency Care</option>
                </select>
              </li>

            </ul>
            <button type="submit" name="submitEmail" class="btn btn-lg btn-hero contact-button">Submit</button>
          </div>

        </div>
      </form>

      <script>
		const SwalHandler = {

	

			handleSwal2: () => {
				Swal.fire(
					'The email was sent successfully!',
					'',
					'success'
					/*  'info' */
					/*  'error' */
				)

			},


	


	


		};
	</script>




<?php 

if(isset($_POST['submitEmail'])){

 $firstname = $_POST['firstname'];
 $lastname =  $_POST['lastname'];
 $email =  $_POST['email'];
 $datetime =  $_POST['datetime'];
 $choice =  $_POST['choice'];



 $email = "yuanlinic0@gmail.com";
 $name = "Carlo";

  
   
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
     $mail->Body    =  '<p><b>Reservation Request</b><br><br>
     <b>Fullname:</b> ' . $firstname . ' ' . $lastname . '<br>
     <b>Email:</b> ' . $email . '<br>
     <b>Date And Time Request:</b> ' . $datetime . '<br>
     <b>Category:</b> ' . $choice . '<br>
                 ';
     $mail->send();
   
     echo "<script>SwalHandler.handleSwal2();</script>";


    } catch (Exception $e) {
       echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }




}


?>

    </div>

  </div>

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script  src="./script.js"></script>

</body>
</html>
