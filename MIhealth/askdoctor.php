<?php
session_start();
  if(!isset($_SESSION['email']) && !isset($_SESSION['password']))
  {
    header("Location:login.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="askdoctor.css">
        
    </head>
    <body>

        <div class="icon">
        <nav>
        <ul>
            <a href=""> <li><i class="icon-facebook-sign"></i></li></a>
       <a href=""><li><i class="icon-twitter"></i> </li></a>
      <a href=""><li><i class="icon-youtube-sign"></i></li></a>
      <a href=""> <li> <i class="icon-instagram"></i></li></a>
     <a href=""><li> <i class="icon-linkedin"></i></li></a>
     <a href=""><li><i class="icon-google-plus"></i></li></a>
      
      
    </ul>
</nav>
</div>

<div class="logo">
    <img src="health.webp" alt="medical"><h2>mihealth</h2>
    
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
</div>
   <form>
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="phone" placeholder="Phone">
    <textarea cols="30" rows="3" placeholder="Vuga ibimenyetso"></textarea>
    <br><br><br><a href="">Submit</a>
    <button type="submit" name="logout">Logout</button>
  </form>
</body>
</html>