<?php
if(isset($_POST['submit'])){
    $to = "soemthing@something.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = $_POST['form_subject'];
    $subject2 = "Copy of your " . $subject . " submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $first_name . ", we be in contact with you shortly."
    $var = "Mail Sent. Thank you " . $first_name . ", we be in contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }


?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Alvin's Portfolio</title>

    <link href="https://fonts.googleapis.com/css?family=Courgette|PT+Serif|Titillium+Web" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/master.css">

</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="#" >
              <p>Alvin</p>
            </a>
          </div>
          <div class="nav navbar-nav navbar-right">
            <ul class="nav navbar-nav" >
              <li role="presentation"><a href="#meet-me">Meet Me</a></li>
              <li role="presentation"><a href="#portfolio">Portfolio</a></li>
              <li role="presentation"><a href="#contact">Let's Connect</a></li>

              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  Employers <span class="glyphicon glyphicon-collapse-down"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a href="employer/employer.html">Certifications</a></li>
                  <li role="presentation"><a href="img/Alvin Webb Resume.pdf" target="_blank">Resume <span class="glyphicon glyphicon-arrow-down"></span></a></li>
                </ul>
              </li>
            </ul>

          </div>
        </div>
    </nav>
    <div class="" id="meet-me"></div>
    <br>
    <div class="sent-email">
        <?php

            if (!empty($var)) {
                echo $var;
            }
        ?>
    </div>
    <div class="container-fluid" >
      <section >
        <div class="jumbotron">
          <div class="about-me">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <img src="img/me.jpg" alt="Picture of Alvin">
              </div>
              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 about">
                <h2>My Name is Avin</h2>
                <p>
                  I have always been interested in Technology since I was 13. I would tinker with computers I would find in thrown away. <br>
                  I learned CompTia A+ while at <a href="http://www.jobcorps.gov/home.aspx" target="_blank">Job Corps</a>. I was 19 I started my Tech Career fixing computers. <br>
                  I'm currently working for <a href="http://www.kellyservices.us" target="_blank">KellySerivces</a>, I have been with the company Almost 3 years working as Technical Support for Apple Products. <br>
                  I always wanted to learn how to write code, and I have been working in Technical Support for around 8 Years. I was ready for a new Challange... <br>
                  I have been learning my skill from online resourses like <a href="#" target="_blank">FreeCodeCamp</a>, <a href="#" target="_blank">Udemy</a>, <a href="#" target="_blank">Lynda</a>, and <a href="#" target="_blank">Skillcrush</a>. <br>
                  I have also been reading Jon Ducketts Books on HTML/CSS and currently Javascript/jQuery.<br>
                  As of 2/27/2017 I have Started attending <a href="https://www.fullsail.edu" target="_blank">Full Sail university</a>. Degree: Bachelor of Science Web Design &amp; Development.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="portfolio">
        <div class="portfolio">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/500x300">
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/500x300">
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/500x300">
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/500x300">
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/500x300">
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/500x300">
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/500x300">
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/500x300">
              </a>
            </div>
          </div>


        </div>
      </section>
      <section id="contact">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Basic Package
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    Basic Body
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Advance Package
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    Advance Body
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Premium Package
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    Premium Body
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h4 class="text-center">Let's Connect!</h4>

            <!-- <form action="" method="post">
              First Name: <input type="text" name="first_name"><br>
              Last Name: <input type="text" name="last_name"><br>
              Email: <input type="text" name="email"><br>
              Subject: <select name="form_subject">
                          <option value="Basic Package">Basic Package</option>
                          <option value="Advance Package">Advance Package</option>
                          <option value="Premium Package">Premium Package</option>
                      </select><br>
              Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
              <input type="submit" name="submit" value="Submit">
            </form> -->


          </div>
        </div>
      </section>
      </div>

      <script src="js/jquery-3.1.1.js" charset="utf-8"></script>
      <script src="js/bootstrap.js" charset="utf-8"></script>
      <script src="script.js" charset="utf-8"></script>
      </body>

      </html>
