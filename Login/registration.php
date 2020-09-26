<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Registration Page</title>
      <link rel="stylesheet" href="signup.css">
    </head>
    <body>
      <div>
      <form class="box" action="connectMain.php" method="post" >
		<img alt="" src="loginlogo2.png" class="lb">
        <h1>Sign up</h1>
		  <input type="radio" name="usertype" value="admin" id="radio-one" class="form-radio">
		  <label for="radio-one">Admin</label> 
		  <input type="radio" name="usertype" value="faculty" id="radio-two" class="form-radio" checked>
		  <label for="radio-two">Faculty</label>
		  <input type="text" name="firstname" placeholder="First name" required>
		  <input type="text" name="lastname" placeholder="Last name" required>
		<input type="email" name="email" placeholder="E-mail Id" required>		   
        <input type="text" name="username" placeholder="Enter username" required>
        <input type="password" name="password" placeholder="Enter password" required>
        <input type="submit" name="" value="Submit" >
        <a href="LoginHtml.php">Already have an account? Login</a>
      </form>

   </div>
    </body>
  </html>
