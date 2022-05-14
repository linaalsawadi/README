<?php
session_start();


if(isset($_POST['submit'])){

$name = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender =$_POST['gender'];
$address = $_POST['address'];
$state = $_POST['state'];
$country= $_POST['country'];





echo ($name);
echo"<br>"  ;
echo ($lname);
echo"<br>"  ;
echo ($email);
echo"<br>"  ;
echo ($gender);
echo"<br>"  ;
echo ($address);
echo"<br>"  ;
echo ($state);
echo"<br>"  ;
echo ($country);
echo"<br>"  ;


}






?>