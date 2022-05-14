<?php

session_start();


if(isset($_POST['submit']))
{
      $user=$_POST['user'];
      $password=$_POST['password'];
     if($user=="g201210570@sakarya.edu.tr"  && $password=="g201210570")  
     {
       
       echo ("Hi g201210570");
      echo"<br>"  ;
       echo '<a href="index.html"> back to Home page </a>';
     }
       
      
       
    
     else
     {
      echo ("A User With This Email Or Password Does Not Exist ");
      header("Refresh:3; url=login.html")  ;    
     }


       



}

?>
