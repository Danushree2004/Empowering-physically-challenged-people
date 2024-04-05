<?php	
	$email = $_POST['username'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = "select * from registration1 where email='$email' and password='$password'";
		$res=mysqli_query($conn,$stmt);	
		$count=mysqli_num_rows($res);
		if($count>0)
		{
			echo "Login Successful";
		}
		else{
			echo "username and password doesn't match,please verify the password and username";
		}
	}

?>