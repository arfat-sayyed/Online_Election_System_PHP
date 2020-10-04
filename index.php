<!-- //Here the Voter & Admin can login -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>OES INDIA</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>

</head>
<body class="container-fluid">

    <div class="text-center">

        <div class="text-center textBG">

            <h1>Online Election System</h1>
            <p>The Most Secure System For Voting In INDIA</p>

        </div>

        <div class="jumbotron" style="padding: 10px">

            <h2><u>Latest News</u></h2>

            <p class="p1">

                <!-- <span style="color:black; font-style: italic">1.</span> -->
                <marquee scrollamount="10" align="middle">The Indian General elections, 2019 are expected to be held in April and May 2019 to constitute the 17th Lok Sabha</marquee>
                <!-- <span style="color:black; font-style: italic">2.</span> -->
                <marquee scrollamount="10" align="middle">2019 General Elections in India could be the world's most expensive</p></marquee>
                
        </div>
    </div>

    <hr>


<!-- TIMER in JS -->


   <div class="text-center"> 
<!-- Display the countdown timer in an element -->
<p id="demo"></p>
<script>
 // Set the date we're counting down to
var countDownDate = new Date("May 12, 2019 10:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000); 

</script>
</div>


<hr>

<?php
$timelogin = date("Apr 11, 2019 10:00:00");
$timelogin2 = date("Apr 11, 2019 17:00:00");
$time = time();
$actual_time = date('', $time);


?>

    <div class="text-center" style=" padding:10px">
    <div id="google_translate_element"></div>
            <a href="schedule.html"><button type="button" class="btn btn-danger f30">Schedule</button></a>
            <a href="Result.php"><button type="button" class="btn btn-success f30">View RESULT By Constituency</button></a>
            <a href="Final Result.php"><button type="button" class="btn btn-success f30">View Overall Result</button></a>
                

                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                        }
                    </script>  
                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                </div>

        </div>
    <?php
        if( isset($_POST['submit'])) 
        {
            include('conn.php'); //code is given below (used for database connection)
            $user=$_POST['adminId'];
            $pass=$_POST['password1'];
    
            $ret=mysqli_query( $conn, "SELECT * FROM admin_login WHERE adminname='$user' AND adminpassword='$pass' ") or die("Could not execute query: " .mysqli_error($conn));
            $row = mysqli_fetch_assoc($ret);
            if($row) {
                header("Location: AdminAfterLogin.php");
            }
            else {
                // session_start();
                // $_SESSION['user']=$user;
                // header('location: account.php');
                echo "<script>alert('INCORRECT CREDENTIALS')</script>";
            }
        }

        if( isset($_POST['voter'])) 
        {
            include('conn.php'); //code is given below (used for database connection)
            $voterId=$_POST['voterId'];
           
            $query=mysqli_query( $conn, "SELECT * FROM voters WHERE VoterId='$voterId' AND votecheck='0'") or die("Could not execute query: " .mysqli_error($conn));
            $row1 = mysqli_fetch_assoc($query);
            if($row1) {
                $query2 = mysqli_query($conn, "UPDATE voters SET votecheck='1' WHERE VoterId='$voterId'");
                  header("Location: AfterVoterLogin.php");
            }
            else {
                // session_start();
                // $_SESSION['user']=$user;
                // header('location: account.php');
                echo "<script>alert('INCORRECT CREDENTIALS OR ALREADY VOTED!')</script>";
            }
        }
        
    ?>

    <div class="container login-container">
        <div class="row">
            <div class="col-md-4 login-form-1">
                <h3>Admin Login</h3>
                <form action="#" method="POST" role="form">
                    <div class="form-group">
                        <input name="adminId" type="text" class="form-control"  placeholder="Your ID *" required/>
                    </div>
                    <div class="form-group">
                        <input name="password1" type="password" class="form-control" placeholder="Your Password *" required/>
                    </div>
                    <div class="form-group">
                        <input name="submit" type="submit" class="btnSubmit" value="Login" /><br><br>
                        <input type="reset" class="btnSubmit" value="Reset" />
                    </div>
                    <!-- <div class="form-group">
                        <a href="#" class="ForgetPwd">Forget Password?</a>
                    </div> -->
                </form>
            </div>
            <div class="col-md-8 login-form-2">
                <h3>Voter Login</h3>
                <div class="container">
                    <div class="error"></div>
                <form action="#" method="POST" id="frm-mobile-verification">
                    <div class="form-group">
                        <input name="voterId" type="text" maxlength="10" class="form-control" placeholder="Your Voter ID *" value="" required/>
                    </div>
                        <!-- <div class="form-heading">Mobile Number Verification</div> -->

                        <input name="voter" type="submit" class="btnSubmit" value="Login">
                    </div>
                    </form>
                </div>

                <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
                <script src="verification.js"></script>
                        
            </div>
            
    <hr>

    <div class="text-center">

            <h2><u>View Electors Party Information Here</u></h2>
            
                <a href="PartiesProfile/BJP.html"><button type="button" class="btn btn-primary f15">BJP</button></a>
            
                <a href="PartiesProfile/INC.html"><button type="button" class="btn btn-primary f15">Congress</button></a>
    
                <!-- <button type="button" class="btn btn-warning f15">More Parties</button> -->

    </div>
    
    <hr>

</body>
</html>