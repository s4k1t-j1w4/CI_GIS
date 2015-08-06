<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="<?php echo base_url() ;?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ;?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url() ;?>assets/css/sb-admin.css" rel="stylesheet">
</head>
<body>
    <?php echo validation_errors(); ?>
    <?php echo form_open('verifylogin'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <button type="submit" id="login" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                        <div id="message"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url() ;?>assets/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url() ;?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url() ;?>assets/js/sb-admin.js"></script>
</body>
</html>
