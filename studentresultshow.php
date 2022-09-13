
<?php
//This session is used to store data in PHPSESSID cookies while a specific user is logged in 
//Starting session before page is loaded so we can get data (email) from loginvalidationdbms.php page above code 
include('includes/topbar.php');
session_start();
?>

<!DOCTYPE php>
<php>
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
                                    <h2 class="title">Student Result</h2>
                                  
                                </div>


                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->
                            <div>
                              <table border="1">
                                <thead>
                                  <tr>
                                  <th>Description</th>
                                  <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

<?php
//This session is used to store data in PHPSESSID cookies while a specific user is logged in 
//Starting session before page is loaded so we can get data (email) from loginvalidationdbms.php page above code 

$user=$_SESSION['userid'];


  $conn=mysqli_connect('localhost','root','','universitymanag');
if ($conn==false) {
  # code...
  //If connection building is failed to database
  echo "Connection to DBMS failed";
}
else{
    // fetch file to download from database
    $sql = "SELECT * FROM `studentresult` WHERE `sregno`='$user'";
    $result = mysqli_query($conn, $sql);
  while ($row=mysqli_fetch_array($result)) {
    ?>
     <tr><td>Download your results by clicking on download</td>
                                       <td><a href="<?php echo $row['address'];?>"><u>Download</u></a></td>
                                  </tr>

<?php  }
    }    
?>
                                  
                                </tbody>
                              </table>
                            </div>
   
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

