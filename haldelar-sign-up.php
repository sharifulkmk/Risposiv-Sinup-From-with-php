<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$Username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['pass'];

		if(!empty($Username) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = "$random_num";
			$query = "insert into $tabail ($tb1,$tb2,$tb3,$tb4) values ('$user_id','$Username','$email','$password')";

			mysqli_query($con, $query);

			
			header("Location: login_Signup.html");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
