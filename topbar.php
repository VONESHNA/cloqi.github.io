<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/index.html   11 Nov 2019 12:16:10 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>CLOQI</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="./VID-20250112-WA0055_026-removebg-preview.png" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="assets/css/plugins.css">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!-- Main Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body class="template-index belle template-index-belle" style="background-color: black;">
<div id="pre-loader" style="background-color: black;">
    <video width="320" height="240" >
        <source src="./VID-20250112-WA0055.mp4" type="video/mp4"/>
      </video> 
    
</div>
<div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
    <!--Top Header-->
    <div class="top-header" style="background-color: black;">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-10 col-sm-8 col-md-5 col-lg-4">
                    <div class="currency-picker">
                        
                        <ul id="currencies">
                            <li data-currency="INR" class=""></li>
                            <li data-currency="GBP" class=""></li>
                            <li data-currency="CAD" class=""></li>
                            <li data-currency="USD" class="selected"></li>
                            <li data-currency="AUD" class=""></li>
                            <li data-currency="EUR" class=""></li>
                            <li data-currency="JPY" class=""></li>
                        </ul>
                    </div>
                    <div class="language-dropdown">

                        <ul id="language">
                            <li class=""></li>
                            <li class=""></li>
                        </ul>
                    </div>
                    
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	<div class="text-center"><p class="top-header_middle-text"> </p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        <?php if(!isset($_SESSION['customer'])){?><li><a href="./login">Login</a></li><?php }?>
                        <?php if(!isset($_SESSION['customer'])){?><li><a href="./login">Create Account</a></li><?php }?>
                        <?php if(isset($_SESSION['customer'])){?><li><?php echo $_SESSION['username'];?></li><?php }?>
                        <?php if(isset($_SESSION['customer'])){?><li><a href="./logout">Logout</a></li><?php }?>
                        <li><a href="./wishlist">Wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->