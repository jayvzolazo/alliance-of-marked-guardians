<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?=$header_elements;?>
    <?php echo (isset($styles) || !is_null($styles))? $styles : '';?>
    <title><?php echo $site_title; ?></title>
</head>
<body class="navbar-fixed">
    <?php echo $navbar; ?>

    <div class="main-container" id="main-container">
        <script type="text/javascript">
            try{ace.settings.check('main-container' , 'fixed')}catch(e){}
        </script>

        <div class="main-container-inner">
            <!-- For Mobile view-->
            <a class="menu-toggler" id="menu-toggler" href="#">
                <span class="menu-text"></span>
            </a>
            
            <?php echo $sidebar; ?>

            <div class="main-content">
                <?php echo $breadcrumbs; ?>

                <div class="page-content">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
							<?=$page;?>
                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->

            </div><!-- /.main-content -->

            <?php echo $setting_container; ?>
        </div><!-- /.main-container-inner -->

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="icon-double-angle-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->
    <?=$scripts;?>
</body>
</html>
