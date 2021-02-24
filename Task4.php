<html>
	<head> </head>
	<body>
	
		<?php
		    $name="";
			$err_name="";
			
			$uname="";
			$err_uname="";
			
			$password="";
			$err_password="";
			
			$ConfirmPassword="";
			$err_ConfirmPassword="";
			
			$Email="";
			$err_Email="";
			
			$Phone[]=array();
			$code="";
			$number="";
			$err_Phone="";
			
			$Address[]=array();
			$street_Address="";
			$city="";
			$state="";
			$zipcode="";
			$err_Address="";
			
			
			$Gender="";
			$err_Gender="";
			
			$sources[]=array();
			$err_sources="";
			
			$Bio="";
			$err_Bio="";
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				if(empty($_POST["name"])){
					$err_uname="*Name is  Required in this field";
				}
				else if(strlen($_POST["name"])<7){
					$err_name=" //Name should contain atleast  6 characters";
				}
				else{
					$name=$_POST["name"];
				}
				if(empty($_POST["uname"])){
					$err_uname="//Username is Required";
				}
				else if(strlen($_POST["uname"])<7){
					$err_uname="Username should be at least 6 characters";
				}
				else{
					$uname=$_POST["uname"];
				}
				if(empty($_POST["password"])){
					$err_password="Password is Required";
				}
				else{
					$password=$_POST["password"];
				}
				if(empty($_POST["ConfirmPassword"])){
					$err_ConfirmPassword="confirm pass";
				}
				else{
					$confirmPassword=$_POST["confirmPassword"];
				}
				if(empty($_POST["email"])){
					$err_email="Email is Required";
				}
				else if(strlen($_POST["Email"])<10){
					$err_Email="should contain 8 char ";
				}
				else{
					$email=$_POST["Email"];
				}
				if(empty($_POST["code"])){
					$err_phone="Code is Required";
				}
				else{
					$code=$_POST["code"];
				}
				if(empty($_POST["number"])){
					$err_phone="Number Required";
				}
				else{
					$number=$_POST["number"];
				}
				if (!isset($_POST["Gender"])){
                    $err_gender="Gender Not Selected";
                }
				else{
					if (isset($gender) && $gender=="Male"){
						$gender=$_POST["Gender"];
					}
					else{
						if (isset($Gender) && $Gender=="Female"){
							$gender=$_POST["Gender"];
						}
				    }
				}
				if(!empty($_POST["sources"])){
                    foreach($_POST["sources"] as $checked){
                        //echo $checked . '<br>';
                    }
                }
				else {
                    $err_sources="Sourceisnotselected";
                }
				if(empty($_POST["Bio"])){
					$err_Bio="Fill the Box ";
				}
				
				else{
					$bio=$_POST["Bio"];
				}
				
			}
			
		?>
	    <fieldset style="width:500px;border:solid 2px" >
			<legend> <h1>Club Member Registration</h1></legend>
			<form action="" method="post">
				<table style="margin-left:5px;padding:10px">
				    <tr>
						<td align="right"><span>Name </span></td>
						<td>:<input size="10" type="text" value="<?php echo $name;?>" name="name">
						<span><?php echo $err_uname;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>User Name </span></td>
						<td>:<input size="10" type="text" value="<?php echo $uname;?>" name="uname">
						<span><?php echo $err_uname;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Password </span></td>
						<td>:<input size="10" type="password" value="<?php echo $password;?>" name="pass">
						<span><?php echo $err_password;?></span></td>
					</tr>
					<tr>
						<td align="right"><span>Confirm Password </span></td>
						<td>:<input size="10" type="password" value="<?php echo $ConfirmPassword;?>" name="cpass">
						<span><?php echo $err_ConfirmPassword;?></span></td>
					</tr>
					<tr>
						<td align="right"><span>Email </span></td>
						<td>:<input size="10" type="text" value="<?php echo $Email;?>" name="Email">
						<span><?php echo $err_Email;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Phone </span></td>
						<td>:<input size="6" type="text" placeholder="code" value="<?php echo $code;?>" name="code"> - <input style="margin-left:2.3px" size="14" type="text" placeholder="Number" value="<?php echo $number;?>" name="number">
						<span><?php echo $err_Phone;?></span></td>
						
					</tr>
					<tr>
						<td align="right" style="vertical-align: top" rowspan="3"><span>Address </span></td>
						<td>:<input size="10" type="text" placeholder="Street Address" value="<?php echo $street;?>" name="street">
						</td>
					
				    </tr>
					<tr>
						
						<td> <input style="margin-left:3.5px" size="8" type="text" placeholder="City" value="<?php echo $city;?>" name="city"> - <input style="margin-left:2.3px" size="12" type="text" placeholder="State" value="<?php echo $state;?>" name="state">
						</td>
				    </tr>
				    <tr>
						
						<td> <input size="10" style="margin-left:4.9px" type="text" placeholder="Postal/Zip Code" value="<?php echo $zipcode;?>" name="zipcode">
						<span><?php echo $err_Address;?></span></td>
				    </tr>
					
					<tr>
						<td align="right">Birth Date</td>
						<td>:
							<select>
								<option>Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							<select>
								<option>Month</option>
								
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December",);
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
							<select>
								<option>Year</option>
								
								<?php
									for($y=2021;$y>=1900;$y--){
										echo "<option>$y</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td align="right"><span>Gender</span></td>
						<td>:<input type="radio" value="<?php echo $gender;?>" name="gender">Male<input type="radio" value="<?php echo $gender;?>" name="gender">Female
						<span><?php echo $err_Gender;?></span></td>
					</tr>
					<tr>
						<td rowspan="4" align="right"><span>Where did you hear about us?</span></td>
						<td> <input type="checkbox" value="<?php echo $sources;?>" name="sources[]">A Friend or Colleage </td>
							 
					</tr>
					<tr>
						<td><input type="checkbox" value="<?php echo $sources;?>" name="sources[]">Google </td>
				    </tr>
				    <tr>
						<td><input type="checkbox" value="<?php echo $sources;?>" name="sources[]">Blog Post </td>
				    </tr>
				    <tr>
						<td><input type="checkbox" value="<?php echo $sources;?>" name="sources[]">News Article
						<span><?php echo $err_sources;?></span></td>
				    </tr>
					
					</tr>
					<tr>
						<td align="right"><span>Bio:</span></td>
						<td><textarea value="<?php echo $bio;?>" name="bio"></textarea>
						<span><?php echo $err_Bio;?></span></td>
					</tr>
					<tr>
						<td align="corner" colspan="2"><input type="submit" value="Register"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>	
	</body>
</html>