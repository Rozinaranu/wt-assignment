<html>
	<head></head>
	<body>
	
		<?php
		    $name="";
			$err_name="";
			
			$uname="";
			$err_uname="";
			
			$password="";
			$err_password="";
			
			$confirmPassword="";
			$err_confirmPassword="";
			
			$email="";
			$err_email="";
			
			$code="";
			$number="";
			$phone[]=$code . $number;
			$err_phone="";
			
			$address[]=array();
			$street="";
			$city="";
			$state="";
			$zcode="";
			$err_address="";
			
			$gender="";
			$err_gender="";
			
			$sources[]=array();
			$err_sources="";
			
			$bio="";
			$err_bio="";
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				if(empty($_POST["name"])){
					$err_name="*Name Required";
				}
				else{
					$name=htmlspecialchars($_POST["name"]);
				}
				if(empty($_POST["uname"])){
					$err_uname="*Username Required";
				}
				else if(strlen($_POST["uname"])<6){
					$err_uname="*Username should be at least 6 characters";
				}
				else{
					if(ctype_alnum($_POST["uname"])){
					
						$uname=htmlspecialchars($_POST["uname"]);
				    }
					else{
						
					$err_uname="*Username only contain characters(space,symbon not allowed)";
					}
				}
				if(empty($_POST["pass"])){
					$err_password="*Password Required";
				}
				else if(strlen($_POST["pass"])<8){
					$err_password="*Password should be at least 8 characters";
				}
				/*else if(ctype_lower($_POST["pass"])==false){
					$err_password="*Password should have lowercase character";
				}
				else if (ctype_upper($_POST["pass"])==false){
					$err_password="*Password should have uppercase character";
				}
				else if (ctype_digit($_POST["pass"])==false){
					$err_password="*Password should have one number character";
				}*/
				else{
					$password=$_POST["pass"];
				}
				if(empty($_POST["cpass"])){
					$err_confirmPassword="*Confirm Password Required";
				}
				else if(($_POST["cpass"])!=$_POST["pass"]){
					$err_confirmPassword="*Password Not Matched";
				}
				else{
					$confirmPassword=$_POST["cpass"];
				}
				if(empty($_POST["email"])){
					$err_email="*Email Required";
				}
				else if(strpos($_POST["email"],"@")!=null){
					$s= strpos($_POST["email"],"@");
					if(strpos($_POST["email"],".",$s+1)!=null){
						$email=$_POST["email"];
					}
					else{
						$err_email="*Email missing (.) after @";
					}
				}
				else{
					$err_email="*Email missing @";
					
				}
				if(empty($_POST["code"])&&empty($_POST["number"])){
					$err_phone="*Phone Code/Number Required";
				}
				else if(empty($_POST["code"])){
					$err_phone="Code required";
					
				}
				else if(empty($_POST["number"])){
					$err_phone="*Number Required";
				}
				else{
					if(ctype_digit($_POST["code"])&&ctype_digit($_POST["number"])){
						$number=$_POST["number"];
						$code=$_POST["code"];
				    }
					else{
						$err_phone="*Number must be numeric";
					}
				}
				if(empty($_POST["street"])||empty($_POST["city"])||empty($_POST["state"])||empty($_POST["zcode"])){
					$err_address="*Address Required";
				}
				else{
					$street=$_POST["street"];
					$city=$_POST["city"];
					$state=$_POST["state"];
					$zcode=$_POST["zcode"];
				}
				if (!isset($_POST["gender"])){
                    $err_gender="*Gender Not Selected";
                }
				else{
					if (isset($gender) && $gender=="Male"){
						$gender=$_POST["gender"];
					}
					else{
						if (isset($gender) && $gender=="Female"){
							$gender=$_POST["gender"];
						}
				    }
				}
				if(!empty($_POST["sources"])){
                    foreach($_POST["sources"] as $checked){
                        //echo $checked . '<br>';
                    }
                }
				else {
                    $err_sources="*Source is not selected";
                }
				if(empty($_POST["bio"])){
					$err_bio="*Bio Box is Empty";
				}
				
				else{
					$bio=$_POST["bio"];
				}
				
			}
			
		?>
	    <fieldset style="width:650px;border:solid 2px" >
			<legend> <h1>Club Member Registration</h1></legend>
			<form action="" method="post">
				<table style="margin-left:5px">
				    <tr>
						<td align="right"><span>Name </span></td>
						<td>:<input size="29" type="text" value="<?php echo $name;?>" name="name">
						<span style="color:red"><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>User Name </span></td>
						<td>:<input size="29" type="text" value="<?php echo $uname;?>" name="uname">
						<span style="color:red"><?php echo $err_uname;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Password </span></td>
						<td>:<input size="29" type="password" value="<?php echo $password;?>" name="pass">
						<span style="color:red"><?php echo $err_password;?></span></td>
					</tr>
					<tr>
						<td align="right"><span>Confirm Password </span></td>
						<td>:<input size="29" type="password" value="<?php echo $confirmPassword;?>" name="cpass">
						<span style="color:red"><?php echo $err_confirmPassword;?></span></td>
					</tr>
					<tr>
						<td align="right"><span>Email </span></td>
						<td>:<input size="29" type="text" value="<?php echo $email;?>" name="email">
						<span style="color:red"><?php echo $err_email;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Phone </span></td>
						<td>:<input size="8" type="text" placeholder="code" value="<?php echo $code;?>" name="code"> - <input style="margin-left:2.3px" size="14" type="text" placeholder="Number" value="<?php echo $number;?>" name="number">
						<span style="color:red"><?php echo $err_phone;?></span></td>
						
					</tr>
					<tr>
						<td align="right" style="vertical-align: top" rowspan="3"><span>Address </span></td>
						<td>:<input size="29" type="text" placeholder="Street Address" value="<?php echo $street;?>" name="street">
						</td>
					
				    </tr>
					<tr>
						
						<td> <input style="margin-left:4.9px" size="10" type="text" placeholder="City" value="<?php echo $city;?>" name="city"> - <input style="margin-left:2.3px" size="12" type="text" placeholder="State" value="<?php echo $state;?>" name="state">
						</td>
				    </tr>
				    <tr>
						
						<td> <input size="29" style="margin-left:4.9px" type="text" placeholder="Postal/Zip Code" value="<?php echo $zcode;?>" name="zcode">
						<span style="color:red"><?php echo $err_address;?></span></td>
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
						<span style="color:red"><?php echo $err_gender;?></span></td>
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
						<span style="color:red"><?php echo $err_sources;?></span></td>
				    </tr>
					
					</tr>
					<tr>
						<td align="right"><span>Bio:</span></td>
						<td><textarea value="<?php echo $bio;?>" name="bio"></textarea>
						<span style="color:red"><?php echo $err_bio;?></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Register"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>	
	</body>
</html>