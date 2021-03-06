<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta, title, favicons -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- CSS --> 
  <link href="../content/css/bootstrap.min.css" rel="stylesheet">
  <link href="../content/css/font-awesome.min.css" rel="stylesheet">
  <link href="../content/css/animate.min.css" rel="stylesheet">
  <!-- Custom styling plus plugins -->
  <link href="../content/css/custom.css" rel="stylesheet">
  <link href="../content/css/site.css" rel="stylesheet">
  
  <script src="../content/js/jquery.min.js"></script>
  <script src="../content/js/nprogress.js"></script>
  </head>
<body class="nav-md">

  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Bimbel Wisdom</span></a>
          </div>
            <div class="clearfix"></div>
          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Fhazkard</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->
          <br />
          
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Dashboard</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="index.html">Data Murid</a>
                    </li>
                    <li><a href="index2.html">Data Pengajar</a>
                    </li>
                    <li><a href="index3.html">Data Sekolah</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Input Data <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="form.html">Data Murid</a>
                    </li>
                    <li><a href="form_advanced.html">Data Pengajar</a>
                    </li>
                    <li><a href="form_validation.html">Data Sekolah</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Akademik <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="general_elements.html">Data Kelas</a>
                    </li>
                  </ul>
                </li>                
                <li><a><i class="fa fa-bar-chart-o"></i> Materi Belajar <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="chartjs.html">Data Materi Belajar</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="animated bounceIn fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt="">Fhazkard
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="javascript:;">  Ganti Password</a>
                  </li>
                  <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>            
            </ul>
          </nav>
        </div><!-- nav menu -->
      </div><!-- top navigation -->   
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row tile_count">
          <div class="animated bounceInLeft col-md-6 col-sm-6 col-xs-6 tile_stats_count pull-left " align="center">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>  
          </div>
          <div class="animated bounceInRight col-md-6 col-sm-6 col-xs-6 tile_stats_count pull-right" align="center">     
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>       
          </div>        
        </div> <!-- /top tiles -->