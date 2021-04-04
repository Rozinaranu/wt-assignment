<?php
 $uname="";
 $pass="";
  if($_SERVER["REQUEST_METHOD"] == "POST"){
	  $uname=$_POST["uname"];
	  $pass=$_POST["pass"];
	  $server="localhost";
     $user="root";
     $password="";
     $db="webtech";
     $conn=mysqli_connect($server,$user,$password,$db);
	 $query="insert into user1 values ('$uname',NULL,'$pass','dddd','admin')";
	 if(mysqli_query($conn,$query)){
		 echo "user inserted";
	 }
	 else{
		 echo "ei chup";
	 }
  }
  
	 
	 
	 
	 ?>
	 <html>
	 <body>
	 <form action="" method="post"> 
	 <input type="text" name="uname" placeholder="username"> <br>
	 <input type="password" name= "pass" placeholder="password"><br>
	 <input type ="submit" value="register">
	 </form>
	 </body>
	 </html>
	  
	  