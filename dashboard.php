
<?php
//This session is used to store data in PHPSESSID cookies while a specific user is logged in 
//Starting session before page is loaded so we can get data (email) from loginvalidationdbms.php page above code 
session_start();


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
            
.mainright1{
    margin-top: 8%;
    display:flex;
    width:100%;
    height:100%;

}
.mainright1left{
    width:30%;
    height:50%;
    align-items: center;
    text-align: center;
    float:left;
    box-shadow: 0 0 3px black;
}
.mainright1left:hover{
    box-shadow: 0 0 5px black;
}
.mainright1left2{
    width:30%;
    height:50%;
    margin-left:3%;
    align-items: center;
    text-align: center;
    float:left;
    box-shadow: 0 0 3px black;
}
.mainright1left2:hover{
    box-shadow: 0 0 5px black;
}
.mainright1right{
    width:30%;
    height:50%;
    margin-left:3%;
    align-items: center;
    text-align: center;
    float:right;
    box-shadow: 0 0 3px black;
}
.mainright1right:hover{
    box-shadow: 0 0 5px black;
}
        </style>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
              <?php include('includes/topbar.php');?>
            <div class="content-wrapper">
                <div class="content-container">

                    <?php include('includes/leftbar.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div"> 
                                <div class="col-sm-6">
                                    <h2 class="title">Dashboard</h2>
                                  
                                </div>
                                <!-- /.col-sm-6 -->
                            </div>


            <!-- Here Our main page contents will lie-->
               
          <!--Here all inner options of main home right page will be shown-->


          <div class="mainright1">
            
                                  


          <div class="mainright1left">
                 <?php
//This session is used to store data in PHPSESSID cookies while a specific user is logged in 
//Starting session before page is loaded so we can get data (email) from loginvalidationdbms.php page above code 



  $conn=mysqli_connect('localhost','root','','universitymanag');
if ($conn==false) {
  # code...
  //If connection building is failed to database
  echo "Connection to DBMS failed";
}
else{
    // fetch file to download from database
    $sql = "SELECT * FROM `examtimetable` ";
    $result = mysqli_query($conn, $sql);
  while ($row=mysqli_fetch_array($result)) {
    ?>
                                 
                   <a href="<?php echo $row['address'];?>">  
           <img src="image\examtimetable.jpg" height="200" width="200"/>
           <h3>Exam Time table<h3>
       </a>
       <?php  }
    }    
?>
          </div>     


                                  

          <!--mainright1left ends above-->
          <div class="mainright1left2">

                            <?php
//This session is used to store data in PHPSESSID cookies while a specific user is logged in 
//Starting session before page is loaded so we can get data (email) from loginvalidationdbms.php page above code 



  $conn=mysqli_connect('localhost','root','','universitymanag');
if ($conn==false) {
  # code...
  //If connection building is failed to database
  echo "Connection to DBMS failed";
}
else{
    // fetch file to download from database
    $sql = "SELECT * FROM `mentorlist` ";
    $result = mysqli_query($conn, $sql);
  while ($row=mysqli_fetch_array($result)) {
    ?> 

                   <a href="<?php echo $row['address'];?>">  
          <img src="image\mentor.png" height="200" width="200"/>
          <h3>Mentor List<h3>
</a>
              <?php  }
    }    
?>
          </div>
          <!--mainright1left2 ends here-->
          <div class="mainright1right">
                                        <?php
//This session is used to store data in PHPSESSID cookies while a specific user is logged in 
//Starting session before page is loaded so we can get data (email) from loginvalidationdbms.php page above code 



  $conn=mysqli_connect('localhost','root','','universitymanag');
if ($conn==false) {
  # code...
  //If connection building is failed to database
  echo "Connection to DBMS failed";
}
else{
     $id=$_SESSION['userid'];
    // fetch file to download from database
    $sql = "SELECT * FROM `progressionplan`";
    $result = mysqli_query($conn, $sql);
  while ($row=mysqli_fetch_array($result)) {
    ?> 

      <a href="<?php echo $row['address'];?>">  

           <img src="image\plan.png" height="200" width="200"/>
           <h3>Progression Plan<h3>
           </a>
                 <?php  }
    }    
?>
          </div >
        <!--mainright1right ends here-->
          </div>
        <!-- mainright1 end here above-->

          <div class="mainright1">

          <div class="mainright1left">

                            <?php
//This session is used to store data in PHPSESSID cookies while a specific user is logged in 
//Starting session before page is loaded so we can get data (email) from loginvalidationdbms.php page above code 



  $conn=mysqli_connect('localhost','root','','universitymanag');
if ($conn==false) {
  # code...
  //If connection building is failed to database
  echo "Connection to DBMS failed";
}
else{
    // fetch file to download from database
    $sql = "SELECT * FROM `studentdocket`  WHERE `sregno`='$id'";
    $result = mysqli_query($conn, $sql);
  while ($row=mysqli_fetch_array($result)) {
    ?> 
             <a href="<?php echo $row['address'];?>">  
           <img src="image\examdocket.png" height="200" width="200"/>
           <h3>Exam Docket<h3>
           </a>
         <?php  }
    }    
?>
          </div>
          

        <!--mainright1right ends here-->
          </div>
                            <!-- /.row -->
                      
                        </div>
                        <!-- /.container-fluid -->

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

        </script>
    </body>
</php>

