<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>



<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png">
    <title>Contact | SUPPPERB</title>
    <link rel="stylesheet" href="cnstyle.css">
</head>
<body>



<!----------preloader start--------->

<div id="preloader">
        <img src="images/loader.gif" alt="We are loading your cake">
        <p>Just a second</p>
    </div>

    <!----------preloader end--------->


<header>
            <a href="home.php" class="logo">SUPPPERB</a>
            <ul>
                <li><a href="home.php" class="btn"><span>Home</span></a></li>
                <li><a href="home.php#sec" class="btn"><span>About</span></a></li>
                <li><a href="https://suppperb.me/page2.html" class="btn"><span>Blogs</span></a></li>
                <li><a href="contact.php" class="btn"><span>Contact</span></a></li>
                <li><a href="logout.php" class="btn"><span>Logout</span></a></li>
            </ul>
        </header>
    
<div class="cnmain">
<div class="cnbox">
	<div class="row">
			<h1>contact us</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">A suggestion is appreciated!</h4>
	</div>

    <form action="">
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" required >
					<label>Name</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="email" required >
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" required >
					<label>Phone Number</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea ></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
				<button class="btn-lrg submit-btn" type="submit">Send an Email</button>
			</div>
	</div>
</div>

</form>


</div>

<!--------Footer start------->


<footer>
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icons">
            <li><a href="https://www.facebook.com/yaxraj.dabhi/"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="https://www.instagram.com/yaxraj_dabhi/"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="https://www.linkedin.com/in/yaxraj-dabhi-6691ab204/"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a href="https://wa.me/918320504609" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
            <li><a href="https://www.youtube.com/channel/UCRjlBwrk_mAOakyJi3_JnbA"><ion-icon name="logo-youtube"></ion-icon></a></li>
        </ul>

        <ul class="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="home.phph#sec">About</a></li>
            <li><a href="https://suppperb.me/page2.html">Blogs</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <p>© YAXRAJ-ANSH | All Rights Reserved</p>
    </footer>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

<!--------Footer end------->

<!------Button script start------>

<script>
            const btn = document.querySelector('.btn');
            btn.onmousemove = function(e){
                const x = e.pageX - btn.offsetLeft;
                const y = e.pageY - btn.offsetTop;

                btn.style.setProperty('--x', x + 'px');
                btn.style.setProperty('--y', y + 'px');
            }
        </script>

      

<!------Button script end------>

<!---------preloader script start--------->

<script>
    var preloader = document.getElementById("preloader");

    window.addEventListener('load', function(){
        preloader.style.display = 'none'
    })


</script>

<!---------preloader script start--------->

<!----------Anti select query start---------->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>$('body').disableSelection();</script>
<!----------Anti select query end---------->
   


<!---------Anti inspect script start-------->

<script>
    document.onkeydown=function(e)
    {
        if(event.keyCode == 123)
        {
            return false;
        }

        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I' .charCodeAt(0))
        {
            return false;
        }

        if(e.ctrlKey && e.shiftKey && e.keyCode == 'C' .charCodeAt(0))
        {
            return false;
        }

        if(e.ctrlKey && e.keyCode == 'U' .charCodeAt(0))
        {
            return false;
        }

        if(e.ctrlKey && e.keyCode == 'C' .charCodeAt(0))
        {
            return false;
        }
    }
</script>


<!---------Anti inspect script start-------->




</body>
</html>