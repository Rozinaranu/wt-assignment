<?php 
      $arr=array();
	  $arr[0]=8;
	  $arr[1]=8;
	  $arr[]=6;
	  for($i=0;$i<count($arr);$i++){
		  echo"$arr[$i]";
	  }
	  $assoc=array();
	  $assoc["karim"]=12;
	  $assoc["ranu"]=20;
	  $assoc["jamal"]=70;
	  foreach($assoc as $k=>$v){
		 
		  echo "key $k and value $v";
		 // echo"$assoc $k=$v";
		  print_r($assoc);
		 
	  }
	  ?>