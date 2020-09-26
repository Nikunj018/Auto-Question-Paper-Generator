<?php
//$username = filter_input(INPUT_POST, 'username');
//$password = filter_input(INPUT_POST, 'password');
$username = $_POST[ "username" ];
$password = $_POST[ "password" ];
$firstname = $_POST[ "firstname" ];
$lastname = $_POST[ "lastname" ];
$email = $_POST[ "email" ];
$usertype = $_POST[ "usertype" ];
if ( !empty( $username ) ) {
	if ( !empty( $password ) ) {
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "auto_question_paper";
		// Create connection
		$conn = new mysqli( $host, $dbusername, $dbpassword, $dbname );
		if ( mysqli_connect_error() ) {
			die( 'Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error() );
		} else {
			$sql = "INSERT INTO $usertype (firstname,lastname,email,username, password)
values ('$firstname','$lastname','$email','$username','$password')";
			if ( $conn->query( $sql ) ) {
				echo "New record is inserted successfully...";
				echo "Login with your username and password";
				header( 'Refresh:3; url=Login.php' );
			} else {
				echo "Error: " . $sql . "
" . $conn->error;

			}
			$conn->close();
		}
	} else {
		echo "Password should not be empty";
		die();
	}
} else {
	echo "Username should not be empty";
	die();
}
?>