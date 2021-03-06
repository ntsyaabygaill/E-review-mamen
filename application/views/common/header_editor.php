<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>E-review</title>
	<link href="<?php echo base_url('img/ikonn.jpg') ?>" rel="icon">
	<!-- Bootstrap CSS -->
	<link href="<?php echo base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
	<!-- animate CSS -->
	<link href="<?php echo base_url('css/animate.css') ?>" rel="stylesheet">
	<!-- owl carousel CSS -->
	<link href="<?php echo base_url('css/owl.carousel.min.css') ?>" rel="stylesheet">
	<!-- font awesome CSS -->
	<link href="<?php echo base_url('css/all.css') ?>" rel="stylesheet">
	<!-- flaticon CSS -->
	<link href="<?php echo base_url('css/flaticon.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('css/themify-icons.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('css/swiper.min.css') ?>" rel="stylesheet">
	<!-- font awesome CSS -->
	<link href="<?php echo base_url('css/magnific-popup.css') ?>" rel="stylesheet">
	<!-- swiper CSS -->
	<link href="<?php echo base_url('css/slick.css') ?>" rel="stylesheet">
	<!-- style CSS -->
	<link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet">
    
</head>
<!--::header part start::-->
<header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="<?= base_url(); ?>"> <img src="img/logo4.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                            <?php $segment = $this->uri->segment(2) ?>
                        <li class="nav-item" <?php if($segment=="" || $segment=="index"){echo "active";}?>">
                        <a class ="nav-link" href="<?= base_url(); ?>">Home</a>
                        </li>
                        <li class="nav-item dropdown <?php if($segment=="addtask" || $segment=="viewtask" || $segment =="selectpotentialreviewer"){echo "active";}?>">
                        <a class ="nav-link" href="#">Task</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url() . 'editorctl/addtask'; ?>">Add Task</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() . 'editorctl/viewassignedtask'; ?>">View Task</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() . 'editorctl/selectpotentialreviewer'; ?>">Select Reviewer</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown <?php if($segment=="topup" || $segment=="commitpayment"){echo "active";}?>">
                        <a class ="nav-link" href="<?= base_url('editorctl/commitpayment') ?>">Payment</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Balance: <?= number_format(($session_data['balance'] ), 2, ',', '.')?></a></li>
                 <!--           <li><a class="dropdown-item" href="<?php echo base_url() . 'paymentctl/topup'; ?> ">Top-Up</a></li> -->
                            <li><a class="dropdown-item" href="<?php echo base_url() . 'editorctl/commitpayment'; ?>">Task Payment</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class ="nav-link" href="#"><?= $session_data['nama'] ?> (<?= ucfirst($session_data['nama_grup']); ?>)</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url() . 'accountctl/profile'; ?>">Profile</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() . 'accountctl/logout'; ?> ">Logout</a></li>
                        </ul>
                        </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->