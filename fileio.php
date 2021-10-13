<?php
	$fname="";
	$err_fname="";
	$lname="";
	$err_lname="";
	$gender="";
	$err_gender="";
	$email = "";
	$err_email = "";
	$paddress="";
	$err_paddress="";
	$paraddress="";
	$err_paraddress="";
	$phone="";
	$err_phone="";
	$uname = "";
	$err_uname="";
	$pass="";
	$err_pass="";
	$date="";
	

	 error_reporting(E_ALL & E_STRICT); ini_set('display_errors', '1');
	 ini_set('log_errors', '0'); ini_set('error_log', './');
	 if(isset($_POST["submit"]))
	 {
		$file = "data.json";
    $arr = array(
        'fname'     => $_POST['fname'],
		'gender'     => $_POST['gender'],
        'email'    => $_POST['email'],
		'present address'     => $_POST['paddress'],
		'parmanent address'     => $_POST['paraddress'],
        'phone'    => $_POST['phone'],
        'date' => $_POST['date'],
    );
    $json_string = json_encode($arr);
    file_put_contents($file, $json_string);
    echo $json_string; 
		 
		 if(empty($_POST["fname"]))
		 {
			 $err_fname="[First name Required]";
		 }
		 elseif(strlen($_POST["fname"])<6)
		 {
			 $err_fname="[First name must be 6 charachters long]";
		 }
		 elseif(strpos($_POST["fname"]," "))
		 {
			 $err_fname="[First name should not contain white space]";
		 }
		 else
		 {
			 $fname=$_POST["fname"];
		 }
		 if(empty($_POST["lname"]))
		 {
			 $err_lname="[Last Name Required]";
		 }
		 else
		 {
			 $lnames=$_POST["Last name"];
		 }
		 if(!isset($_POST["gender"]))
		 {
			 $err_gender="[Please select a gender]";
		 }
		 else
		 {
			 $gender=$_POST["gender"];
		 }
		 if(empty($_POST["email"]))
		{
			$err_email = "Email Required";
		}
		else
		{
			$email = $_POST["email"];
		}
		if(empty($_POST["paddress"]))
		{
			$err_paddress = "Present Address Required";
		}
		else
		{
			$paddress = $_POST["paddress"];
		}
		if(empty($_POST["paraddress"]))
		{
			$err_paraddress = "Permanent Address Required";
		}
		else
		{
			$paraddress = $_POST["paraddress"];
		}
		if(empty($_POST["uname"]))
		{
			$err_uname = "Username Required";
		}
		elseif(strlen($_POST["uname"]) < 6)
		{
			$err_uname = "Username should be at least 6 characters.";
		}
		elseif(strpos($_POST["uname"], " "))
		{
			$err_uname = "Username can not contain white space.";
		}
		else
		{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["pass"]))
		{
			$err_pass = "Password Required";
		}

		else
		{
			$pass = $_POST["pass"];
		}
		if(empty($_POST["c_pass"]))
		{
			$err_c_pass = "Password Required";
		}
		else
		{
			$c_pass = $_POST["c_pass"];
		}	
		
		
		 
		 
         }
         /*if(isset($_POST["submit"]))
         {
            echo "Username: ".$_POST["uname"]."<br>";
            echo "Password: ".$_POST["pass"]."<br>";
            echo "Gender: ".$_POST["gender"]."<br>";
            echo "Profession: ".$_POST["profession"]."<br>";
            echo "Biography: ".$_POST["bio"]."<br>";
            echo "Date: ".$_POST["date"]."<br>";
            echo "E-Mail: ".$_POST["email"]."<br>";
            //echo "Salary: ".$_POST["salary"]."<br>";
            $var = $_POST["Hobbies"];
            echo "Hobbies: ";
            count($var);
            for($i=0;$i<count($var);$i++)
            {
                echo $var[$i].", ";
            }
         }*/
	 
		?>
		
		
		
		
		
		
		
		
		
		
<html>
	<head></head>
	<body>
<h1><b>Registration Form</b></h1>
		<fieldset>
		<legend><b>Basic Information</b></legend>

		<form action="" method="post">
			<table>
				<tr>
					<td><span><b>First name</b>:</span></td>
					<td>:<input type="text" name="fname" value = "<?php echo $fname;?>" ><br>
					<td><span><?php echo $err_fname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Last name</b>:</span></td>
					<td>:<input type="text" name="lname" value = "<?php echo $lname;?>" ><br>
					<td><span><?php echo $err_lname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Gender</b>:</span></td>
					<td>:<input type="radio" name="gender"<span>Male</span>
					    <input type="radio" name="gender" <span>Female</span></td>
					
				</tr>
				<tr>
					<td><span><b>Date</b></span></td>
					<td>:<input type="date" name="date"></td>
				</tr>
			</table>
			
			
			
		
		</fieldset>
		<fieldset>
		<legend><b>Contract Information</b></legend>

		
			<table>
				<tr>
					<td><span><b>Present address</b>:</span></td>
					<td>:<input type="text" name="paddress" value = "<?php echo $paddress;?>" ><br>
					<td><span><?php echo $err_paddress;?></span></td>
				</tr>
				<tr>
					<td><span><b>Permanent address</b>:</span></td>
					<td>:<input type="text" name="paraddress" value = "<?php echo $paraddress;?>" ><br>
					<td><span><?php echo $err_paraddress;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b>:</span></td>
					<td>:<input type="text" name="email" value = "<?php echo $email;?>" ><br>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Phone</b>:</span></td>
					<td>:<input type="text" name="phone" value = "<?php echo $phone;?>" ><br>
					<td><span><?php echo $err_phone;?></span></td>
				</tr>
				<tr>
					<td><span><b>Personal Website Link</b>:</span></td>
					<td>:<input type="link" name="personal website link" ><br>
					
				</tr>
			</table>
		
		</fieldset>
		
		
		
		
		<fieldset>
		<legend><b>Academic Information</b></legend>
		

		
			<table>
				<tr>
					<td><span><b>Username</b>:</span></td>
					<td>:<input type="text" name="uname" value = "<?php echo $uname;?>" ><br>
					<td><span><?php echo $err_uname;?></span></td>
				</tr>
				<table>
				<tr>
					<td><span><b>Password</b>:</span></td>
					<td>:<input type="password" name="pass" value = "<?php echo $pass;?>"><br>
					<td><span><?php echo $err_pass;?></span></td>
				</tr>
			</table>			
		</fieldset>
		
		
		
		
		<center><input type="submit" name="Register"></center>
		</form>
	</body>
</html> 
