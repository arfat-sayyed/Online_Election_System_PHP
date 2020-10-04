
<body>

    <div>   
        <div>   
            <script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
            </script>

            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
<div class="error"></div>
<div class="success"></div>
<div class="container login-container">
        <div class="row">
            
            <div class="col-md-12 login-form-2">
                <h3>Voter Verification</h3>
                <form action="#" method="POST" id="frm-mobile-verification">
	<div class="form-group">
        <h3>OTP is sent to Your Mobile Number</h3>
        <hr>		
	</div>

	<div class="form-row">
		<input type="text" name="mobileOtp" id="mobileOtp" class="form-control" placeholder="Enter the OTP">		
	</div><br><br>

	<div class="form-group">
		<a href="AfterVoterLogin.php"><input id="verify" name="login" type="button" class="btnSubmit" value="Verify" onClick="verifyOTP();">	</a>	
    </div>
    
</form>

