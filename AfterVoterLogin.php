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
<script src="js/ownjs.js"></script>


</head>
<body class="container-fluid">

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

   <span id="runner"></span>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    
    <div class="text-center textBG">
        <h1>Online Election System</h1>
        <p>The Most Secure System For Voting In INDIA</p>
    </div>
    
    <hr>

<div class="text-center">
<div class="form-group">
<form name="form">
You will be Logged Out After Time Out!
Time Left: <input type="text" name="seconds" size="3">
</form>

</div>
    <hr>
    
    <div class="text-center">

        <h2><u>Select Service</u></h2>
        
            <a href="ElectionVoterList.php"><button type="button" class="btn btn-danger f30">View Voters</button></a>

            <a href="VoteHere.php"><button type="button" class="btn btn-danger f30">Cast VOTE</button></a>
            
    </div>

       <hr>
       <?php
include('conn.php');
session_start();

?>
    <div class="form-group">
        <div class="text-center">

                    <a href="VoterSessionOut.php"><button type="button" class="btn btn-success f30">LOGOUT</button></a>

            </div>
        </div>

</body>
</html>