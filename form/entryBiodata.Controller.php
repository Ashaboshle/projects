<?php
include_once "./config.php";
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$date=$_POST["date"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$hobby=$_POST["hobby"];
$image=$_FILES["image"]["name"];
$image_tmp=$_FILES["image"]["tmp_name"];
move_uploaded_file($image_tmp,"images/$image");

$hobbyInString=serialize($hobby);

$sql="Insert into details(first_name,last_name,email,mobile_num,dob,gender,address,hobbies,image) values('$fname','$lname','$email','$phone','$date','$gender','$address','".$hobbyInString."','$image')";
//execute query command
$checkResult= mysqli_query($conn, $sql);

if($checkResult){
   // echo "Successfully entered!";
    header("Location: ./biodata.php");
}
else{
    echo "Unsuccessful!!";
}


?>