
<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$conn=mysqli_connect('localhost','root','','universitymanag');
if ($conn==false) {
	# code...
	//If connection building is failed to database
	echo "Connection to DBMS failed";
}
else{
    //if connection build was successful
    //Getting or querying data from database
    //getting username and password entered by user  into variables
    $regnovar=$_POST['regno'];
    $passwordvar=$_POST['password'];
    // $password=md5($password);
    // echo $user;
    // echo $password;

    $qry="SELECT * FROM `student` WHERE `sregno`='$regnovar' AND `spassword`='$passwordvar'";
    $run=mysqli_query($conn,$qry);
	$row=mysqli_num_rows($run);
	// $rew=mysqli_fetch_array($run);
if($row<1){
		?>
		<script>
           alert("No such admin user found!");
		</script>
		<?php
	}
else{
		$_SESSION['userid']=$regnovar;
	    header('location:dashboard.php');
}	
}
}
?>

<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE php>
<php lang="en">
<head>
  <link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>SEGi E-Services</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
	<!-- php5 shim and Respond.js IE8 support of php5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/php5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
					<img src="assets/images/logo.png" alt="Techro php5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="courses.php">Courses</a></li>
					<li><a href="videos.php">Videos</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="AdminLogin.php">Admin</a></li>
							<li><a href="UserLogin.php">User</a></li>
						</ul>
					</li>
					<li><a href="contact.php">Contact</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->


	




<!-- /Login pannel -->
 <div class="box">
    <form action="UserLogin.php" method="POST">
      <h1>User Login to continue</h1>
      <div class="inputbox">
        <input type="text" name="regno" required="true">
        <label for="">Registration Number</label>
      </div>
      <div class="inputbox">
        <input type="password" name="password" required="true">
        <label for="">Password</label>
      </div>
      <div>
      <input type="submit" name="" value="Submit">
    </form>
  </div>
<!-- /Login pannel -->


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
      
	</script>
    
</body>
</php>
