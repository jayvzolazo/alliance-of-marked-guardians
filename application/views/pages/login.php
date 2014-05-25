<!DOCTYPE html>
<html class="bg-black">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php echo $site_name; ?></title>
        
    	<link href='<?php echo base_url('assets/css/template.css'); ?>' rel='stylesheet' />
        <link href='<?php echo base_url('assets/css/bootstrap.min.css'); ?>' rel='stylesheet' />
        <link href='<?php echo base_url('assets/css/font-awesome.min.css'); ?>' rel='stylesheet' />
        <link href='<?php echo base_url('assets/css/AdminLTE.css'); ?>' rel='stylesheet' />
    </head>
    <body class="bg-black">
    
    	<div class="form-box" id="login-box">
            <div class="header">A M G M M S</div>
            <?php echo form_open('', array('role' => 'form')); ?>
                <div class="body bg-gray">
                	<?php echo $response; ?>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username" autofocus />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" />
                    </div>
                </div>
                <div class="footer">
                    <button type="submit" class="btn btn-block btn-social btn-bitbucket bg-olive">
                        <i class="fa fa-key"></i> Sign in
                    </button>
                    <!-- <p><a href="#">I forgot my password</a></p> -->
                </div>
            <?php echo form_close(); ?>

            <div class="margin text-center">
                <span><strong>Alliance of Marked Guardians</strong><br /><small>Member Management System</small></span>
            </div>
        </div> <!-- login box -->
        
        <script src='<?php echo base_url('assets/js/jquery.min.js'); ?>' type='text/javascript'></script>
        <script src='<?php echo base_url('assets/js/bootstrap.min.js'); ?>' type='text/javascript'></script>
    </body>
</html>