<<<<<<< HEAD:application/views/header.php
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?=site_url()?>"><img src="<?=site_url('images/home/logo.png')?>" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php if($_SESSION['user'] !== null) : ?>
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li> 
								<?php endif; ?>
								<li><a href="<?=site_url('site/page/checkout')?>"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php if($_SESSION['user'] == null) : ?>
								<li><a href="<?=site_url('site/page/login')?>"><i class="fa fa-lock"></i> Login</a></li>
								<?php endif; ?>
								<?php if($_SESSION['user'] != null) : ?>
								<li><a href="<?=site_url('site/logout')?>"><i class="fa fa-lock"></i> Çıkış</a></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="<?=site_url('site/page/checkout')?>">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
=======
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Doğru Tic. A.Ş.</title>
     
    <link href="<?=site_url('vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=site_url('vendor/metisMenu/metisMenu.min.css')?>" rel="stylesheet">

    <link href="<?=site_url('vendor/datatables-plugins/dataTables.bootstrap.css')?>" rel="stylesheet">

    <link href="<?=site_url('vendor/datatables-responsive/dataTables.responsive.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=site_url('dist/css/sb-admin-2.css')?>" rel="stylesheet">
    
    <link href="<?=site_url('vendor/morrisjs/morris.css')?>" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="<?=site_url('vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=site_url()?>">Doğru Tic. A.Ş.</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>                    
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Önder Mert Artan</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Sezer Doğru</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Himmet Deyneli</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
               
        
                
            
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Kullanıcı Profili</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ayarlar</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?=site_url('adminpanel/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Çıkış</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?=site_url('adminpanel')?>"><i class="fa fa-dashboard fa-fw"></i> Anasayfa</a>
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Kullanıcılar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=site_url('adminpanel/page/user/list')?>">Kullacıları Listele</a>
                                </li>
                                <li>
                                    <a href="<?=site_url('adminpanel/page/user/create')?>">Kullanıcı Ekle</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Ürünler<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=site_url('adminpanel/page/product/list')?>">Ürünleri Listele</a>
                                </li>
                                <li>
                                    <a href="<?=site_url('adminpanel/page/product/create')?>">Ürün Ekle</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Siparişler<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=site_url('adminpanel/page/order/list')?>">Siparişleri Listele</a>
                                </li>
                                <li>
                                    <a href="<?=site_url('adminpanel/page/order/create')?>">Sipariş Ekle</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

     <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
>>>>>>> f799e080b137855809e1f458367321d95010f975:application/views/panel/header.php
