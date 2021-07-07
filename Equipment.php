<?php
$name="";
	$err_name="";
	$variety="";
	$err_variety="";
	
	$Delivery="";
	$err_Delivery="";
	$Time="";
	$err_Time="";


	$hasError=false;


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
		if(empty($_POST["variety"])){
			$err_variety="variety Required";
			$hasError = true;
		}
		
		else{
			$variety=$_POST["variety"];
		}
			
		if(!isset($_POST["Delivery"])){
			$err_Delivery="Delivery Required";
			$hasError = true;
		}
		else{
			$Delivery = $_POST["Delivery"];
		}
		if(empty($_POST["Time"])){
			$err_Time="Time Required";
			$hasError = true;
		}
		
		else{
			$Time=$_POST["Time"];
		}




		if(!$hasError){
			echo $name."<br>";
		    echo $_POST["variety"]."<br>";
			echo $_POST["Delivery"]."<br>";
			
			echo $_POST["Time"]."<br>";
			

		}


	}
?>
<html>
	<head></head>
	<body>
		<fieldset>
			<legend>New TEST Equipments here</legend>
			<form action="" method="post">
				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>

					</tr>
					<tr>
						<td>variety: </td>
						<td><input type="text" name="variety" value="<?php echo $variety;?>" placeholder="variety"></td>
						<td><span><?php echo $err_variety;?></span></td>
					</tr>
					
						<td>Time: </td>
						<td><input type="time" name="Time" value="<?php echo $Time;?>" placeholder="Time"></td>
						<td><span><?php echo $err_Time;?></span></td>
					</tr>


					<tr>
						<td>Delivery: </td>
						<td><input type="time" name="Delivery" value="<?php echo $Delivery;?>" placeholder="Delivery"></td>
						<td><span><?php echo $err_Delivery;?></span></td>
					</tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>

				</table>
			</form>
		</fieldset>
	</body>
</html>
