<?php

session_start();


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "auto_question_paper";
// Create connection
$conn = new mysqli( $host, $dbusername, $dbpassword, $dbname );
if ( mysqli_connect_error() ) {
    die( 'Connect Error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error() );
}

else if($_SERVER["REQUEST_METHOD"] == "POST"){
//$username = filter_input(INPUT_POST, 'username');
//$password = filter_input(INPUT_POST, 'password');
$subject = $_POST[ "subject" ];
$question = $_POST[ "question" ];
$chepter = $_POST[ "chepter" ];
$marks = $_POST[ "marks" ];
$difficulty = $_POST[ "difficulty" ];
$username = $_SESSION[ "username" ];

    $sql = "INSERT INTO $subject (question,chepter,difficulty,marks,username)
values ('$question','$chepter','$difficulty','$marks','$username')";
    if ( $conn->query( $sql ) ) {
        echo "New record is inserted successfully...";
        //echo "Login with your username and password";
        header( 'Refresh:1; url=Add_question (2).php' );
    } else {
        echo "Error: " . $sql . "
" . $conn->error;

    }
    $conn->close();
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatic Question Paper generator</title>
    <link rel="stylesheet" type="text/css" href="../menu/fontawesome-free-5.10.2-web/fontawesome-free-5.10.2-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="add_question.css">
    <link rel="stylesheet" type="text/css" href="../menu/normalize.css">
    <link rel="stylesheet" type="text/css" href="../menu/demo.css">
    <link rel="stylesheet" type="text/css" href="../menu/component.css">
    <script src="../menu/modernizr.custom.js"></script>
</head>

<body>
    <div class="container">
        <ul id="gn-menu" class="gn-menu-main">
            <li class="gn-trigger"> <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                <nav class="gn-menu-wrapper">
                    <div class="gn-scroller">
                        <ul class="gn-menu">
                            <!--<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon"><span>Search</span></a>
								</li>-->
                            <li> <a class="gn-icon gn-icon-profile"><i class="fas fa-user"></i>Profile</a>
                                <ul class="gn-submenu">
                                    <li><a class="gn-icon gn-icon-viewprofile" href="../Profile/View_profile.php"><i class="far fa-address-card"></i>View Profile</a>
                                    </li>
                                    <li><a class="gn-icon gn-icon-editprofile" href="../Profile/Edit_profile.php"><i class="fas fa-user-edit"></i>Edit Profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li> <a class="gn-icon gn-icon-service"><i class="fas fa-pen"></i>Service</a>
                                <ul class="gn-submenu">
                                    <li><a href="../service/Add_question (2).php" class="gn-icon gn-icon-addquestion"><i class="far fa-file"></i>Add Questions</a>
                                    </li>
                                    <!--
                <li><a class="gn-icon gn-icon-editquestion"><i class="far fa-edit"></i>Edit Question</a></li>
                <li><a class="gn-icon gn-icon-deletquestion"><i class="fas fa-trash"></i>Delet Question</a></li>
-->
                                </ul>
                            </li>
                            <!--            <li><a class="gn-icon gn-icon-download"><i class="fas fa-chevron-down"></i>Download</a></li>-->
                            <li><a class="gn-icon gn-icon-aboutus"><i class="fas fa-info-circle"></i>About Us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /gn-scroller -->
                </nav>
            </li>
            <li><a href="../menu/faculty_menu.php"><i class="fas fa-home"></i>Home</a>
            </li>
            <li>
                <a class="codrops-icon">
                    <?php echo htmlspecialchars($_SESSION["username"]); ?>
                </a>
            </li>

            <li><a class="codrops-icon" href="../Login/logout.php"><i class="fas fa-sign-out-alt"></i><span></span></a>
            </li>
        </ul>
        <header>
            <form class="add" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]); ?>" method="post">
                Subject name:
                <input type="text" name="subject" placeholder="Enter subject Name"> Question:
                <br>
                <textarea name="question" placeholder="Enter Question" cols="60" rows="3"></textarea>
                <br> Chapter:
                <select name="chepter">
                    <option>unit-1</option>
                    <option>unit-2</option>
                    <option>unit-3</option>
                    <option>unit-4</option>
                    <option>unit-5</option>
                    <option>unit-6</option>
                    <option>unit-7</option>
                    <option>unit-8</option>
                    <option>unit-9</option>
                    <option>unit-10</option>
                </select>

                Question difficulty:

                <select name="difficulty">
                    <option>Easy</option>
                    <option>Medium</option>
                    <option>Hard</option>
                </select>
                <br> Question mark:
                <select name="marks">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <!-- <option>6</option>
		<option>7</option>	
		<option>8</option>
		<option>9</option>
		<option>10</option> -->
                </select>
<!--                <input type="submit" name="submit" id="submit" value="Submit" >-->
                <input type="submit" name="submit" value="Submit">
            </form>
        </header>
    </div>
    <!-- /container -->
    <script src="../menu/classie.js"></script>
    <script src="../menu/gnmenu.js"></script>
    <script>
        new gnMenu( document.getElementById( 'gn-menu' ) );
    </script>
</body>
</html>