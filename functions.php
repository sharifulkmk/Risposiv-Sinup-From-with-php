<?php

	function check_login($con)
	{

		if(isset($_SESSION['id']))
		{
			$id = $_SESSION['id'];
			$query = "select * from user_data where id = '$id' limit 1";

			$result = mysqli_query($con,$query);
			if($result && mysqli_num_rows($result) > 0)
			{

				$user_data = mysqli_fetch_assoc($result);
				return $user_data;
			}
		}

		//redirect to login
		header("Location: login_Signup.html");
		die;

	}

	function random_num($length)
	{

		$text = "";
		if($length < 5)
		{
			$length = 5;
		}

		$len = rand(15,$length);

		for ($i=0; $i < $len; $i++) { 
			# code...

			// $text .= rand(0,9);
			$text .= random_bytes(1);
		}

		return $text;
	}
	$random_num = random_num(15);
?>
