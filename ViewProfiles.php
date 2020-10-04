<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OES India</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
</head>
<body class="container-fluid">
    <div class="text-center textBG">
        <h1>Online Election System</h1>
        <p>The Most Secure System For Voting In INDIA</p>
    </div>
<div>    
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<form action="#" method="POST">
<div class="form-group">
<input id="search" name="search" type="text" placeholder="Type candidate name">
<input id="search" name="searchstate" type="text" placeholder="Type state name">
<input id="search" name="searchconst" type="text" placeholder="Type constituency name">
<input id="submit" name="submit" type="submit" value="Search">
<input id="reset" name="reset" type="submit" value="View All">

<?php


?>                                                                                     
<hr>
<table id='datatable' border = '3' class = 'table text-center' width = '100%'>
    <thead>
        
          <th scope='col'>Party</th>
          <th scope='col'>State</th>
          <th scope='col'>Constituency</th>
          <th scope='col'>Full Name</th>
          <th scope='col'>Age</th>
          <th scope='col'>Profile Photo</th>
          <th scope='col'>Party Symbol</th>
          <th scope='col'>Gender</th>
    </thead>
    
<tbody class='text-center'>

<?php
include('conn.php');
session_start();
    
$query="SELECT * FROM candidates ORDER BY states ASC;";
$sql = mysqli_query($conn,$query);

if(isset($_POST['reset'])){
    while($row = mysqli_fetch_assoc($sql))
    {   
        echo "
        <tr>
        <td>{$row['party']}</td>
        <td><b>{$row['states']}</b></td> 
        <td>{$row['const']}</td>
        <td>{$row['cname']} </td> 
        <td>{$row['age']} </td> 
        <td><img src='candidates/$row[photo]' height='100px' width='150px'></td>
        <td><img src='parties/$row[partysymbol]' height='100px' width='150px'></td>
        <td>{$row['gender']} </td>
        </tr>";
    }
    }

else if(isset($_POST['submit'])){

    $fullname = $_POST['search'];
    $states = $_POST['searchstate'];
    $constit = $_POST['searchconst'];
    $query1 = " SELECT * FROM candidates WHERE cname LIKE '$fullname%' AND states LIKE '$states%' AND const LIKE '%$constit%'";
    $sql1 = mysqli_query($conn,$query1);

    if ($sql1=mysqli_query($conn,$query1))
    {
            while($row = mysqli_fetch_assoc($sql1))
        {   
            echo "
        <tr>
        <td>{$row['party']}</td>
        <td><b>{$row['states']}</b></td> 
        <td>{$row['const']}</td>
        <td>{$row['cname']} </td> 
        <td>{$row['age']} </td> 
        <td><img src='candidates/$row[photo]' height='100px' width='150px'></td>
        <td><img src='parties/$row[partysymbol]' height='100px' width='150px'></td>
        <td>{$row['gender']} </td>
        </tr>";
        }
    }
    else{
        echo "Enter appropriate name";
    }
}
    

?>
<?php

?>

</tbody>
</table>
</div>
</div>
</form>
<div class="text-center">

    <a href="AdminAfterLogin.php"><button type="button" class="btn btn-success f30">Back</button></a>
 
</div>

</body>
</html>