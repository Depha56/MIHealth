<?php
session_start();
require("connection.php");
   if(isset($_POST['login']))
   {
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($email!="" && $password!="")
    {
          $sql="SELECT * FROM accounts WHERE email='$email' AND password='$password'";
          $result=mysqli_query($con,$sql);
          $arr=array();
          if(mysqli_fetch_array($result) != $arr)
           {
            $_SESSION['email']    =$_POST['email'];
            $_SESSION['password'] =$_POST['password'];
            header("Refresh:0.2;url=askdoctor.php");
           }
            
   }
   else {
    echo "<script>alert('ALL FIELDS ARE REQUIRED')</script>";
   }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
       <!--<link rel="stylesheet" href="home.css">-->
        <link rel="stylesheet" href="login.css">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    
    </head>
    <body>

        <div class="icon">
        <nav>
        <ul>
            <a href="https://www.facebook.com/"> <li><i class="icon-facebook-sign"></i></li></a>
       <a href="https://twitter.com/MuhikiraShemaP"><li><i class="icon-twitter"></i> </li></a>
      <a href="https://www.youtube.com/channel/UCHoNEtPpk2Tg30Ig-jlrL5w"><li><i class="icon-youtube-sign"></i></li></a>
      <a href="https://www.instagram.com/"> <li> <i class="icon-instagram"></i></li></a>
     <a href="https://www.linkedin.com/in/muhikira-shema-prince-43b608183/"><li> <i class="icon-linkedin"></i></li></a>
     <a href="https://mail.google.com/mail/u/0/#inbox"><li><i class="icon-google-plus"></i></li></a>
      
      
    </ul>
</nav>
</div>

<div class="logo">
    <img src="health.webp" alt="medical">
    <h2>mihealth</h2>
</div>
<div class="wrapper">
<ul class="nav">
    <a href="home.html"><li>Home</li></a>
    <a href="diseases.html"><li>Diseases
    </li></a>
    <a href="education.html"><li>Education</li></a>
    <a href="askdoctor.php"><li>Ask doctor</li></a>
    <a href="aboutus.html"><li>About us</li></a>
    <a href="login.php"><li>Log in</li></a>
</ul>
    <div class="div">
    
    <div class="login">
        <center>
        <form method="POST">

            <label for="email">
                <span>Email</span>
                <input type="text" name="email" id="email"/>
            </label><br><br>
            <label for="password">
                <span>Password</span>
                <input type="password" name="password" id="password"/>
            </label><br><br>
            <button type="submit" name="login">Login</button>
            
            <div>
                <a href="createaccount.php">Create account here</a>
                <span> If you are not registered yet</span>
            </div>
            </form>
        </center>
          
      
    </div>
    <footer style="width: 100%;">
        <div class="content">
            <h1>Mi Health</h1>
            <img src="health.webp" class="logo">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat non ea voluptates consequatur praesentium itaque esse facere. Ipsa ipsam aut nemo distinctio deserunt, error recusandae voluptas, consequuntur neque, velit sequi!</p>
            <div class="social">
                <a href=""><i class="icon-facebook-sign"></i></a>
                <a href=""><i class="icon-twitter"></i></a>
                <a href=""><i class="icon-youtube-sign"></i></a>
                <a href=""><i class="icon-linkedin"></i></a>
            </div>
        </div>
        <hr>
        <div class="copyright">
            <div class="link">
                <a href="">Home</a>
                <a href="">About Us</a>
                <a href="">Diseases</a>
                <a href="">Login</a>
                <a href="">Donate</a>
            <a href="">Education</a>
        </div>
        <p>Copyright 2022. Allright reserved.designed by Depha</p>
    </div>
    
</footer>
</div>
</body>
</html>