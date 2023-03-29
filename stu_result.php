<?php
if(isset($_POST['result'])){
    $name=$_POST['name'];
    $fathername=$_POST['f_name'];
    $rollno=$_POST['roll'];
    $standard=$_POST['standard'];

    $math=$_POST['math'];
    $hindi=$_POST['hindi'];
    $english=$_POST['english'];
    $physics=$_POST['physics'];
    $chemistry=$_POST['chemistry'];
    $obtained_marks =$math +$hindi +$english +$physics + $chemistry;
    $percentage = $obtained_marks *100/500;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1 class="main"> Student Details</h1>
    <div class="cont">
                <form method="post"  action="result.php">
                
                    <p>Student Name:
                    <input type="text"  class="in1" name="name" placeholder="Enter Your Name"></p>
                    <p>Father Name:
                    <input type="text" class="in2" name="f_name" placeholder="Enter Your Father Name" ></p>
                    <p>Roll No.:
                    <input type="text"  class="in3"name="roll" placeholder="Enter Your Roll no." ></p>
                    <p>Class:
                    <input type="text" class="in4" name="standard" placeholder="Enter Your Class" ></p>
                     <p>Math marks:
                    <input type="text" class="in5" name="math" placeholder="Enter Your Math marks" ></p>
                     <p>Hindi marks:
                    <input type="text" class="in6" name="hindi" placeholder="Enter Your Hindi marks" ></p>
                     <p>English marks:
                    <input type="text" class="in7" name="english" placeholder="Enter Your English marks" ></p>
                     <p>Physics marks:
                    <input type="text"  class="in8" name="physics" placeholder="Enter Your Physics marks" ></p>
                     <p>Chemistry marks:
                    <input type="text" class="in9" name="chemistry" placeholder="Enter Your Chemistry marks" ></p>
                    <input class="btn" type="submit" name="result" value="Check Result">
                </form>
    </div>
   
</body>
</html>