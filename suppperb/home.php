<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>



<html oncontextmenu="return false">
    <head>
        <title>The SUPPPERB</title>
        <link rel="stylesheet" href="nostyle.css">
        <link rel="icon" type="image/png" href="images/logo.png">
        
    </head>

    <body >



    <div id="preloader">
        <img src="images/loader.gif" alt="We are loading your cake">
        <p>Just a second</p>
    </div>

        <header>
            <a href="#" class="logo">SUPPPERB</a>
            <ul>
                <li><a href="#" class="btn"><span>Home</span></a></li>
                <li><a href="#sec" class="btn"><span>About</span></a></li>
                <li><a href="https://suppperb.me/page2.html" class="btn"><span>Blogs</span></a></li>
                <li><a href="contact.php" class="btn"><span>Contact</span></a></li>
                <li><a href="logout.php" class="btn" onclick="logoutalert()"><span>Logout</span></a></li>
            </ul>
        </header>


        <section>
            <img src="images/leaves.png" id="stars" alt="THERE SHOULD BE IMAGE HERE">
            <img src="images/sun.png" id="moon" alt="THERE SHOULD BE IMAGE HERE">
            <img src="images/back.png" id="behind" alt="THERE SHOULD BE IMAGE HERE">
            <h2 id="text">THE SUPPPERB</h2>
            <a href="#sec" id="button">Find_More</a>
            <img src="images/2.png" id="front" alt="THERE SHOULD BE IMAGE HERE">
        </section>



<!--------Dummy text area start------->
        <div class="about" id="sec">
            <h2>How we started<b style="color: #7597de"> "SUPPPERB"</b></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quasi est consectetur aliquam illo modi quia veniam sequi! Id eveniet neque exercitationem necessitatibus, maxime vel laborum odio non aut perferendis.<br><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione necessitatibus expedita tempora labore, ipsum, veritatis, corrupti quis aliquam dolor accusamus quae similique voluptatum error maxime dolorem alias pariatur. Iste, odio.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!<br><br>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!<br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione necessitatibus expedita tempora labore, ipsum, veritatis, corrupti quis aliquam dolor accusamus quae similique voluptatum error maxime dolorem alias pariatur. Iste, odio.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!<br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione necessitatibus expedita tempora labore, ipsum, veritatis, corrupti quis aliquam dolor accusamus quae similique voluptatum error maxime dolorem alias pariatur. Iste, odio.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!<br>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!<br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione necessitatibus expedita tempora labore, ipsum, veritatis, corrupti quis aliquam dolor accusamus quae similique voluptatum error maxime dolorem alias pariatur. Iste, odio.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!<br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione necessitatibus expedita tempora labore, ipsum, veritatis, corrupti quis aliquam dolor accusamus quae similique voluptatum error maxime dolorem alias pariatur. Iste, odio.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione necessitatibus expedita tempora labore, ipsum, veritatis, corrupti quis aliquam dolor accusamus quae similique voluptatum error maxime dolorem alias pariatur. Iste, odio.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!<br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione necessitatibus expedita tempora labore, ipsum, veritatis, corrupti quis aliquam dolor accusamus quae similique voluptatum error maxime dolorem alias pariatur. Iste, odio.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!<br><br>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!
            </p>
        </div>
<!--------Dummy text area end------->

<!--------Footer start------->

<div class="foot">
<footer>
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icons">
            <li><a href="https://www.facebook.com/yaxraj.dabhi/" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="https://www.instagram.com/yaxraj_dabhi/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="https://www.linkedin.com/in/yaxraj-dabhi-6691ab204/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a href="https://wa.me/918320504609" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
            <li><a href="https://www.youtube.com/channel/UCRjlBwrk_mAOakyJi3_JnbA" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a></li>
        </ul>

        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#sec">About</a></li>
            <li><a href="https://suppperb.me/page2.html">Blogs</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <p>© YAXRAJ-ANSH | All Rights Reserved</p>
    </footer>
    </div>





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

        <script>
            let stars = document.getElementById('stars');
            let moon = document.getElementById('moon');
            let behind = document.getElementById('behind');
            let text = document.getElementById('text');
            let button = document.getElementById('button');
            let front = document.getElementById('front');

            window.addEventListener('scroll', function(){
                let value = window.scrollY;
                stars.style.left = value * 0.25 + 'px';
                moon.style.top = value * 1.05 + 'px';
                behind.style.top = value * 0.5 + 'px';
                front.style.left = value * 0 + 'px';
                text.style.marginRight = value * 4 + 'px';
                text.style.marginTop = value * 1.5 + 'px';
                button.style.marginTop = value * 1.5 + 'px';
            })
        </script>

<!------Button script end------>

<!---------preloader script start--------->

<script>


    var preloader = document.getElementById("preloader");

    window.addEventListener('load', function(){
        preloader.style.display = 'none'
    })

    setTimeout(function(){        
    $('#preloader').delay(150).fadeOut('slow'); 
}, 6000);

function logoutalert() {
  alert("Successfully logged out");
}

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


<?php echo "<h5>User: " . $_SESSION['username'] . "</h5>"; ?>
    </body>
</html>
