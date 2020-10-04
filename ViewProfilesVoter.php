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



<?php
include('conn.php');
session_start();

$query="SELECT * FROM voters";
$sql = mysqli_query($conn,$query);
if($sql){
    echo "<script>alert('Data Fetched successfully..!');</script>";
}
$result = array();
?>
<hr>
<table id='datatable' border = '3' class = 'table text-center'>
    <thead>
        
          <th scope='col'>Full Name</th>
          <th scope='col'>Father Name</th>
          <th scope='col'>Adhaar Number</th>
          <th scope='col'>Year Of Birth</th>
          <th scope='col'>Voter Unique ID</th>
          <th scope='col'>State</th>
          <th scope='col'>Voting Since(yrs)</th>
          <th scope='col'>Gender</th>
          
    </thead>

    
<tbody class='text-center'>
<?php
while($row = mysqli_fetch_assoc($sql))
{
   
    echo "
    <tr class=>
    <td>{$row['FullName']} </td> 
    <td>{$row['FatherName']} </td> 
    <td>{$row['AdharNo']}</td>
    <td>{$row['birthYear']}</td> 
    <td>{$row['VoterId']}</td>
    <td>{$row['States']}</td>
    <td>{$row['yearSince']}</td>
    <td>{$row['gender']} </td>
    </tr>";

}

?>
</tbody>
</table>
</div>
</form>

<div class="text-center">

    <a href="AdminAfterLogin.php"><button type="button" class="btn btn-success f30">Back</button></a>

</div>

</body>
</html>