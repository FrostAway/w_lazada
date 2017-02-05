<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/checkout.css">
        <link rel="stylesheet" href="../css/screen.css">

        <script src="../js/jquery.min.js"></script>
    </head>

    <body class="_bg_w">

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-2 logo_col">
                        <a href="#" class="head_logo"><img class="h_logo" src="../images/logo.png" alt=" "></a>
                    </div>
                    <?php if (!isset($cart_page)) {  ?>
                    <div class="col-md-10 step_col text-right">
                        <ol class="_head_steps">
                            <li class="h_step h_step_1 active">1. Đăng nhập</li>
                            <li class="h_step h_step_2"><i class="fa fa-check"></i> 2. Đang vận chuyển</li>
                            <li class="h_step h_step_3">3. Thanh toán</li>
                        </ol>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </header>

        <section id="main_checkout">

