<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institution Panel</title>
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- <script src="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>"></script> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<style>
    body {
        background: #F2F2F2;
        font-family: 'Roboto', sans-serif;
    }
    .user_img {
        width: 150px;
        height: 150px;
        border-radius: 100px;
        border: 4px solid #FD6D6D;
        padding: 0px;
    }
    .sidebar {
        background: #fff;
        padding: 10px;
        height: 100vh;
    }
    .sidebar_menu {
        margin-top: 20px;
        margin-bottom: 20px;
        border-top: 2px solid #FD6D6D;
        border-bottom: 2px solid #FD6D6D;
        padding-left: 30px;
    }
    .sidebar_menu > li {
        list-style: none;
        padding: 10px;
        font-size: 18px;
        text-transform: uppercase;
    }
    .sidebar_menu a {
        color: #000;
    }
    .logout_bn {
        background: #FD6D6D;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 50px;
        padding-right: 50px;
        color: #fff;
        text-transform: uppercase;
        border-radius: 3px;
    }
    .font-bold {
        font-weight: bold;
        text-transform: uppercase;
    }
    .sidebar_icon {
        margin-right: 10px;
        color: #FD6D6D;
    }
    .page_heading {
        color: #FD6D6D;
        text-transform: uppercase;
        font-weight: 1000;
    }
    .main_cotent {
        padding-left: 40px;
    }
    .page_heading-low {
        font-weight: bold;
        color: #FD6D6D; 
    }
    .main_box {
        background: #fff;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 3px;
        margin-right: 10px;
        margin-top: 10px;
        padding-top: 30px;
        padding-bottom: 30px;
    }
    .space-top {
        margin-top: 20px;
    }
    .theme_color {
        color: #FD6D6D;
    }
    .graph {
        height: 250px;
    }
    .active_status {
        width: 50px;
        border-radius: 40px;
    }
    .red {
        background: red;
    }
    .notification_icon {
        color: #FD6D6D;
        float: right;
        font-size: 18px;
    }
</style>
<body>
    
    <div class="container" style="padding-left: 0; padding-right: 0; margin-left: 0;  margin-right: 0;">

        <div class="row">

            <div class="col-lg-3 sidebar">
                
                
                
                
                <div class="text-center">
                

                    <img src="<?= base_url()?>upload/usindhlogo.png" class="user_img" alt="User Img" />
                    <h3 class="font-bold">Sindh University</h3>
                    <span>offical@sindhuniversity.com</span>

                </div>
                
                
                
                


                <ul class="sidebar_menu">
                    <li>
                        <a href="<?= base_url()?>Institution/dashboard">
                            <i class="fa-sharp fa-solid fa-gauge sidebar_icon"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url()?>Institution/user">
                            <i class="fa-solid fa-user sidebar_icon"></i> Mange User
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url()?>Institution/report">
                            <i class="fa-solid fa-file sidebar_icon"></i> Mange Reports
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url()?>Institution/safe_location">
                            <i class="fa-solid fa-location-pin sidebar_icon"></i> Add Safe Locations
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-address-card sidebar_icon"></i> About Us
                        </a>
                    </li>
                </ul>

                <div class="text-center">
                    <a href="#" class="logout_bn">Logout</a>
                </div>

            </div>

            