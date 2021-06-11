<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo getenv('APP_TITLE');?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css_theme/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo base_url('/assets/css_theme/nprogress.css'); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css_theme/green.css'); ?>">
    <!-- Datatables -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css_theme/dataTables.bootstrap.min.css'); ?>">


    <link rel="stylesheet" href="<?php echo base_url('/assets/css_theme/buttons.bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css_theme/fixedHeader.bootstrap.min.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('/assets/css_theme/responsive.bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css_theme/scroller.bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css_theme/custom.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css_theme/custom.css'); ?>">

    <style>
    .login-bg {
        margin-top: 20px;
        padding: 30px 10px;
        background: #2a2f32 !important;
        border: 1px solid #c7c7c7;
        border-radius: 15px;
        max-width: 600px;
        width: 100%;
        display: inline-block;
    }

    .login-txt h2 span {
        display: inline-block;
        color: #ff1493;
        padding-bottom: 10px;
        border-bottom: 0px;
        max-width: fit-content;
        width: 100%;
        font-size: 30px;
        font-weight: 700;
    }

    .login-txt span {
        display: inline-block;
        color: #ffffff;
        padding-bottom: 20px;
        border-bottom: 1px solid #ff1493;
        max-width: 226px;
        width: 100%;
        font-size: 16px;
        font-weight: 500;
    }

    .btn6 {
        width: 100%;
        display: inline-block;
        background: #ff1493;
        color: #ffffff;
        border: 1px solid #ff1493;
        text-align: center;
        font-weight: 700;
    </style>

<body class="nav-md log-con">
    <div class="container body">
        <div class="main_container">

            <!-- page content -->
            <!-- page content -->
            <div class="">
                <div class="clearfix"></div>
                <div class="col-md-6 col-xs-12">
                    <div class="log-img"><img src="<?php echo base_url('/assets/images/login_bg_img.jpeg'); ?>">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="log-wrap">
                        <?php if ($this->session->flashdata('msg')) { ?>
                        <div id="mydiv" class="alert alert-danger marg-tp-60">
                            <?= $this->session->flashdata('category_success') ?>
                            Please enter valid Email or password.
                        </div>
                        <?php } ?>
                        <?php if ($this->session->flashdata('block')) { ?>
                        <div id="mydiv" class="alert alert-danger marg-tp-60">
                            <?= $this->session->flashdata('category_success') ?>
                            You action has been block. Contact to admin.
                        </div>
                        <?php } ?>
                        <div class="x_panel login-bg">
                            <div class="x_content login-txt">
                                <h2>
                                    <span style="color:white">
                                        <?php
                                          echo explode(" ",getenv('APP_NAME'))[0];
                                        ?>
                                    </span>
                                    <span>
                                        <?php echo explode(" ", getenv('APP_NAME'))[1];?></span>
                                </h2>
                                <span>let's get started</span>
                            </div>

                            <br />
                            <form class="form-horizontal form-label-left input_mask" action="<?php 
                     echo base_url('index.php/Admin/login');
                     
                    ?>" method="POST" data-parsley-validate>

                                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback"
                                    style="margin-bottom: 4%">
                                    <input type="email" name="email" required=""
                                        class="form-control has-feedback-right input2" id="exampleInputEmail1"
                                        placeholder="Email" value="admin@gmail.com">
                                    <span class="fa fa-envelope form-control-feedback right icn-rht"
                                        aria-hidden="true"></span>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback"
                                    style="margin-bottom: 4%">
                                    <input required="" type="password" name="password" class="form-control input2"
                                        id="exampleInputPassword1" placeholder="Password" value="123456">


                                    <span class="fa fa-key form-control-feedback right icn-rht"
                                        aria-hidden="true"></span>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit"
                                            class="btn btn6 col-md-12 col-sm-12 col-xs-12">Login</button>
                                    </div>
                                </div>

                            </form>
                        </div>


                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- /page content -->

        </div>
    </div>
    <script type="text/javascript">
    setTimeout(function() {
        $('#mydiv').fadeOut('fast');
    }, 5000); // <-- time in milliseconds
    </script>

</body>

</html>