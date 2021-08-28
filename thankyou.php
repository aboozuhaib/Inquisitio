<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>About</title>
        <link rel="stylesheet" href="style_about.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
        body{
    background-color: #000 !important;
}
.navbar{
    background:rgba(0, 0, 0, 0.85);
}
.navbar-nav a{
    font-family: sans-serif;
    font-size: 18px;
    text-transform: uppercase;
    font-weight: bold;
}
.navbar-dark .navbar-brand {
    font-size: 25px;
    text-transform: uppercase;
    font-weight: bold;
    letter-spacing: 2px;
}
.navbar-nav{
    text-align: center;
}
.nav-link{
    padding: .2rem 1rem;
}
.jumbotron{
    color: white !important;
    background-color: #111 !important;
}
.jumbotron .lead{
    padding-top: 10px;
}
.footer-top p{
    color: #999;
    line-height: 25px;
}
.footer-top h2,h3{
    color: #fff;
}
.footer-top h2{
    font-size: 18px;
}
.footer-top{
    background: #111;
    padding: 80px 0;
}
.segment-one h3{
    font-family: Cougrette;
    color: #fff;
    letter-spacing: 3px;
    margin: 10px 0;
}
.segment-two h2{
    color: #fff;
    font-family: sans-serif;
    text-transform: uppercase;
}
.segment-two h2::before{
    content: '|';
    color: #c65039;
    padding-right: 10px;
}
.segment-two a{
    background: #494848;
    width: 40px;
    height: 40px;
    display: inline-block;
    border-radius: 50%;
}
.segment-two a i{
    font-size: 20px;
    color: #fff;
    padding: 10px 12px;
}
.footer-bottom-text{
    color: #696969;
    text-align: center;
    background: #000;
    line-height: 75px;
}
@media only screen and (min-width: 768px) and (max-width: 991px){
    .md-mb-30{
        margin-bottom: 30px;
    }
} 
@media only screen and (max-width: 991px){
    .navbar-nav.ml-auto{
        background: rgba(0, 0, 0, 0.5);
    }
    .navbar-toggler{
        padding: 1px 5px;
        font-size: 18px;
        line-height: 0.3;
    }
    .navbar-brand{
        font-size: 17px !important;
    }
    .jumbotron .display-4{
        font-size: 40px;
        text-align: left !important;
    }
    .sm-mb-30{
        margin-bottom: 30px;
    }
    .footer-top{
        padding: 50px 0;
    }
    .wrapper .card{
        margin-top: 65px;
        margin-left: 30px;
        height: 130px;
        width: 130px;
    }
    .container .row .col-6{
        margin-top: 90px;
        padding-top: 5px;
        padding-left: 20px;
        font-size: 20px;
    }
    .jumbotron{
        padding-bottom: 10px !important;
    }
    .segment-one h3{
        font-size: 20px !important;
        padding-top: 5px;
    }
}
      </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" style="color: #66FCF1; font-family: 'Courier New', Courier, monospace;" href="">INQUISITIO</a>
                <button class="navbar-toggler" style="background: #111; box-shadow: 0 0 5px 3px #66FCF1;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" style="color: #fff;" href="logout.php">Logout</a>
                    </li>
                  </ul>
                </div>
            </div>
        </nav>
        <div class="space" style="height: 55px; background-color: black;">
        
        </div>
        <div class="mx-auto">
          <center><h2 style="color:white;">You have successfully completed the online hunting round.</h2></center><br> <br>
        <center><a class="btn btn-primary btn-lg" href="logout.php" id="proceedbtn" role="button" style=" margin-right: 20px;background:rgba(0, 0, 0, 0.85); border: 1px solid #66fcf1; border-radius: 0;" >LOGOUT</a></center>
        </div>
        </div>
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 segment-one md-mb-30 sm-mb-30">
                            <div style="float: left;">
                              <h3 style="color: #66FCF1; float: right; padding-left: 5px;">ISTE Kerala Chapter</h3>
                            </div>
                            <hr>
                            <hr>
                            <p style="padding-top: 10px; margin-top: 5px;">ISTE assists students to boost their cognititve skills and personality and contributes in the production of exceptional engineers.</p>
                          </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 segment-two md-mb-30 sm-mb-30">
                            <h2 style="color: #66FCF1;">Follow Us</h2>
                            <p>Please Follow us on our Social Media Profiles in order to keep updated.</p>
                        </div>
                    </div>
                </div>
            </div>
            <p class='footer-bottom-text'>All Right reserved by &copy;ISTE TECH TEAM  &copy;Inquisitio'21 . Made with ❤️ Team 404 ISTE TKMCE.</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
