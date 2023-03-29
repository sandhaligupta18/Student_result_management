<?php
include 'dbconnect.php';
$grade='';
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
if($percentage>=80){
    $grade = "Your Grade is A1";
}
elseif($percentage>=70){
    $grade= "Your grade is A";
}
elseif($percentage>=60){
    $grade= "Your grade is B";
}
elseif($percentage>=50){
    $grade= "Your grade is C";
}
elseif($percentage>=40){
    $grade= "Your grade is D";
}else{
    $grade ="Your are failled";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="head1">
        <h1>Vidya Knowledge Park</h1>
        <h3>Baghpat Road,Meerut</h3>
    </div>
   
    <div><b>Name:</b> <?php echo $name ?> </div>
    <div><b>Father's name:</b> <?php echo $fathername?> </div>
    <div><b>Rollno.: </b><?php echo $rollno?> </div>
    <div><b>Class: </b><?php echo $standard?> </div>
    <hr>
    <br>
<div class="container">
        <table class="table1">
            <thead class="thead">
                <tr>
                    <th>Maths</th>
                    <th>Hindi</th>
                    <th>English</th>
                    <th>Physics</th>
                    <th>Chemistry</th>
                    <th>Obtained Marks</th>
                    <th>percentage</th>
                    <th>Grade</th> 
                </tr>
            </thead>
            <h1 class="head1">Result</h1>
            <tbody>
                <tr>
                    <td> <?php echo $math ?></td>
                    <td><?php echo $hindi?></td>
                    <td> <?php echo $english ?></td>
                    <td><?php echo $physics?></td>
                    <td><?php echo $chemistry?></td>
                    <td><?php echo $obtained_marks?></td>
                    <td><?php echo $percentage?></td>
                    <td><?php echo $grade ?></td>
                </tr>
            </tbody>
        </table> 
    </div>
</body>
</html>