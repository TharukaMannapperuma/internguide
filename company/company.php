<?php
// Include config file
require_once ('../company/connect.php');
$id_company=trim($_GET['id']);
$id_student=trim($_GET['userid']);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="resume, civic, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->   
    <link href="../admin/src/assets/images/logo-icon.png" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/flaticon.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://kit.fontawesome.com/6d41dc11d3.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../admin/src/assets/images/logo-icon.png">
    <title></title>
    <!-- Custom CSS -->
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <?php
    $get_admin = "select * from employee where id = $id_company";
    $run_edit_admin = mysqli_query($connection,$get_admin);
    $row = mysqli_fetch_array($run_edit_admin);
    $name = $row['ename'];
    $id_company = $row['id'];
    $email = $row['email'];
    $phone = $row['phone'];
    $description = $row['description'];
    $phone = $row['address'];
    $introduction = $row['introduction'];
    $vision = $row['vision'];
    $mission = $row['mission'];
    $photo1 = $row['image'];
    $loc1 = "../admin/src/assets/".$photo1;
    $photo2 = $row['photo2'];
    $loc2 = "../admin/src/assets/".$photo2;  
    $photo3 = $row['photo3'];
    $loc3 = "../admin/src/assets/".$photo3; 
    $photo4 = $row['photo4'];
    $loc4 = "../admin/src/assets/".$photo4;
    $photo5 = $row['photo5'];
    $loc5 = "../admin/src/assets/".$photo5; 
    $photo6 = $row['photo6'];
    $loc6 = "../admin/src/assets/".$photo6;   
    $field = $row['field'];      
    $areas = (explode(",",$field));                         
    ?>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header" data-logobg="skin6">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="#">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="../admin/src/assets/images/logo-icon.png" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../admin/src/assets/images/logo-icon.png" class="light-logo" />
                            </b>
                            <span class="logo-text">
                                <img src="../admin/src/assets/images/logo-text.png"  class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../admin/src/assets/images/logo-text.png"  class="light-logo" />
                            </span>
                        </a>
                    </div>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                    data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <h1 style="font-size:120%; "selected><?php
                        date_default_timezone_set('Asia/Colombo');
                        $mydate=getdate(date("U"));
                        echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
                        ?></h1>
                        <li class="nav-item dropdown">
                         
                        </li>
                        <li class="nav-item d-none d-md-block">
                            
                        </li>
                    </ul>
                    <ul class="navbar-nav float-right">

                        <a class="sidebar-link" href="../users/userprofile.php"
                        aria-expanded="false"><button class='btn btn-rounded btn-success'><i class= "fa fa-home">&nbsp</i><span
                            class="hide-menu">Home</span></button></a></li>   
                            
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="left-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar" data-sidebarbg="skin6">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            
                        <!-- <li class="sidebar-item"> <a class="sidebar-link" href="index.html"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">View Student List</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="ticket-list.html"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Search Students
                                </span></a>
                            </li> -->
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <div class="page-wrapper">
                <div class="col-lg-6 text-md-center">
                    <figure class="hero-image">
                       <img src="<?php echo $loc1 ?>"  style="max-height:500px; max-width : 500px">
                   </figure>
               </div>
               <div class="page-breadcrumb">
                <div class="row">
                    <div class="hero-info">
                       <h2 style="font-size:300%; "selected><?php echo $row['ename'] ?></h2>
                   </div>
                   <div class="d-flex align-items-center">
                   </div>
                   <div class="hero-info">
                       <p  style="font-size:150%; "selected><?php echo $row['description'] ?></p>
                   </div>
               </div>
           </div>
           <div class="container-fluid">
            <div class="hero-info">
                <h2 style="font-size:250%; "selected>General Info</h2>
                <ul>
                 <li ><span> &nbsp Address - </span>&nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['address'] ?></li>
                 <li><span> &nbsp E-mail - </span>&nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['email'] ?></li>
                 <li><span>  &nbsp Phone -  </span>&nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $row['phone'] ?></li>
             </ul>
             

         </div>
         <!-- *************************************************************** -->
         <!-- Start Sales Charts Section -->
         <!-- *************************************************************** -->
         &nbsp
         <h2  style="font-size:250%; "selected>About</h2>
         <div class="row">
            <ul class="resume-list">
             <li>
                <h1  style="font-size:200%; "selected>Introduction</h1>
                <p  style="font-size:100%; "selected><?php echo $row['introduction'] ?></p>
            </li>
            <li>
                <h1 style="font-size:200%; "selected>Vision</h1>
                <p  style="font-size:150%; "selected>&nbsp &nbsp &nbsp <?php echo $row['vision'] ?></p>
            </li>
            <li>
                <h1 style="font-size:200%; "selected>Mission</h1>
                <p  style="font-size:150%; "selected>&nbsp &nbsp &nbsp <?php echo $row['mission'] ?></p>
            </li>
            <li>
                <h1  style="font-size:200%; "selected>Current Working Areas</h1>
                <?php
                $count = 0;
                while($count < count($areas)){
                    echo " <p  style='font-size:150%; 'selected >&nbsp &nbsp &nbsp $areas[$count]</p>";
                    $count++;
                }
                ?>
            </li>
        </ul>
    </div>
</div>
<footer  class="footer text-center text-muted">
    <div class="text-md-center header-buttons">
       <a class='site-btn' href="update.php?id_student=<?php echo $id_student ?>&id_company=<?php echo $id_company ?>">Request For Intern

       </a>
   </div>
   <div class="social-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <h2 class="hidden-md hidden-sm">Find Us</h2>
                <div class="social-link-warp">
                    <div class="social-links">
                        <a href="<?php echo $row['pin'] ?>"><i class="fas fa-globe fa-1x"></i></a>
                        <a href="<?php echo $row['linkedin'] ?>"><i class="fab fa-linkedin-in fa-1x"></i></a>
                        <a href="<?php echo $row['facebook'] ?>"><i class="fab fa-facebook-f fa-1x"></i></a>
                        <a href="<?php echo $row['twitter'] ?>"><i class="fab fa-twitter fa-1x"></i></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
</div>
</div>
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<!-- apps -->
<script src="dist/js/app-style-switcher.js"></script>
<script src="dist/js/feather.min.js"></script>
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="assets/extra-libs/c3/d3.min.js"></script>
<script src="assets/extra-libs/c3/c3.min.js"></script>
<script src="assets/libs/chartist/dist/chartist.min.js"></script>
<script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<script src="dist/js/pages/dashboards/dashboard1.min.js"></script>

</body>

</html>