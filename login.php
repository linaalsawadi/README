<?php

session_start();


if(isset($_POST['submit']))
{
      $user=$_POST['user'];
      $password=$_POST['password'];
     if($user=="g201210570@gmail.com"  && $password=="123")  
     {
       
       echo ("Hi g201210570");
      echo"<br>"  ;
       echo '<a href="proje1_Deneme.html"> back to Home page </a>';
     }
       
      
       
    
     else
     {
      echo ("Lütfen tekrar deneyiniz");
      echo '<a href="login.html"> back to log in page </a>';
     }


       



}

?>