
// // <!-- timer code -->
// <div class="text-center">

// {/* <!-- Display the countdown timer in an element --> */}
// <p id="demo" class="text-center"></p>

// <script language="javascript" type="text/javascript">
var myTime = "120";
function countDown() {
	document.form.seconds.value = myTime;
	if (myTime == 0)
	{
		location.href="VoterSessionOut.php";
	}
	else if (myTime > 0)
	{
		myTime--;
		setTimeout("countDown()",1000);
	}
}

window.onload = countDown;
// </script>
// </div>