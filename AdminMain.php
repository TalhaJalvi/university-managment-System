<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){


$conn=mysqli_connect('localhost','root','','universitymanag');
if ($conn==false) {
	# code...
	//If connection building is failed to database
	echo "Connection to DBMS failed";
}
else{
    $sregnovar=$_POST['regno'];
    $passwordvar=$_POST['pass'];
            



               $query2="INSERT INTO `student` (`sregno`, `spassword`) VALUES ( '$sregnovar','$passwordvar')";
               $run=mysqli_query($conn,$query2);
               if($run==true){
            //    	?>
               	<script type="text/javascript">
               		alert("Student was registered successfully")
            //    	</script>
               	<?php
               }
               else{
               	?>
               	<Script>
               	alert("Failed to register student");
               </Script>
               <?php
               }

            

           


	}

	

}



?>
<!DOCTYPE html>
<html lang="en">
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
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
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
					<li class="active"><a href="AdminMain.php">Register Students</a></li>
					<li><a href="Studentdetail.php">Student Details Form</a></li>
					<li ><a href="studentresult.php">Student Results</a></li>

					         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Uploads <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="Exampannel.php">Exam Timetable</a></li>
              <li><a href="Mentorlist.php">Mentorlist</a></li>
              <li><a href="progressionplan.php">Progression plan</a></li>
               <li><a href="examdocket.php">Exam docket</a></li>
            </ul>
          </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="AdminLogin.php">Admin</a></li>
							<li><a href="UserLogin.php">User</a></li>
						</ul>
					</li>
					<li><a href="#">Comming Soon</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->


	




<!-- /Register Student -->

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-up-htm">
				<div class="group">
					<form accept="AdminMain.php" method="POST">
					<label for="pass" class="label">Student ID no</label>
					<input id="pass" type="text" class="input"  name="regno">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="pass">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Register Student">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Register Student -->











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
</html>
