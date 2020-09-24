<?php 
	include("include/connection.php");
	if(isset($_POST['sign_up'])){
		$name = htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass']));
		$email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
		$country = htmlentities(mysqli_real_escape_string($con, $_POST['user_country']));
		$gender = htmlentities(mysqli_real_escape_string($con, $_POST['user_gender']));
		$rand = rand(1, 2);
		if($name == ''){
			echo "<script>alert('Ta dekhel smeytek mn tbe3kik !!')</script>";
		}
		if(strlen($pass)<8){
			echo "<script>alert('dekhel mot de passe s7i7 bach maykhedmokch al7elof -_-')</script>";
			exit();
		}
		$check_email = "select * from users where user_email='$email'";
		$run_email = mysqli_query($con, $check_email);
		$check = mysqli_num_rows($run_email);
		if(check==1){
			echo "<script>alert('a 3tina email kayen abnadem ')</script>";
			echo "<script>window.open('signup.php','_self')</script>";
			exit();
		}
		if($rand==1){
			$profile_pic = "images/back.png";
		}
		else if ($rand == 2) {
			$profile_pic = "images/back.png";
		}
	}
 ?>