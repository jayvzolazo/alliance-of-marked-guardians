<div class="sidebar" id="sidebar">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="icon-signal"></i>
            </button>
            <button class="btn btn-info">
                <i class="icon-pencil"></i>
            </button>
            <button class="btn btn-warning">
                <i class="icon-group"></i>
            </button>
            <button class="btn btn-danger">
                <i class="icon-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>
            <span class="btn btn-info"></span>
            <span class="btn btn-warning"></span>
            <span class="btn btn-danger"></span>
        </div>
    </div><!-- #sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li <?php echo ($page == 'dashboard')? 'class="active"' : ''; ?>>
            <a href="<?php echo site_url(); ?>">
                <i class="icon-dashboard"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
        </li>

        <li <?php echo ($page == 'members')? 'class="active"' : ''; ?>>
            <a href="<?php echo site_url('page/members'); ?>">
                <i class="icon-group"></i>
                <span class="menu-text"> Members </span>
            </a>
        </li>

        <li <?php echo ($page == 'chapters')? 'class="active"' : ''; ?>>
            <a href="<?php echo site_url('page/chapters'); ?>">
                <i class="icon-group"></i>
                <span class="menu-text"> Chapters </span>
            </a>
        </li>

        <!--
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-desktop"></i>
                <span class="menu-text"> UI Elements </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="http://192.69.216.111/themes/preview/ace/elements.html">
                        <i class="icon-double-angle-right"></i>
                        Elements
                    </a>
                </li>

                <li>
                    <a href="http://192.69.216.111/themes/preview/ace/buttons.html">
                        <i class="icon-double-angle-right"></i>
                        Buttons &amp; Icons
                    </a>
                </li>

                <li>
                    <a href="http://192.69.216.111/themes/preview/ace/treeview.html">
                        <i class="icon-double-angle-right"></i>
                        Treeview
                    </a>
                </li>

                <li>
                    <a href="http://192.69.216.111/themes/preview/ace/jquery-ui.html">
                        <i class="icon-double-angle-right"></i>
                        jQuery UI
                    </a>
                </li>

                <li>
                    <a href="http://192.69.216.111/themes/preview/ace/nestable-list.html">
                        <i class="icon-double-angle-right"></i>
                        Nestable Lists
                    </a>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-double-angle-right"></i>

                        Three Level Menu
                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="#">
                                <i class="icon-leaf"></i>
                                Item #1
                            </a>
                        </li>

                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-pencil"></i>

                                4th level
                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="#">
                                        <i class="icon-plus"></i>
                                        Add Product
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-eye-open"></i>
                                        View Products
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        -->

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-file-alt"></i>

                <span class="menu-text">
                    Other Pages
                    <span class="badge badge-primary ">5</span>
                </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="http://192.69.216.111/themes/preview/ace/faq.html">
                        <i class="icon-double-angle-right"></i>
                        FAQ
                    </a>
                </li>

                <li>
                    <a href="http://192.69.216.111/themes/preview/ace/error-404.html">
                        <i class="icon-double-angle-right"></i>
                        Error 404
                    </a>
                </li>

                <li>
                    <a href="http://192.69.216.111/themes/preview/ace/error-500.html">
                        <i class="icon-double-angle-right"></i>
                        Error 500
                    </a>
                </li>

                <li>
                    <a href="http://192.69.216.111/themes/preview/ace/grid.html">
                        <i class="icon-double-angle-right"></i>
                        Grid
                    </a>
                </li>

                <li>
                    <a href="http://192.69.216.111/themes/preview/ace/blank.html">
                        <i class="icon-double-angle-right"></i>
                        Blank Page
                    </a>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
    </div>

    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
</div>
