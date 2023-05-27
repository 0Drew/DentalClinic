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
  <script src="https://kit.fontawesome.com/4f0b19e52a.js" crossorigin="anonymous"></script>


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

        <div class="col-md-3">

        </div>

        <div class="col-md-6 hero-text2">
          <center>
            <h1 class="hero-title"><b>Contact Us</b></h1>
          </center>
          <center>
            <h3 class="hero-under-title">Take the first step towards a healthier smile – get in touch with us today!</h3>
          </center>
          <br>
          <br>
        </div>

        <div class="col-md-6">
          <img class="hero-image2" src="img/DocPicture1.png" style="padding-top:50px;">
        </div>
      </div>
    </div>

  </div>



  <div class="container services">


    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="bgc">
              <img class="logo1" src="img/yu1-logo.png" alt="logo">
            </div>
          </div>

          <div class="col-md-6">
            <form action="POST">

              <div class="row">

                <div class="col-lg-6">
                  <label for="email">Email:</label>
                  <div class="social-container">
                    <input type="text" id="email" placeholder="Enter your email" required>
                  </div>
                </div>

                <div class="col-lg-6">
                  <label for="social">Or Our Social Media:</label>
                  <div class="social-container" id="socialmedia">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                  </div>
                </div>

              </div>


              <label for="txtarea">Subject:</label>
              <textarea name="txtarea" id="txtarea" placeholder="You're Message.." cols="70" rows="10" required></textarea>
              <br>
              <center>
                <button type="submit" class="btn btn-primary">Submit</button>
              </center>




            </form>

          </div>
        </div>
      </div>
    </div>

  </div>






  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  <script src="./script.js"></script>

</body>

</html>