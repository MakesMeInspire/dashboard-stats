<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.ico')?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>WB Panel</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?= base_url('assets/css/animate.min.css')?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?= base_url('assets/css/light-bootstrap-dashboard.css?v=1.4.0')?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url('assets/css/demo.css')?>" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="<?= base_url('assets/css/plugins/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/plugins/roboto.css')?>" rel='stylesheet' type='text/css'>
    <link href="<?= base_url('assets/css/pe-icon-7-stroke.css')?>" rel="stylesheet" />

    <?php if(!empty($special)){?>
        <link href="<?= base_url('assets/css/profile.css')?>" rel="stylesheet" />
    <?php
    }?>
    

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="<?= base_url('assets/img/sidebar-2.jpg')?>">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?= base_url('')?>" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <?php
                    if($userdetail['0']['status'] == '1'){
                        ?>
                            <li <?php if($side == 1){?>class="active"<?php } ?>>
                                <a href="<?= base_url('dashboard')?>">
                                    <i class="pe-7s-graph"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li <?php if($side == 2){?>class="active"<?php } ?>>
                                <a href="<?= base_url('dashboard/profile')?>">
                                    <i class="pe-7s-user"></i>
                                    <p>User Profile</p>
                                </a>
                            </li>
                            <li <?php if($side == 3){?>class="active"<?php } ?>>
                                <a href="<?= base_url('dashboard/data')?>">
                                    <i class="pe-7s-note2"></i>
                                    <p>Table List</p>
                                </a>
                            </li>
                            <li <?php if($side == 4){?>class="active"<?php } ?>>
                                <a href="#">
                                    <i class="pe-7s-news-paper"></i>
                                    <p>Typography</p>
                                </a>
                            </li>
                            <li <?php if($side == 5){?>class="active"<?php } ?>>
                                <a href="#">
                                    <i class="pe-7s-science"></i>
                                    <p>Icons</p>
                                </a>
                            </li>
                            <li <?php if($side == 6){?>class="active"<?php } ?>>
                                <a href="#">
                                    <i class="pe-7s-map-marker"></i>
                                    <p>Maps</p>
                                </a>
                            </li>
                            <li <?php if($side == 7){?>class="active"<?php } ?>>
                                <a href="#">
                                    <i class="pe-7s-bell"></i>
                                    <p>Notifications</p>
                                </a>
                            </li>
                            <li class="active-pro">
                                <a href="#">
                                    <i class="pe-7s-rocket"></i>
                                    <p>Upgrade to PRO</p>
                                </a>
                            </li>
                        <?php
                    }elseif($userdetail['0']['status'] == '2'){
                        ?>
                            <li <?php if($side == 1){?>class="active"<?php } ?>>
                                <a href="<?= base_url('dashboard')?>">
                                    <i class="pe-7s-graph"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li <?php if($side == 2){?>class="active"<?php } ?>>
                                <a href="<?= base_url('dashboard/profile')?>">
                                    <i class="pe-7s-user"></i>
                                    <p>User Profile</p>
                                </a>
                            </li>
                            <li <?php if($side == 3){?>class="active"<?php } ?>>
                                <a href="<?= base_url('dashboard/data')?>">
                                    <i class="pe-7s-note2"></i>
                                    <p>Table List</p>
                                </a>
                            </li>
                            <li <?php if($side == 4){?>class="active"<?php } ?>>
                                <a href="#">
                                    <i class="pe-7s-news-paper"></i>
                                    <p>Typography</p>
                                </a>
                            </li>
                             <li class="active-pro">
                                <a href="#">
                                    <i class="pe-7s-rocket"></i>
                                    <p>Upgrade to PRO</p>
                                </a>
                            </li>
                        <?php
                    }else{
                        ?>
                            <li <?php if($side == 1){?>class="active"<?php } ?>>
                                <a href="<?= base_url('dashboard')?>">
                                    <i class="pe-7s-graph"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li <?php if($side == 2){?>class="active"<?php } ?>>
                                <a href="<?= base_url('dashboard/profile')?>">
                                    <i class="pe-7s-user"></i>
                                    <p>User Profile</p>
                                </a>
                            </li>
                            <li <?php if($side == 3){?>class="active"<?php } ?>>
                                <a href="<?= base_url('dashboard/data')?>">
                                    <i class="pe-7s-note2"></i>
                                    <p>Table List</p>
                                </a>
                            </li>
                             <li class="active-pro">
                                <a href="#">
                                    <i class="pe-7s-rocket"></i>
                                    <p>Upgrade to PRO</p>
                                </a>
                            </li>
                        <?php
                    }
                ?>

                
            </ul>
    	</div>
    </div>

    <div class="main-panel">