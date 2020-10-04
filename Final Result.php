<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OES India</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/ownjs.js"></script>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="js/ownjs.js"></script>
</head>
<body>
<hr>
<div class="text-center textBG">
        <h1>Online Election System</h1>
        <p>The Most Secure System For Voting In INDIA</p>
        <p>RESULT</p>
        <hr>
    </div>
<div>   
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

$query1 = "SELECT votenumbers.countno, candidates.const, candidates.states, candidates.partysymbol,COUNT(countno) AS 'Vote Count', MAX(countno) AS 'Max values' FROM votenumbers INNER JOIN candidates ON votenumbers.countno = candidates.ID WHERE ID=countno GROUP BY party ORDER BY COUNT(countno) ASC";
///$query="SELECT *,  AS NO FROM votenumbers GROUP BY countno  ";
$sql1 = mysqli_query($conn,$query1);
?>

<form action="" method="POST">
<div class="form-group">
<table id='datatable' border = '3' class = 'table text-center'>
    <thead>       
          <th scope='col'>Party</th>
          <th scope='col'>Number of Votes</th>
          <th scope='col'>Winner</th>
          <!-- <th scope='col'>Result</th> -->
    </thead>
    <tbody class='text-center'>
<?php    
if ($sql1=mysqli_query($conn,$query1))
{
while($row = mysqli_fetch_assoc($sql1))
        {
             echo "
             
              <tr>
              <td><img src='parties/$row[partysymbol]' height='100px' width='150px'></td> 
              <td>{$row['Vote Count']}</td>";        
            
        }
        echo"<td>Winner</td></tr>";
    }
?>
</div>
<div>
<!-- <td>{$row['countno']}</td> -->
</tbody>
</table>
</div>

<div class="form-group">
<div class="text-center">
    <a href="index.php"><button type="button" class="btn btn-success f30">Back</button></a>

</div>

</div>


</body>
</html>