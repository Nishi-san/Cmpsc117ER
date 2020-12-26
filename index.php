<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>CS117</title>
</head>

<body>

    <div class="slider">
      <div class="slides">
       
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
       
        <div class="slide first">
          <img src="images/1.png" alt="">
        </div>
        <div class="slide">
          <img src="images/2.png" alt="">
        </div>
        <div class="slide">
          <img src="images/3.png" alt="">
        </div>
       
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
        </div>
        
      </div>
      
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
      </div>
      
    </div>

    <p style="font-family: tahoma;
    font-size: 30px;
    color: white;
    margin-top: 2%;
    margin-bottom: 2%;
    border-radius: 50px;
    width: 100%;
    text-align: center">
      <?php
          if(!empty($_SESSION['message'])) {
              $message = $_SESSION['message'];
              echo $message;
              unset($_SESSION['message']);
          }
      ?>
    </p>
    
    <div class="container">
        <a href="#" class="button" id="button">LOGIN</a>
    </div>


    <div class="login">
        <div class="content">
            <img src="images/X.png" class="x">
            <img src="images/user.png" class="usr">

            <form action="authentication.php" method="post">
              <input type="text" name="username" placeholder="Username">
              <input type="password" name="password" placeholder="Password">
              <!--<a href="home.html" class="button1">LOGIN</a>-->
              <input type="submit" value="LOGIN" class="button1">
            </form>
            
        </div>
    </div>

    <script>
    
        var counter = 1;
        setInterval(function(){
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if(counter > 4){
            counter = 1;
          }
        }, 5000);

        document.getElementById("button").addEventListener("click", function ()
        {document.querySelector(".login").style.display = "flex"; })

        document.querySelector(".x").addEventListener("click", function ()
        {document.querySelector(".login").style.display = "none"; })
        
    </script>

</body>
</html>