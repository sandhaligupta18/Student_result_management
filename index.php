<?php
include 'dbconnect.php';
$email_err=$pws_err=$success=$error='';
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $pass = password_hash($password,PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword,PASSWORD_BCRYPT);

    $query = "select * from register where email ='$email'";
    $run = mysqli_query($con,$query);
    $row = mysqli_num_rows($run);
    if($row>0){
        $email_err="Email id already exist.Please type another email";

    }
    else if($password!==$cpassword){
        $pws_err = "Your password do not match";
    }
    else{
        $sql="insert into register(fname,email,password,cpassword) values ('$fname','$email','$pass','$cpass')";
        $run= mysqli_query($con,$sql);
        if($run){
            $success = "Registered succesfully";

        }
        else{
            $error="Unable to submit data. Please try again.......";
        }
    }
}
?>
<?php
if(isset($_POST['submit1'])){
    $email= $_POST['email'];
    $pwd= $_POST['password'];
    $sql="select * from register where email='$email'";
    $run= mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($run);
    
    $pwd_fetch=$row['password'];
$pwd_decode = password_verify($pwd,$pwd_fetch);
if($pwd_decode){
    echo "<script>window.open('main.php?success=Logged in succesfully','_self')</script>";
}
    else{
        echo "<script>window.open('index.php?error=password is incorrect','_self')</script>";
    }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Student Management System</title>
    <script>
        function content1(){
            document.getElementById("div1").style.display="block";
            document.getElementById("div2").style.display="none";
        }
        function content2(){
            document.getElementById("div1").style.display="none";
            document.getElementById("div2").style.display="block";
        }
    </script>
</head>
<h1  class="main"> Student Management System</h1>
<div class="container">
<div id="div1" style="display :block">
    <form method="post" action="">
    <h2>Admin Login | Register Panel</h2>
    <div>
   <button class="btn" onclick="content1()">Register</button>
   <button class="btn" onclick="content2()">Login</button>
</div>
    <div class="form">
            <label for="name">Full Name:</label>
            <input type="text" id="fname" name="fname" placeholder="Enter Your name" required>
        </div>
        <div class="form">
            <label for="email">Email: </label>
            <span class="floaat-right text-white font-weight-bold"> <?php echo $email_err; ?></span>
            <input type="email" id="email" name="email" placeholder ="Enter Your email" required>
        </div>
        <div class="form">
            <label for="password">Password:</label>
            
            <input type="password" id="password" name="password" minlength="8" placeholder="Enter Your password" required>
        </div> 
        <div class="form">
            <label for="password">Confirm Password:</label>
            <span class="floaat-right text-white font-weight-bold"><?php echo $pws_err;?></span>
            <input type="password" id="cpassword" name="cpassword" minlength="8" placeholder="re-enter your password" required>
        </div> 

        <input type="submit" name="submit" value="Register">
        <span class="floaat-right text-white font-weight-bold"><?php echo $success; echo $error; ?></span>
    </form>
</div>

<div id="div2" style="display:none;" >
<form method="post" action="">
        
             <div>
   <button class="btn" onclick="content1()">Register</button>
   <button class="btn" onclick="content2()">Login</button>
</div>
<div class="form">
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" placeholder ="Enter Your email" required>
        </div>
        <div class="form">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" minlength="8" placeholder="Enter Your password" required>
        </div> 
        <input type="submit" name="submit1" value="Login">
    </form>
</div>
    </div>
</body>
</html>