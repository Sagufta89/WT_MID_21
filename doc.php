<?php
	$name="";
	$err_name="";
	$phone="";
	$err_phone="";
	$err_address="";
	$address="";
	$email="";
	$err_email="";
	$Degrees=[];
	$err_Degrees="";
	$err_Spesalist="";
	$Spesalist="";
	$err_id="";
	$id="";
	$hasError=false;
	

	
		$hasError=false;

	function Degrees($dis){
		global $Degrees;
		foreach($Degrees as $d){
			if($d == $dis){
				return true;
			}
		}
		return false;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){

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
   
   
   
   if(empty($_POST["Spesalist"])){
			$err_Spesalist="Spesalist Required";
			$hasError = true;
		}

		else{
			$Spesalist=$_POST["Spesalist"];
		}
		
		
		
		if(empty($_POST["id"])){
			$err_id="id Required";
			$hasError = true;
		}

		else{
			$id=$_POST["id"];
		}
   
   
   
   
   
   
		
		
		
		
		
		if(!isset($_POST["Degrees"])){
			$err_Degrees="Degrees Required";
			$hasError = true;
		}
		else{
			$Degrees = $_POST["Degrees"];
		}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phone"]."<br>";
			echo $_POST["Spesalist"]."<br>";
			echo $_POST["id"]."<br>";
            $arr = $_POST["Degrees"];
			
			foreach($arr as $e){
				echo "$e <br>";
			}
		}
		
		
	}
?>
<html>
	<head></head>
	<body>
		<fieldset>
			<legend>New Doctor Register here</legend>
			<form action="" method="post">
				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td>Phone: </td>
						<td><input type="text" name="phone" value="<?php echo $phone;?>" placeholder="Phone"></td>
						<td><span><?php echo $err_phone;?></span></td>
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
						<td>  Degrees:  </td>
						<td>
							<input type="checkbox" value="MBBS" <?php if(Degrees("MBBS")) echo "checked"; ?>  name="Degrees[]"> MBBS<br>
							<input type="checkbox" value="FRCPS" <?php if(Degrees("FRCPS")) echo "checked"; ?> name="Degrees[]"> FRCPS<br>
							
							<input type="checkbox" value="Master of Surgery." <?php if(Degrees("Master of Surgery.")) echo "checked"; ?> name="Degrees[]"> Master of Surgery.<br>
							<input type="checkbox" value="Doctor of Medicine."<?php if(Degrees("Doctor of Medicine.")) echo "checked"; ?> name="Degrees[]"> Doctor of Medicine.<br>
							<input type="checkbox" value="MD–PhD." <?php if(Degrees("MD–PhD.")) echo "checked"; ?>  name="Degrees[]"> MD–PhD.<br>
					
							
						</td>
						<td><span><?php echo $err_Degrees;?></span></td>
					</tr>	
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<tr>
						<td>Spesalist: </td>
						<td><input type="text" name="Spesalist" value="<?php echo $Spesalist;?>" placeholder="Spesalist"></td>
						<td><span><?php echo $err_Spesalist;?></span></td>
					</tr>
					<tr>
						
						<td>id: </td>
						<td><input type="text" name="id" value="<?php echo $id;?>" placeholder="id"></td>
						<td><span><?php echo $err_id;?></span></td>
					</tr>

					
					
					
					
					
					
					
					
					
					<tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
	</body>
</html>