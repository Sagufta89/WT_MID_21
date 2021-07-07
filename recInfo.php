<?php
	$name="";
	$err_name="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$err_address="";
	$address="";
	$name="";
	$err_name="";
	$recid="";
	$err_recid="";
	$workduration="";
	$err_workduration="";
	$Username="";
	$err_Username="";
	$password="";
	$err_password="";
	$hasError=false;

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{

		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=2){
			$err_name="Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["address"])){
			$err_address="Address Required";
			$hasError = true;
		}

		else{
			$address=$_POST["address"];
		}
		if(empty($_POST["email"])){
			$err_email="Email Required";
			$hasError = true;
		}

		else{
			$email=$_POST["email"];
		}
				if(empty($_POST["phone"]))
   {
	  $hasError=true; 
	  $err_phone="*phone required";
   }
    elseif(is_numeric($_POST["phone"])==false){
                $err_phone="*Please enter digit";
            }
   else
   {
	 $phone=$_POST["phone"];  
   }
		
    if(empty($_POST["recid"])){
			$err_recid="Recieptionist ID Required";
			$hasError = true;
		}

		else{
			$recid=$_POST["recid"];
		}
		if(empty($_POST["Username"])){
			$err_Username="Username ID Required";
			$hasError = true;
		}

		else{
			$Username=$_POST["Username"];
		}
		if(empty($_POST["workduration"])){
			$err_workduration="workduration ID Required";
			$hasError = true;
		}

		else{
			$wordduration=$_POST["workduration"];
		}
		 if(empty($_POST["password"])){
			$err_password="password ID Required";
			$hasError = true;
		}

		else{
			$password=$_POST["password"];
		}
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phone"]."<br>";
			echo $_POST["workduration"]."<br>";
			echo $_POST["recid"]."<br>";
			echo $_POST["Username"]."<br>";
		echo $_POST["password"]."<br>";
      
			
			}
		}



?>
<html>
	<head></head>
	<body>
		<fieldset>
			<legend>New Recieptionist Register here</legend>
							<div align="center">
			<form action="" method="post">

				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>

					</tr>
					<tr>
						<td>Address: </td>
						<td><textarea type="text" name="address" value="<?php echo $address;?>" placeholder="Address"></textarea></td>
						<td><span><?php echo $err_address;?></span></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>
					<tr>
						<td>Phone: </td>
						<td><input type="text" name="phone" value="<?php echo $phone;?>" placeholder="Phone"></td>
						<td><span><?php echo $err_phone;?></span></td>
					</tr>
					
					<tr>
						<td>Username</td>
						<td><input type="text" name="Username" value="<?php echo $Username;?>" placeholder="Username"></td>
						<td><span><?php echo $err_Username;?></span></td>
					</tr>
					<tr>
						<td>password</td>
						<td><input type="text" name="password" value="<?php echo $password;?>" placeholder="password"></td>
						<td><span><?php echo $err_password;?></span></td>
					</tr>
					<tr>
						<td>Recieptionist ID: </td>
						<td><input type="text" name="recid" value="<?php echo $recid;?>" placeholder="Recieptionist ID"></td>
						<td><span><?php echo $err_recid;?></span></td>
					
          <tr>
						<td>workduration: </td>
						<td><input type="time" name="workduration" value="<?php echo $workduration;?>" placeholder="workduration"></td>
						<td><span><?php echo $workduration;?></span></td>
					</tr>
					
					<tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>
				</table>
			</form>
		</div>
		</fieldset>
	</body>
</html>
