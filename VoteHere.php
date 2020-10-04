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
    <script src="verification.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



</head>
<body>

<?php
include('conn.php');
session_start();

?>
    <hr>
    <div class="text-center textBG">
             <h1>Online Election System</h1>
                <p>The Most Secure System For Voting In INDIA</p>
                <p>Below are the Candidates for the current elections. Do Vote to Righteous Candidate</p>
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


<!--  Dropdown code -->
<script type="text/javascript">
var citiesByState = {
Maharashtra: ["01-Nandurbar","02-Dhule","03-Jalgaon","04-Raver","05-Buldhana","06-Akola","07-Amravati","08-Wardha","09-Ramtek","10-Nagpur","11-Bhandara-Gondiya","12-Gadchiroli-Chimur","13-Chandrapur","14-Yavatmal-Washim","15-Hingoli","16-Nanded","17-Parbhani","18-Jalna","19-Aurangabad","20-Dindori","21-Nashik","22-Palghar","23-Bhiwandi","24-Kalyan","25-Thane","26-Mumbai North","27-Mumbai North West","28-Mumbai North East","29-Mumbai North Central","30-Mumbai South Central","31-Mumbai South","32-Raigad","33-Maval","34-Pune","35-Baramati","36-Shirur","37-Ahmednagar","38-Shirdi","39-Beed","40-Osmanabad","41-Latur","42-Solapur","43-Madha","44-Sangli","45-Satara","46-Ratnagiri Sindhudurg","47-Kolhapur","48-Hatkanangle"],
Gujarat: ["01-Kachh","02-Banaskantha","03-Patan","04-Mahesana","05-Sabarkantha","06-Gandhinagar","07-Ahmedabad East","08-Ahmedabad West","09-Surendranagar","10-Rajkot","11-Porbandar","12-Jamnagar","13-Junagadh","14-Amreli","15-Bhavnagar","16-Anand","17-Kheda","18-Panchmahal","19-Dahod","20-Vadodara","21-Chhota Udaipur","22-Bharuch","23-Bardoli","24-Surat","25-Navsari","26-Valsad"],
Delhi: ["01-Chandni Chowk","02-North East Delhi", "03-East Delhi", "04-New Delhi", "05-North West Delhi", "06-West Delhi", "07-South Delhi"]


}

function makeSubmenu(value) {
if(value.length==0) document.getElementById("const").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("const").innerHTML = citiesOptions;
}
}
function displaySelected() { var country = document.getElementById("state").value;
var city = document.getElementById("const").value;
alert(country+"\n"+city);
}
function resetSelection() {
document.getElementById("state").selectedIndex = 0;
document.getElementById("const").selectedIndex = 0;
}
</script>
<div class="text-center">
<div class="form-group">
<form name="form">
You will be Logged Out After Time Out! HURRY UP & VOTE..!<br>
Time Left: <input type="text" name="seconds" size="3">
</form>

</div>
   
             <form action="" method="POST">
            <div class="form-group">
                            <!-- <label for="State" class="col-sm-12 control-label" >Select State</label> -->
                            
                                <select name="states" id="state" class="form-control" size="1" onchange="makeSubmenu(this.value)">
                                    <option value="" disabled selected>Select State</option>
                                    <option>Maharashtra</option>
                                    <option>Gujarat</option>
                                    <option>Delhi</option>
                                    
                                </select>
                            
                    </div>

                   <div class="form-group">
                            <!-- <label for="const" class="col-sm-12 control-label">Select Constituency</label>
                             -->
                                <select name="const" id="const" class="form-control" size="1">
                                <option value="" disabled selected>Choose Constituency</option>
                                
                                </select>
                            
                    </div>
 
                    <div class="text-center">

<button type="submit" name="search" class="btn btn-success f30">Continue</button></a>

<!-- <button type="submit" name="viewall" class="btn btn-success f30">View All</button></a> -->


</div>

   
    <form action="mobile.php" method="POST">
        <div class="form-group">
            <table id='datatable' border = '3' class = 'table text-center'>
                <thead>       
                    <th scope='col'>Serial Number</th>
                    <th scope='col'>Candidate</th>
                    <th scope='col'>Full Name</th>
                    <th scope='col'>State</th>
                    <th scope='col'>Name Of Constituency</th>
                    <th scope='col'>PartySymbol</th>
                    <th scope='col'>Vote</th>
                </thead>
                <tbody class='text-center'>
    <?php 
    if( isset($_POST['search'])) {
          
        $state = $_POST['states'];
        $constit = $_POST['const'];
        $query2 = " SELECT * FROM candidates WHERE states LIKE '$state%' AND const LIKE '$constit%'";
        $sql2 = mysqli_query($conn,$query2);
    
    
            if ($sql2=mysqli_query($conn,$query2))
            {
            
                while($row = mysqli_fetch_assoc($sql2))
                {
                    echo "
                    <tr>
                        <td>{$row['ID']}</td>
                        <td><img src='candidates/$row[photo]' height='100px' width='150px'></td>
                        <td>{$row['cname']} </td> 
                        <td>{$row['states']}</td>
                        <td>{$row['const']}</td>
                        <td><img src='parties/$row[partysymbol]' height='100px' width='150px'></td>
                        <td><div class='col-sm-4'>
                        
                            <label  class='radio-inline'></label>
                                <input name='votenumber' class='' type='radio' id='number1' value='{$row['ID']}' required/>      
                        </div></td>
                        </tr>";
                        
                }
            }
     }

        // Voting count
        if(isset($_POST['submit']))
        {
        
            $vote = $_POST['votenumber'];
            $query1 = " INSERT INTO votenumbers (countno) VALUES ('$vote')";
            $sql1 = mysqli_query($conn,$query1); 
            
        }

            // else{
            //     echo "<script> alert ('Vote for a candidate')</script>";
            // }
?>
            </tbody>
        </table>


        <div class="text-center">
            <div class="text-center" style="margin : 60px; padding: 30px; font-size: 40px; text-decoration: none">

                <button type="submit" name="submit" id="primary" class="btn btn-success f30" onClick="">VOTE</button>
            <a href="mobile.php"><button type="button" id="secondary" class="btn btn-success f30">SUBMIT</button></a>



           <!-- <form action="mobile.php" method="post"> -->
           <!-- <input name="submit" type="submit" class="btnSubmit">
           <a href="mobile.php"><input type="button" name="vote" value="VOTE" class="btnSubmit"></a></button> 
</form> -->
               <!-- <a href="mobile.php"><button type="submit" name="submit" class="btnSubmit btn-warning">SUBMIT VOTE</a></button> -->
                </div>
            </div>
        </div>

</body>
</html>