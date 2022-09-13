<?php
//This session is used to store data in PHPSESSID cookies while a specific user is logged in 
//Starting session before page is loaded so we can get data (email) from loginvalidationdbms.php page above code 
include('includes/topbar.php');
//This session is used to store data in PHPSESSID cookies while a specific user is logged in 
//Starting session before page is loaded so we can get data (email) from loginvalidationdbms.php page above code 
include('includes/topbar.php');
$uid=$_SESSION['userid'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 //First getting databse connection
 $conn=mysqli_connect('localhost','root','','universitymanag');
 if ($conn==false) {
   //If connection building is failed to database
  echo "Connection to DBMS failed";
                
      }
  else{
       
      //Now its time to get data from form into variables
       $newpassword1=$_POST['p2'];
       $newpassword2=$_POST['p3'];
     

       //Making query and inserting data into database

    // echo $oldpassword;
    // echo $newpassword1;
    // echo $newpassword2;


      if (strcmp($newpassword1,$newpassword2)==0) {
       	$query1="UPDATE `student` SET `spassword`='$newpassword1'";
       	$run=mysqli_query($conn,$query1);
     
        if($run==true){
  
           ?>
           <script type="text/javascript">
           	alert("Password Updated successfully");
           </script>
           <?php
        }
        else{
        ?>
           <script type="text/javascript">
           	alert("Failed to update password");
           </script>
           <?php
        }
        }


       
      else{

      	?>
        <script type="text/javascript">
         alert("Both new passwords do not match");
        </script>
      	<?php
      }

   



}
}

 
?>
<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Result Management System | Dashboard</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
       

        <style type="text/css">
  .container{
  	    width: 95%;
  	    background-color: white;
  	    margin: 2%;
  	    padding: 2%;

       }

       .pstx2{
        /*For JS purpose*/
       }
       .pstx3{
        /*For JS purpose*/
       }
       #errormsg{
       	display: none;
       	color: red;
       }
        </style>
  
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <div class="content-wrapper">
                <div class="content-container">

                    <?php include('includes/leftbar.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">Change Password</h2>
                    
                                </div>


                                <!-- /.col-sm-6 -->


                            </div>
           </div>
                        <!-- /.container-fluid -->


          <div class="container">
              <form action="ChangePassword.php" method="POST"> 
            
              	<label for="p2">Enter Your new Password</labe>
              	<input type="Password" name="p2" class="pstx2" id="in2" required="true">
            
              	<label for="p3">Confirm Your new Password</label>
              	<input type="Password" name="p3" class="pstx3" id="in3" required="true">
              	



	            <input type="checkbox"  onclick ="showpassword()">     

	            <font id="errormsg" size="2">Passwords do not match</font>         

             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="reset" name="rsbutton" value="Reset">
               <input type="submit" name="sbutton" value="Change" >
              

	           </form>

              




          </div>
                 

                    </div>
                  </div>
                  
                  </div>  



        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/waypoint/waypoints.min.js"></script>
        <script src="js/counterUp/jquery.counterup.min.js"></script>
        <script src="js/amcharts/amcharts.js"></script>
        <script src="js/amcharts/serial.js"></script>
        <script src="js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="js/amcharts/themes/light.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script src="js/production-chart.js"></script>
        <script src="js/traffic-chart.js"></script>
        <script src="js/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome to student Result Management System!");





            });
  function showpassword() {
    // body...
    //Now accessing type of both textfields in our form
    //This code is for showing password inn text field

        var y=document.querySelector('.pstx2');
      
    if (y.type=="password") {

      y.type="text";
      
    }
    else{
      y.type="password";
    }

        var z=document.querySelector('.pstx3');
    if (z.type=="password") {

      z.type="text";

    }
    else{
      z.type="password";
    }
  }

        </script>
    </body>
</php>

