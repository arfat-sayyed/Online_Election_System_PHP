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

</head>
<body class="container-fluid">
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php
include('conn.php');
session_start();

?>
    
    <div class="text-center textBG">
        <h1>Online Election System</h1>
        <p>The Most Secure System For Voting In INDIA</p>
    </div>
    
    <hr>
    
    <div class="text-center">

        <h2><u>Select Candidate Service</u></h2>
        
            <a href="Adminlogin.php"><button type="button" class="btn btn-success f30">Create Candidate New Profile</button></a>
        
            <a href="ViewProfiles.php"><button type="button" class="btn btn-danger f30">View All Profiles</button></a>

            
    </div>

    <hr>
    
    <div class="text-center">

        <h2><u>Select Voter Service</u></h2>
        
            <a href="Voterlogin.php"><button type="button" class="btn btn-success f30">Create Voter New Profile</button></a>
        
            <a href="ViewProfilesVoter.php"><button type="button" class="btn btn-danger f30">View All Profiles</button></a>

    </div>

       <hr>

       <div class="text-center">

        <h2><u>RESULT</u></h2>
        <a href="Result Admin.php"><button type="button" class="btn btn-success f30">View RESULT By Constituency</button></a>

        <a href="Final Result Admin.php"><button type="button" class="btn btn-success f30">View Overall Result</button></a>
        </div>
       <hr>
    
    <div class="text-center">
    <button type="button" class="btn btn-warning f30"><a href="Adminlogout.php">Admin Logout</a></button>
    </div>

</body>
</html>