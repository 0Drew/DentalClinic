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

        <div class="col-md-2">

        </div>

        <div class="col-md-8 hero-text1">
          <center>
            <h1 class="hero-title"><b>About Us</b></h1>
          </center>
          <center>
            <p align="justify" class="hero-under-title1">Welcome to YU1 Dental Clinic, where your oral health is our top priority. At YU1, we believe that a healthy and confident smile can
              truly transform lives. With our team of dedicated dental professionals, state-of-the-art facilities, and patient-centric approach,
              we are committed to providing exceptional dental care in a comfortable and welcoming environment.</p>
          </center>
          <br>
          <br>
        </div>

        <div class="col-md-5">
          <img class="hero-image1" src="img/DocPicture1.png" style="padding-top:50px;">
        </div>
      </div>
    </div>

  </div>



  <div class="container-fluid contact-section">

    <div class="container">
      <form method="post">
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
                <input type="text" placeholder="Please enter your First Name" required>
              </li>
              <li>
                <input type="text" placeholder="Please enter your Last Name" required>
              </li>
              <li>
                <input type="text" placeholder="Enter your email" required>
              </li>
              <li>
                <label for="datetime" style="color:white" class="label-size">Choose Date & Time:</label>
                <input type="datetime-local" id="datetime" class="selectbox" required>
              </li>
              <li>
                <label for="categ" style="color:white" class="label-size">Choose Category:</label>
                <select class="form-select selectbox" id="categ" required>
                  <option value="1">Tooth Extraction</option>
                  <option value="2">Orthodontics</option>
                  <option value="3">Dental Prevention</option>
                  <option value="4">Whitening Teeth</option>
                  <option value="5">Oral Surgery</option>
                  <option value="6">Emergency Care</option>
                </select>
              </li>

            </ul>
            <button type="submit" class="btn btn-lg btn-hero contact-button">Submit</button>
          </div>

        </div>
      </form>
    </div>

  </div>







  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  <script src="./script.js"></script>

</body>

</html>