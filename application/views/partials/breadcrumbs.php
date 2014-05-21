<div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
    </script>

    <ul class="breadcrumb">
        <?php
        $crumbs = explode("/", $_SERVER['REQUEST_URI']);

        foreach($crumbs as $crumb):?>
        <?php if($crumb && $crumb != 'page'): ?>
        <?php if($crumb == 'amg'): ?>
        <li>
            <i class="icon-home home-icon"></i>
            <a href="#">Home</a>
        </li>
        <?php else: ?>
        <li>
            <a href="#"><?php echo ucwords($crumb); ?></a>
        </li>
        <?php endif; ?>
        <?php endif; ?>
        <?php endforeach; ?>
    </ul><!-- .breadcrumb -->

    <div class="nav-search" id="nav-search">
        <form class="form-search">
            <span class="input-icon">
                <input placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" type="text">
                <i class="fa-search nav-search-icon"></i>
            </span>
        </form>
    </div><!-- #nav-search -->
</div>
