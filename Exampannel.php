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
if (isset( $_FILES['upload'] ) ) {
	  //Now uploading picture
   $filename = $_FILES["upload"]["name"]; 
   $tempname = $_FILES["upload"]["tmp_name"];     
   $folder = "upload/".$filename; 


     if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
            echo $msg;
            //Now inserting result info and address in database
            $conn=mysqli_connect('localhost','root','','universitymanag');
            if ($conn==false) {
  
            //If connection building is failed to database
             echo "Connection to DBMS failed";
            }
            else{
               //Before sending data to database deleting old time table

                $query0="SELECT * FROM `examtimetable`  ";
                 $run=mysqli_query($conn,$query0);
                 $rownum=mysqli_num_rows($run);
                 if($rownum>=1){
                 while ($row=mysqli_fetch_assoc($run)) {
                  $idvar=$row['Id'];

               $query1="DELETE FROM  `examtimetable` WHERE `id`='$idvar'";
                $run=mysqli_query($conn,$query1);
              

              //Now sending pdf details in database
           }
       }

            	$date = date('d-m-y');

               $query2="INSERT INTO `examtimetable` (`address`, `date`) VALUES ( '$folder','$date')";
               $run=mysqli_query($conn,$query2);
               if($run==true){
            //    	?>
               	<script type="text/javascript">
               		alert("File was successfully Uploaded")
            //    	</script>
               	<?php
               }
               else{
               	?>
               	<Script>
               	alert("Failed to update database");
               </Script>
               <?php
               }

            }

           


	}
	else {
		if ( $_FILES['pdfFile']['type'] != "application/pdf") {
			print "Error occured while uploading file : ".$_FILES['pdfFile']['name']."<br/>";
			print "Invalid  file extension, should be pdf !!"."<br/>";
			print "Error Code : ".$_FILES['pdfFile']['error']."<br/>";
		}
	}
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
	<style type="text/css">



form{
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -100px;
  margin-left: -250px;
  width: 500px;
  height: 200px;
}

form button{
  margin: 0;
  color: #fff;
  background: #16a085;
  border: none;
  width: 508px;
  height: 35px;
  margin-top: -20px;
  margin-left: -4px;
  border-radius: 4px;
  border-bottom: 4px solid #117A60;
  transition: all .2s ease;
  outline: none;
}
form button:hover{
  background: #149174;
	color: #0C5645;
}
form button:active{
  border:0;
}




	</style>
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
					<li ><a href="AdminMain.php">Register Students</a></li>
					<li><a href="Studentdetail.php">Student Details Form</a></li>
					<li><a href="studentresult.php">Student Results</a></li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Uploads <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="Exampannel.php">Exam Timetable</a></li>
							<li><a href="Mentorlist.php">Mentorlist</a></li>
							<li><a href="progressionplan.php">Progression plan</a></li>
							 <li><a href="examdocket.php">Exam Docket</a></li>
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

<h1>UPLOAD EXAM TIME TABLE</h1>
	



<form  enctype="multipart/form-data"
	action="<?php print $_SERVER['PHP_SELF']?>" method="post"">
  <input type="file"  name="upload">
  <br>
  <button type="submit">Upload</button>
</form>



















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
