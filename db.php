<?php
      $server="localhost";
	   $user="root";
       $pass="";
      $db_name="webtech";
	  $conn=mysqli_connect($server,$user,$pass,$db_name);
	  $query= "select * from user1";
	  $result =mysqli_query($conn, $query);
	  var_dump($result);
	   echo "<br>";
	  $var=mysqli_fetch_assoc($result);
	 echo $var["Name"];
	  //var_dump($var);
	 // print_r($var);
	  $var2=mysqli_fetch_assoc($result);
	  
	  echo "<br>";
	  
	 // var_dump($var2);
	 //  print_r($var2);
	  echo $var2["Name"]; 
	  echo "<br>";
	   echo $var2["Id"];
	  
	  
	  
	  ?>