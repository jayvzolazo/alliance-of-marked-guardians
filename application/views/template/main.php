<!DOCTYPE html>
<html class="skin-blue">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?=$header_elements;?>
    <?php echo (isset($styles) || !is_null($styles))? $styles : '';?>
    <title><?php echo $site_title; ?></title>
    </head>
    <body class="skin-blue fixed">
        <?php echo $navbar; ?>
    
    	<div class="wrapper row-offcanvas row-offcanvas-left">
        	<!-- Left side column. contains the logo and sidebar -->
			<aside class="left-side sidebar-offcanvas">
        		<?php echo $sidebar; ?>
            </aside>
            
            <aside class="right-side">
            	<?php echo $breadcrumbs; ?>
                
            	<?php echo $content; ?>
            </aside><!-- /.right-side -->
        </div>
        
        <?php echo $scripts;?>
    </body>
</html>
