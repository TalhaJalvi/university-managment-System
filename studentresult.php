<?php
session_start();


if (isset( $_FILES['pdfFile'] ) ) {
	  //Now uploading picture
   $filename = $_FILES["pdfFile"]["name"]; 
   $tempname = $_FILES["pdfFile"]["tmp_name"];     
   $folder = "upload/".$filename; 
   $regno=$_POST["reg"];
   // echo $filename;
   // echo  $tempname;
   // echo  $folder;

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
              //Now sending pdf details in database
               $query="INSERT INTO `studentresult` (`sregno`, `address`) VALUES ('$regno', ' $folder')";
               $run=mysqli_query($conn,$query);
               if($run==true){
               	?>
               	<script type="text/javascript">
               		alert("Result was successfully uploaded")
               	</script>
               	<?php
               }
               else{
               	alert("Failed to update database");
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        h3 span {
            font-size: 22px;
        }
        h3 input.search-input {
            width: 300px;
            margin-left: auto;
            float: right
        }
        .mt32 {
            margin-top: 32px;
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
					<li class="active"><a href="studentresult.php">Student Results</a></li>

					         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Uploads <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="Exampannel.php">Exam Timetable</a></li>
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


	<?php

$conn=mysqli_connect('localhost','root','','universitymanag');
if ($conn==false) {
  # code...
  //If connection building is failed to database
  echo "Connection to DBMS failed";
}

	$query="SELECT * FROM `studentdetails`";
	$result = mysqli_query($conn,$query);
$total = mysqli_num_rows($result);


	

	?>

   <div class="container">
        <h3>
            <span>Student Data</span>
            <input type="search" placeholder="Search..." class="form-control search-input" data-table="customers-list"/>
        </h3>
        <table class="table table-striped mt32 customers-list">
            <thead>
                <tr>
                    <th>Student Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Bit</th>
                    <th>Country</th>
                    <th>Upload Result</th>
                </tr>
            </thead>
            <tbody>
            	<?php 
                  while($row=mysqli_fetch_array($result)){
            	?>
                <tr>
                    <td><?php echo $row['regno'];?></td>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['cprogram'];?></td>
                    <td><?php echo $row['country'];?></td>
                    <td><form enctype="multipart/form-data"
	action="<?php print $_SERVER['PHP_SELF']?>" method="post"> <input
	                    type="file" name="pdfFile" /><input type="hidden" name="reg" value="<?php echo $row['regno'];?>"><input type="submit" value="upload!" /></form></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>









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

 (function(document) {
            'use strict';

            var TableFilter = (function(myArray) {
                var search_input;

                function _onInputSearch(e) {
                    search_input = e.target;
                    var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                    myArray.forEach.call(tables, function(table) {
                        myArray.forEach.call(table.tBodies, function(tbody) {
                            myArray.forEach.call(tbody.rows, function(row) {
                                var text_content = row.textContent.toLowerCase();
                                var search_val = search_input.value.toLowerCase();
                                row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                            });
                        });
                    });
                }

                return {
                    init: function() {
                        var inputs = document.getElementsByClassName('search-input');
                        myArray.forEach.call(inputs, function(input) {
                            input.oninput = _onInputSearch;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                    TableFilter.init();
                }
            });

        })(document);
	</script>
    
</body>
</php>
