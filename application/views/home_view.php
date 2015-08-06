<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="20" />
<title>Administrator</title>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" />

<link href="<?php echo base_url(); ?>assets/css/calendar.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/calendar.js"></script>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyAqhJ6sg9DMHKhLvWrzUs96NDMemaDXriw" type="text/javascript"></script>
<div class="content">

</head>

<body>
<div id="wrapper">
       <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
        	<a class="navbar-brand">Admin Panel</a>
        </div>
		<div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">

        	<a href="home/logout" class="btn btn-danger square-btn-adjust">Logout</a>
        </div>
	</nav>
<nav class="navbar-default navbar-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav" id="main-menu">
			<li class="text-center">
            	<img src="<?php echo base_url(); ?>assets/image/find_user.png" class="user-image img-responsive"/>
            </li>

            <li>
            	<a class="active-menu"  href="#"><i class="fa fa-dashboard fa-3x"></i><?php echo $username; ?></a>
            </li>

            <li>
            	<a class="active-menu" href="#"><i class="fa fa-dashboard fa-3x"></i>Lokasi</a>
            </li>

            <li class="sidebar-search">
              <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"></button>
                </span>
              </div>
            </li>

            <li>
              <a class="active-menu"  href="#"><i class="fa fa-dashboard fa-3x"></i>Registrasi Lokasi</a>
            </li>
		</ul>
	</div>
</nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     	<h2>Admin Dashboard</h2>
					 	<h5>Welcome <?php echo $username; ?> , Love to see you back. </h5>
                    </div>
                </div>
                <hr />
          <!-- /. ROW  --></div>
	</div>
</div>
</body>
</html>
