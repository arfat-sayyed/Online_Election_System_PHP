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
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
</head>
<body class="container-fluid">

<?php
include('conn.php');
session_start();
?>

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

             <form action="" method="POST">
             <div class="form-group">
                        <label for="fullName" class="col-sm-12 control-label"></label>
                        <input name="searchvoter" type="text" class="form-control" value="" placeholder="Full Name"/>
                    </div>
                    <div class="form-group">
                        <label for="fullName" class="col-sm-12 control-label"></label>
                        <input name="searchstate" type="text" class="form-control" value="" placeholder="State"/>
                    </div>
                    <div class="form-group">
                        <label for="fullName" class="col-sm-12 control-label"></label>
                        <input name="searchconst" type="text" class="form-control" value="" placeholder="Constituency"/>
                    </div>
                        <!-- <div class="form-group"> -->

                            <!-- <label for="State" class="col-sm-12 control-label" >Select State</label> -->
<!--                             
                                <select name="searchstate" id="state" class="form-control" size="1" onchange="makeSubmenu(this.value)">
                                    <option value="" disabled selected>Select State</option>
                                    <option>Maharashtra</option>
                                    <option>Gujarat</option>
                                    <option>Delhi</option>
                                    
                                </select>
                            
                    </div> -->

                   <!-- <div class="form-group"> -->
                            <!-- <label for="const" class="col-sm-12 control-label">Select Constituency</label>
                             -->
                                <!-- <select name="searchconst" id="const" class="form-control" size="1">
                                <option value="" disabled selected>Choose Constituency</option>
                                <option></option>
                                </select>
                                    
                                </select>
                            
                    </div> -->

                    <div class="text-center">

<button type="submit" name="search" class="btn btn-success f30">Continue</button></a>

<button type="submit" name="viewall" class="btn btn-success f30">View All</button></a>

</div>

 
<hr>
<table id='datatable' border = '3' class = 'table text-center'>
    <thead>
        
          <th scope='col'>Full Name</th>
          <th scope='col'>Father Name</th>
          <th scope='col'>State</th>
          <th scope='col'>Constituency</th>
          <th scope='col'>Gender</th>
          
    </thead>
   
<tbody class='text-center'>
<?php
     
     if(isset($_POST['viewall'])){
        $query2="SELECT * FROM voters";
        $sql2 = mysqli_query($conn,$query2);

        if ($sql2=mysqli_query($conn,$query2))
            {
        while($row = mysqli_fetch_assoc($sql2))
        {
           
            echo "
            <tr class=>
            <td>{$row['FullName']} </td> 
            <td>{$row['FatherName']} </td> 
            <td>{$row['States']}</td>
            <td>{$row['constit']}</td>
            <td>{$row['gender']} </td>
            </tr>";
        }
        }
    }
     

     if(isset($_POST['search'])){

        $fullname = $_POST['searchvoter'];
        $states = $_POST['searchstate'];
        $const = $_POST['searchconst'];
        $query1 = " SELECT * FROM voters WHERE FullName LIKE '$fullname%' AND States LIKE '$states%' AND constit LIKE '$const%'";
        $sql1 = mysqli_query($conn,$query1);
    
        if ($sql1=mysqli_query($conn,$query1))
        {
                while($row = mysqli_fetch_assoc($sql1))
            {   
                echo "
                <tr class=>
                <td>{$row['FullName']} </td> 
                <td>{$row['FatherName']} </td> 
                <td>{$row['States']}</td>
                <td>{$row['constit']}</td>
                <td>{$row['gender']} </td>
                </tr>";
            }
        }
    }
    

 

?>
</tbody>
</table>
</div>
<div class="text-center">

    <a href="AfterVoterLogin.php"><button type="button" class="btn btn-success f30">Back</button></a>

</div>

</body>
</html>