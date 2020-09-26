<?php

session_start();
//// Check if the user is already logged in, if yes then redirect him to welcome page
//if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
////  header("location: welcome.php");
//    echo "You are logedin";
//  exit;
//}


// Setting up connection with database
$connection = mysqli_connect( "localhost", "root", "",
	"auto_question_paper" );

// Check connection
if ( mysqli_connect_errno() ) {
	echo "Database connection failed.";
}


$username = $password = $usertype = "";
$username_err = $password_err = $usertype ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

//$_SESSION[ "username" ] = $username;
//$user_check=$_SESSION['username'];

        // Check if username is empty
    if ( empty( trim( $_POST[ "username" ] ) ) ) {
        $username_err = "Please enter username.";
    } else {
        $username = trim( $_POST[ "username" ] );
    }

    // Check if password is empty
    if ( empty( trim( $_POST[ "password" ] ) ) ) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim( $_POST[ "password" ] );
    }
    
    // Check if usertype is empty
    if ( empty( trim( $_POST[ "usertype" ] ) ) ) {
        $usertype_err = "Select Your Usertype.";
    } else {
        $usertype = trim( $_POST[ "usertype" ] );
    }
    
    
    if(empty($username_err) && empty($password_err) && empty($usertype_err)){
$result = mysqli_query( $connection, "SELECT username, password FROM $usertype WHERE username = '" . $username . "' AND  password = '" . $password . "'" );

if ( $result ) {

	$row = mysqli_num_rows( $result );
    
//    session_start();
//    
//    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $username;
    $_SESSION["usertype"] = $usertype;
    
	if ( $row == 0 ) {
		//	echo "Invalid Username or Password!";


		echo "Invalid Username or Password! Try again ..";
		header( 'Refresh:2; url="Login.php"' );

	} else {
        
		if ( $usertype === 'admin' ) {
            
			//			$_SESSION[ 'username' ] = $username;
			//			$user_print=$_SESSION['username'];
			echo "Loging successfully...";
			header( 'Refresh:0; url=../menu/admin_menu.php' );
		} else {

			//			$_SESSION[ 'username' ] = $username;

			//			$user_print=$_SESSION['username'];
//			echo "Loging successfully...";
			header( 'Refresh:0; url=../menu/faculty_menu.php' );
		}
	}

	// close the result.
	mysqli_free_result( $result );
}
    }
// Connection close
mysqli_close( $connection );
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Login page</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div>
		<!-- <script src="login.js"></script> -->

		<form class="box" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<img alt="" src="loginlogo.png" class="lb">
			<h1>Login Here</h1>
			<input type="radio" name="usertype" value="admin" id="radio-one" class="form-radio">
			<label for="radio-one">Admin</label>
			<input type="radio" name="usertype" value="faculty" id="radio-two" class="form-radio" checked>
			<label for="radio-two">Faculty</label>
			<input type="text" name="username" placeholder="username" required="">
			<input type="password" name="password" placeholder="password" required="">
			<input type="submit" name="Login" value="Login">
			<a href="registration.php">Don't have an account? sign up</a>
		</form>
	</div>
</body>
</html>

