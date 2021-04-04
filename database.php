<?php
  $server="localhost";
   $user="root";
   $password="";
   $db="webtech";
   $conn=mysqli_connect($server,$user,$password,$db);
   if($conn){
	   echo "connected";
   }
   else{
	  echo  mysqli_connect_error();
	  
   }
   $query="insert into user1 values('akram',NULL,'123','sd@gmail','stu')";
   if(mysqli_query($conn,$query)){
	   echo "inserted";
   }
   else{
	   echo"problem";
   }
   
   ?>