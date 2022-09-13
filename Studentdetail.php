<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){


$conn=mysqli_connect('localhost','root','','universitymanag');
if ($conn==false) {
  # code...
  //If connection building is failed to database
  echo "Connection to DBMS failed";
}
else{
    $sidvar=$_POST['studentid'];
    $fnamevar=$_POST['fname'];
    $lnamevar=$_POST['lname'];
    $datevar=$_POST['day']."/".$_POST['month']."/".$_POST['year'];
    $emailvar=$_POST['email'];
    $bitdvar=$_POST['bit'];
    $gendervar=$_POST['gender'];
    $addressvar=$_POST['address'];
    $cityvar=$_POST['city'];
    $pincodevar=$_POST['pincode'];
    $statevar=$_POST['state'];
    $countryvar=$_POST['country'];
    $programvar=$_POST['program'];


    $query0="SELECT * FROM `student` WHERE `sregno`='$sidvar'";
    $run=mysqli_query($conn,$query0);
    $row=mysqli_num_rows($run);
    if($row>=1){
    $query1="SELECT * FROM `studentdetails` WHERE `regno`='$sidvar'";
    $run=mysqli_query($conn,$query1);
    $row=mysqli_num_rows($run);

if($row=0){

               $query2="INSERT INTO `studentdetails` ( `regno`, `fname`, `lname`, `DOB`, `email`, `gender`, `address`, `city`, `pincode`, `state`, `country`, `cprogram`) VALUES ( '$sidvar', '$fnamevar', '$lnamevar', '$datevar', '$emailvar', '$gendervar', '$addressvar', '$cityvar', '$pincodevar', '$statevar', '$countryvar', '$programvar')";
               $run=mysqli_query($conn,$query2);
               if($run==true){
            //      ?>
                <script type="text/javascript">
                  alert("Student was registered successfully")
            //      </script>
                <?php
               }
               else{
                ?>
                <Script>
                alert("Failed to register student");
               </Script>
               <?php
               }
             }else{
                              ?>
                <Script>
                alert("Student Detail Already Exists");
               </Script>
               <?php
             }
}
else{
   ?>
                <Script>
                alert("No such Student Exists");
               </Script>
               <?php
}

  }
}
?>
<!DOCTYPE html>
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
  table{
    width: 70%;
    height: 100%;
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
          <li class="active"><a href="Studentdetail.php">Student Details Form</a></li>
          <li ><a href="studentresult.php">Student Results</a></li>

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

  





 <h1><u>STUDENT Details FORM</u></h1>
    <table align = "center" cellpadding="10"   class = "bordered">
   
<form  action="Studentdetail.php" method="POST">
      <tr>
       <label for="First Name"><td>Student ID</label><td>
    <input type="text" class="form-control" id="firstname" placeholder="Student ID" name="studentid">
</tr>
    <tr>
       <label for="Last Name"><td>First Name</label><td>
    <input type="text" class="form-control" id="lastname" placeholder="First Name" name="fname">
</tr>
      <tr><div class="col-sm-10">
       <label for="Last Name"><td>Last Name</label><td>
    <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lname">
  </div></tr>
      <tr> <div class="col-sm-10">
         <br>
         <td>Date Of Birth
           <td>
    <select class="form-control" name="day"> 
   <option>Date</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
  <option>15</option>
  <option>16</option>
  <option>17</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
  <option>24</option>
  <option>25</option>
  <option>26</option>
  <option>27</option>
  <option>28</option>
  <option>29</option>
  <option>30</option>
  <option>31</option>
   
</select>
       

      
    <select class="form-control" name="month"> 
   <option value = "1">Month</option>
  <option value = "Jan">Jan</option>
   <option value = "Feb">Feb</option>
        <option value = "Mar">Mar</option>
        <option value ="April">April</option>  <option value = "May">May</option>  <option value = "June">June</option>  <option value = "July">July</option>  <option value = "Aug">Aug</option>  <option value = "Sept">Sept</option>
     <option value = "Jan">Oct</option>  <option value = "Nov">Nov</option>  <option value = "Dec">Dec</option>
</select>
  </div>
           <select class="form-control" name="year"> 
   <option>Year</option>
  <option>1991</option>
  <option>1992</option>
  <option>1993</option>
  <option>1994</option>
  <option>1995</option>
  <option>1996</option>
  <option>1997</option>
  <option>1998</option>
  <option>1999</option>
  <option>2000</option>
  <option>2001</option>
  <option>2002</option>
  <option>2003</option>
  <option>2004</option>
  <option>2005</option>
  <option>2006</option>
  <option>2007</option>
  <option>2008</option>
  <option>2009</option>
  <option>2010</option>
  <option>2011</option>
  <option>2012</option>
  <option>2013</option>
  <option>2014</option>
  <option>2015</option>
  <option>2016</option>

   
</select>
       </tr>
      <tr>
       <label for="First Name"><td>Email ID</label><td>
    <input type="text" class="form-control" id="firstname" placeholder="Enter you e-mail" name="email">
</tr>
        <tr>
   
       <label for="First Name"><td>Bit</label><td>
    <input type="text" class="form-control" id="firstname" placeholder="Enter Your Bit" name="bit">
</tr>
          <tr>
            <label for="Gender"><td>Gender</label><td>

<label for="male">Male</label>
<input type="radio" name="gender" id="male" value="male">
<label for="female">Female</label>
<input type="radio" name="gender" id="female" value="female"><br></td>
            </tr>
       <label for="First Name"><td>Address</label><td>
    <textarea class="form-control" rows="3"  input type="text" class="form-control" id="firstname" placeholder="Enter Your Address Here" name="address"></textarea>
  </tr>
 <tr>
    <div class="col-sm-10">
       <label for="First Name"><td>City<label><td>
    <input type="text" class="form-control" id="firstname" placeholder="Enter Your city" name="city">
 </tr>
  <tr>
   
       <label for="First Name"><td>Pincode<label><td>
    <input type="text" class="form-control" id="firstname" name="pincode">
 </tr>
  
      
      <tr>
   
       <label for="First Name"><td>State<label><td>
    <input type="text" class="form-control" id="firstname" placeholder="Enter your State" name="state">
  </tr>
      <tr>
       <label for="First Name"><td>Country<label><td>
    <input type="text" class="form-control" id="firstname" placeholder="Malaysia" name="country">
</tr>

  <tr>
       <label for="First Name"><td>Program</label><td>
    <input type="text" class="form-control" id="firstname" placeholder="Enter Your program" name="program">
       <input type="submit"  value="Upload Data">
      <input type="reset"  value="Rests">
</tr>


         </form>

   </table>

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
</php>
