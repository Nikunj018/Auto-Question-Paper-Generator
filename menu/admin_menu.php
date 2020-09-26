<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Automatic Question Paper generator</title>
		<link rel="stylesheet" type="text/css" href="../menu/fontawesome-free-5.10.2-web\fontawesome-free-5.10.2-web\css\all.css">
		<link rel="stylesheet" type="text/css" href="../menu/normalize.css" >
		<link rel="stylesheet" type="text/css" href="../menu/demo.css" >
		<link rel="stylesheet" type="text/css" href="../menu/component.css">
		<script src="../menu/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<!--<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon"><span>Search</span></a>
								</li>-->
								<li>
									<a class="gn-icon gn-icon-profile"><i class="fas fa-user"></i> Profile</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-viewprofile" href="../Profile/View_profile.php"><i class="far fa-address-card"></i> View Profile</a></li>
										<li><a class="gn-icon gn-icon-editprofile" href="../Profile/Edit_profile.php"><i class="fas fa-user-edit"></i> Edit Profile</a></li>
									</ul>
								</li>
								<li>
									<a class="gn-icon gn-icon-service"><i class="fas fa-pen"></i>Service</a>
									<ul class="gn-submenu">
										<li><a href="../Create Format/Add_format.php" class="gn-icon gn-icon-addquestion"><i class="far fa-file"></i>Add Question Format</a></li>
										<li><a href="../Format/Create_questionpaper (2).php" class="gn-icon gn-icon-editquestion"><i class="far fa-edit"></i> Creat Question paper</a></li>
<!--										<li><a class="gn-icon gn-icon-deletquestion"><i class="fas fa-trash"></i> Delet Question</a></li>-->
									</ul>
								</li>
								<li><a class="gn-icon gn-icon-aboutus"><i class="fas fa-info-circle"></i> About Us</a></li>

							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="../menu/admin_menu.php"><i class="fas fa-home"></i> Home</a></li>
                
                 <li><a class="codrops-icon" >
                <?php echo htmlspecialchars($_SESSION["username"]); ?>
                </a>
            </li>

                
				<li><a class="codrops-icon" href="../Login/logout.php"><i class="fas fa-sign-out-alt"></i><span></span></a></li>
			</ul>
			<header>
			</header>
		</div><!-- /container -->
		<script src="../menu/classie.js"></script>
		<script src="../menu/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
