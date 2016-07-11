<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SMS GATEWAY | Sign In Page</title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--<link href="<?php //echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                   <?php echo form_open('login/login_controller/login_proses'); ?>
                        <h1>Sign In</h1>
                        <div>
                            <i class="fa fa-user" style="margin-right:10px; font-size:18px"></i><input type="text" style="width:80%; padding:7px;" name="username" placeholder="Username" required="" />
                        </div>
                        <div>
                            <i class="fa fa-lock" style="margin-right:10px; font-size:18px"></i><input type="password" style="width:80%; padding:7px;" name="password" placeholder="Password" required="" />
                        </div>
                        <div>
                            <button class="btn btn-default submit" href="index.html"><i class="fa fa-send" style="margin-right:5px;"></i>Log in</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Need new account?
                                Please call IT Division
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-mobile" style="font-size: 26px;"></i> SMS GATEWAY</h1>

                                <p>©2015 All Rights Reserved.</p>
                            </div>
                        </div>
                    <?php echo form_close();?>
					<?php echo validation_errors();?>
					<?php echo $this->session->flashdata('login_result'); ?>

                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            <!--<div id="register" class="animate form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Already a member ?
                                <a href="#tologin" class="to_register"> Sign in </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-mobile" style="font-size: 26px;"></i> SMS GATEWAY</h1>

                                <p>©2015 All Rights Reserved.</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content --
            </div>-->
        </div>
    </div>

</body>

</html>