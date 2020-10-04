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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="./js/numeric-1.2.6.min.js"></script>
<script src="./js/bezier.js"></script>
<script src="./js/jquery.signaturepad.js"></script>
<script type='text/javascript' src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>
<script src="./js/json2.min.js"></script>

</head>
<body class="container-fluid">

    <div class="text-center">

        <div class="text-center textBG">

            <h1>Online Election System</h1>
            <p>The Most Secure System For Voting In INDIA</p>

        </div>

        
<h2>Learn Infinity | jQuery Signature Pad & Canvas Image</h2>
<div id="signArea" >
<h2 class="tag-ingo">Put signature below,</h2>
<div class="sig sigWrapper" style="height:auto;">
<div class="typed"></div>
<canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
</div>
</div>
<button id="btnSaveSign">Save Signature</button>
<div class="sign-container">
<?php
$image_list = glob("./doc_signs/*.png");
foreach($image_list as $image){
//echo $image;
?>
<img src="<?php echo $image; ?>" class="sign-preview" />
<?php
}
?>
</div>
<script>
$(document).ready(function() {
$('#signArea').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});
});
$("#btnSaveSign").click(function(e){
html2canvas([document.getElementById('sign-pad')], {
onrendered: function (canvas) {
var canvas_img_data = canvas.toDataURL('image/png');
var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
//ajax call to save image inside folder
$.ajax({
url: 'save_sign.php',
data: { img_data:img_data },
type: 'post',
dataType: 'json',
success: function (response) {
   window.location.reload();
}
});
}
});
});
  </script>



        </div>

    </body>

   </html> 