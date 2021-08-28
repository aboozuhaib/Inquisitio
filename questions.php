<?php
session_start();
if(!$_SESSION['alogin']){
  echo "<script type='text/javascript'> document.location = ''; </script>";
}
else {
include('config.php');
$username = $_SESSION['alogin'];
$sql ="SELECT * FROM teamlevel WHERE username=:username";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$userlevel = $results[0]->level;
if($userlevel>=16){  // ADD MAXIMUM LEVEL
    echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}
$_SESSION['plevel'] = $userlevel;
// echo "<script>alert($userlevel); </script>";
$endtime = "Dec 6, 2020 18:00:00";
settype($endtime, "string");
// echo "<script>alert('$endtime'); </script>";

if($query->rowCount() > 0)
{ 
  
    $sql ="SELECT * FROM `levels` WHERE `level`=:userlevel";
    $query1= $dbh -> prepare($sql);
    $query1-> bindParam(':userlevel', $userlevel, PDO::PARAM_STR);
    $query1-> execute();
    $quesimg=$query1->fetchAll(PDO::FETCH_OBJ);
    if($query1->rowCount() > 0){

        $ques = $quesimg[0]->img;
        $ans = $quesimg[0]->answer;
        $anslength = strlen($ans);

    }
}  
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Questions Page</title>
    <link rel="stylesheet" href="style_home.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a
          class="navbar-brand"
          style="font-family: 'Courier New', Courier, monospace"
          href="#"
          >INQUISITIO</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.html">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div
      class="jumbotron"
      style="
        background-color: #fff;
        margin-top: 0;
        padding-top: 0;
        padding-bottom: 125px;
        text-align: center !important;
      "
    >
      <h1
        class="display-4"
        style="
          color: #fff;
          font-family: 'Courier New', Courier, monospace;
          padding-top: 100px !important;
        "
      >
        FIND OUT!
      </h1>
      <p class="lead">Anything related to Question.</p>
      <hr class="my-4" style="background-color: white" />
      <img
        src="<?php echo $ques ?>"
        class="img-fluid"
        alt="responsive image"
        style="height: 500px; width: auto"
      />
      <div class="container">
        <p style="color: #fff; text-align: left">Answer :</p>
        <div class="ansDashes input-group mb-3 mx-auto"></div>
        <a
          class="btn btn-primary btn-lg"
          id="proceedbtn"
          role="button"
          style="
            margin-right: 20px;
            background: rgba(0, 0, 0, 0.85);
            border: 1px solid #fff;
            border-radius: 0;
          "
          onclick="checkAnswer()"
          >Proceed</a
        >
      </div>
    </div>
    <hr class="my-4" style="background-color: white" />
    <footer>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div
              class="col-md-6 col-sm-12 col-xs-12 segment-one md-mb-30 sm-mb-30"
            >
              <div style="float: left">
                <img
                  src="istelogo.jpeg"
                  alt=""
                  width="50"
                  height="50"
                  title="ISTE"
                />
                <h3 style="color: #fff; float: right; padding-left: 5px">
                  ISTE TKMCE Chapter
                </h3>
              </div>
              <hr />
              <hr />
              <p style="padding-top: 10px; margin-top: 5px">
                ISTE assists students to boost their cognititve skills and
                personality and contributes in the production of exceptional
                engineers.
              </p>
            </div>
            <div
              class="col-md-6 col-sm-12 col-xs-12 segment-two md-mb-30 sm-mb-30"
            >
              <h2 style="color: #fff">Follow Us</h2>
              <p>
                Please Follow us on our Social Media Profiles in order to keep
                updated.
              </p>
              <a href="https://instagram.com/istekerala"
                ><i class="fa fa-instagram"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
      <p class="footer-bottom-text">
        All Right reserved by &copy;Inquisitio.2021. Made with ❤️ Team 404 ISTE TKMCE.
      </p>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
    <script type="text/javascript">
            var endtime =<?php echo json_encode($endtime); ?>;
            console.log(endtime);
            var countDownDate = new Date(endtime).getTime();
            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("demo").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
                document.getElementById('demo').style.color = "white";
                document.getElementById('demo').style.backgroundColor = "black";
                document.getElementById('demo').style.height = "30px";
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                    document.getElementById("proceedbtn").style.display = "none";
                    document.getElementById("timesup").src = "timeup.png";
                }
            }, 1000)

            
            let options = {
                startAngle: -1.55,
                size: 100,
                value: 0.8,
                fill:  {color: "white"}
            }
            $(".circle .bar").circleProgress(options).on('circle-animation-progress',
            function(event, progress, stepValue){
                $(this).parent().find("span").text(String(stepValue.toFixed(2).substr(2))+"%");
            });
           
            var ans = "sasass";
            var answer = ans.toUpperCase();
            var container = document.getElementsByClassName("ansDashes")[0];
            var useranswer = '';

            var dashHtml='';
            var i;
            for (i = 0; i < <?php echo $anslength;?>; i++  ){
         
                dashHtml +="<input type='text' style='width: 30px; text-align: center; font-family: sans-seriff' class='letter' oninput='this.value = this.value.toUpperCase()' maxlength='1'></input>"
            }
            container.innerHTML = dashHtml;
            // move curser through each letter

            container.onkeyup = function(e) {
                var target = e.srcElement;
                var maxLength = parseInt(target.attributes["maxlength"].value, 10);
                var myLength = target.value.length;
                if (myLength >= maxLength) {
                    var next = target;
                    while (next = next.nextElementSibling) {
                        if (next == null)
                            break;
                        if (next.tagName.toLowerCase() == "input") {
                            next.focus();
                            break;
                        }
                    }
                }
     
                // backspace
                else if (myLength === 0) {
                    var previous = target;
                    while (previous = previous.previousElementSibling) {
                        if (previous == null)
                            break;
                        if (previous.tagName.toLowerCase() === "input") {
                            previous.focus();
                            break;
                        }
                    }
                }
            }

                var getAnswer= ()=>{
                var lettersDiv = container.childNodes;
                window.useranswer = '';
                for(i in lettersDiv){
                    if(lettersDiv[i].value){
                        window.useranswer += lettersDiv[i].value;
                    }        
                }
                
                return answer;
                }

                function checkAnswer(){
                getAnswer()
                 $.post("saveteamdata.php",
                 {
                    temdata:  JSON.stringify(window.useranswer)
                 },
                    function(data, status){
                    alert(data);
                    location.reload();
                    });
                 }
                
        </script>
  </body>
</html>
