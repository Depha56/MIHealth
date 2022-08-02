<?php
   require("connection.php");
   if(isset($_POST['create']))
   {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conf_password=$_POST['conf_password'];
    if($name!="" && $email!="" && $password!="" && $conf_password !="")
    {
          $sql="INSERT INTO accounts(full_name,email,password)VALUES('$name','$email','$password')";
          $result=mysqli_query($con,$sql);
          if($result) {
            echo "<script>
            if(alert('ACCOUNT CREATED SUCCESSFULLY'))
            {
                ".header("Refresh:0.2;url=login.php")."
            }
            </script>";
            
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
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="createaccount.css">
    </head>
    <body>  
        <div class="div">
    
            <div class="login">
                <center>
                <form method="POST">
                    <label for="name">
                        <span>Full Name</span>
                        <input type="text" name="name" id="name"/>
                    </label><br><br>
                    <label for="email">
                        <span>Email</span>
                        <input type="text" name="email" id="email"/>
                    </label><br><br>
                    <label for="password">
                        <span>Password</span>
                        <input type="password" name="password" id="password"/>
                    </label><br><br>
                    <label for="password">
                        <span>Confirm Password</span>
                        <input type="password" name="conf_password" id="conf_password"/>
                    </label><br><br>
                    <button type="submit" name="create">Create Account</button>
                    <div>
                        <a href="login.html">Log in</a>
                        <span> If you have an account!!!</span>
                    </div>
                    </form>
                </center>
            </div> 
            </div>
    </body>
</html>