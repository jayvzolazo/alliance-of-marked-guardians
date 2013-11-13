<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?=$header_elements;?>
    <?php echo (isset($styles) || !is_null($styles))? $styles : '';?>
    <title></title>
</head>
<body class="navbar-fixed">
	<div class="navbar navbar-default navbar-fixed-top" id="navbar">
		<script type="text/javascript">
            try{ace.settings.check('navbar' , 'fixed')}catch(e){}
        </script>

        <div class="navbar-container" id="navbar-container">
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <i class="icon-leaf"></i>
                        Ace Admin
                    </small>
                </a><!-- /.brand -->
            </div><!-- /.navbar-header -->

            <div class="navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="grey">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-tasks"></i>
                            <span class="badge badge-grey">4</span>
                        </a>

                        <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="icon-ok"></i>
                                4 Tasks to complete
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Software Update</span>
                                        <span class="pull-right">65%</span>
                                    </div>

                                    <div class="progress progress-mini ">
                                        <div style="width:65%" class="progress-bar "></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Hardware Upgrade</span>
                                        <span class="pull-right">35%</span>
                                    </div>

                                    <div class="progress progress-mini ">
                                        <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Unit Testing</span>
                                        <span class="pull-right">15%</span>
                                    </div>

                                    <div class="progress progress-mini ">
                                        <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Bug Fixes</span>
                                        <span class="pull-right">90%</span>
                                    </div>

                                    <div class="progress progress-mini progress-striped active">
                                        <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    See tasks with details
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="purple">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-bell-alt icon-animated-bell"></i>
                            <span class="badge badge-important">8</span>
                        </a>

                        <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="icon-warning-sign"></i>
                                8 Notifications
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">
                                            <i class="btn btn-xs no-hover btn-pink icon-comment"></i>
                                            New Comments
                                        </span>
                                        <span class="pull-right badge badge-info">+12</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="btn btn-xs btn-primary icon-user"></i>
                                    Bob just signed up as an editor ...
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">
                                            <i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
                                            New Orders
                                        </span>
                                        <span class="pull-right badge badge-success">+8</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">
                                            <i class="btn btn-xs no-hover btn-info icon-twitter"></i>
                                            Followers
                                        </span>
                                        <span class="pull-right badge badge-info">+11</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    See all notifications
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="green">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope icon-animated-vertical"></i>
                            <span class="badge badge-success">5</span>
                        </a>

                        <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="icon-envelope-alt"></i>
                                5 Messages
                            </li>

                            <li>
                                <a href="#">
                                    <img src="Blank%20Page%20-%20Ace%20Admin_files/avatar.png" class="msg-photo" alt="Alex's Avatar">
                                    <span class="msg-body">
                                        <span class="msg-title">
                                            <span class="blue">Alex:</span>
                                            Ciao sociis natoque penatibus et auctor ...
                                        </span>

                                        <span class="msg-time">
                                            <i class="icon-time"></i>
                                            <span>a moment ago</span>
                                        </span>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="Blank%20Page%20-%20Ace%20Admin_files/avatar3.png" class="msg-photo" alt="Susan's Avatar">
                                    <span class="msg-body">
                                        <span class="msg-title">
                                            <span class="blue">Susan:</span>
                                            Vestibulum id ligula porta felis euismod ...
                                        </span>

                                        <span class="msg-time">
                                            <i class="icon-time"></i>
                                            <span>20 minutes ago</span>
                                        </span>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="Blank%20Page%20-%20Ace%20Admin_files/avatar4.png" class="msg-photo" alt="Bob's Avatar">
                                    <span class="msg-body">
                                        <span class="msg-title">
                                            <span class="blue">Bob:</span>
                                            Nullam quis risus eget urna mollis ornare ...
                                        </span>

                                        <span class="msg-time">
                                            <i class="icon-time"></i>
                                            <span>3:15 pm</span>
                                        </span>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="http://192.69.216.111/themes/preview/ace/inbox.html">
                                    See all messages
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="light-blue">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="Blank%20Page%20-%20Ace%20Admin_files/user.jpg" alt="Jason's Photo">
                            <span class="user-info">
                                <small>Welcome,</small>
                                Jason
                            </span>

                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="#">
                                    <i class="icon-cog"></i>
                                    Settings
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icon-user"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="#">
                                    <i class="icon-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul><!-- /.ace-nav -->
            </div><!-- /.navbar-header -->
        </div><!-- /.container -->
    </div>

    <div class="main-container" id="main-container">
        <script type="text/javascript">
            try{ace.settings.check('main-container' , 'fixed')}catch(e){}
        </script>

        <div class="main-container-inner">
            <a class="menu-toggler" id="menu-toggler" href="#">
                <span class="menu-text"></span>
            </a>

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
                    <li>
                        <a href="http://192.69.216.111/themes/preview/ace/index.html">
                            <i class="icon-dashboard"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>

                    <li>
                        <a href="http://192.69.216.111/themes/preview/ace/typography.html">
                            <i class="icon-text-width"></i>
                            <span class="menu-text"> Typography </span>
                        </a>
                    </li>

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

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-list"></i>
                            <span class="menu-text"> Tables </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="http://192.69.216.111/themes/preview/ace/tables.html">
                                    <i class="icon-double-angle-right"></i>
                                    Simple &amp; Dynamic
                                </a>
                            </li>

                            <li>
                                <a href="http://192.69.216.111/themes/preview/ace/jqgrid.html">
                                    <i class="icon-double-angle-right"></i>
                                    jqGrid plugin
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-edit"></i>
                            <span class="menu-text"> Forms </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="http://192.69.216.111/themes/preview/ace/form-elements.html">
                                    <i class="icon-double-angle-right"></i>
                                    Form Elements
                                </a>
                            </li>

                            <li>
                                <a href="http://192.69.216.111/themes/preview/ace/form-wizard.html">
                                    <i class="icon-double-angle-right"></i>
                                    Wizard &amp; Validation
                                </a>
                            </li>

                            <li>
                                <a href="http://192.69.216.111/themes/preview/ace/wysiwyg.html">
                                    <i class="icon-double-angle-right"></i>
                                    Wysiwyg &amp; Markdown
                                </a>
                            </li>

                            <li>
                                <a href="http://192.69.216.111/themes/preview/ace/dropzone.html">
                                    <i class="icon-double-angle-right"></i>
                                    Dropzone File Upload
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="http://192.69.216.111/themes/preview/ace/widgets.html">
                            <i class="icon-list-alt"></i>
                            <span class="menu-text"> Widgets </span>
                        </a>
                    </li>

                    <li>
                        <a href="http://192.69.216.111/themes/preview/ace/calendar.html">
                            <i class="icon-calendar"></i>

                            <span class="menu-text">
                                Calendar
                                <span data-original-title="2&nbsp;Important&nbsp;Events" class="badge badge-transparent tooltip-error" title="">
                                    <i class="icon-warning-sign red bigger-130"></i>
                                </span>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="http://192.69.216.111/themes/preview/ace/gallery.html">
                            <i class="icon-picture"></i>
                            <span class="menu-text"> Gallery </span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-tag"></i>
                            <span class="menu-text"> More Pages </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="http://192.69.216.111/themes/preview/ace/profile.html">
                                    <i class="icon-double-angle-right"></i>
                                    User Profile
                                </a>
                            </li>

                            <li>
                                <a href="http://192.69.216.111/themes/preview/ace/inbox.html">
                                    <i class="icon-double-angle-right"></i>
                                    Inbox
                                </a>
                            </li>

                            <li>
                                <a href="http://192.69.216.111/themes/preview/ace/pricing.html">
                                    <i class="icon-double-angle-right"></i>
                                    Pricing Tables
                                </a>
                            </li>

                            <li>
                                <a href="http://192.69.216.111/themes/preview/ace/invoice.html">
                                    <i class="icon-double-angle-right"></i>
                                    Invoice
                                </a>
                            </li>

                            <li>
                                <a href="http://192.69.216.111/themes/preview/ace/timeline.html">
                                    <i class="icon-double-angle-right"></i>
                                    Timeline
                                </a>
                            </li>

                            <li>
                                <a href="http://192.69.216.111/themes/preview/ace/login.html">
                                    <i class="icon-double-angle-right"></i>
                                    Login &amp; Register
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="active open">
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

                            <li class="active">
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

            <div class="main-content">
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home home-icon"></i>
                            <a href="#">Home</a>
                        </li>

                        <li>
                            <a href="#">Other Pages</a>
                        </li>
                        <li class="active">Blank Page</li>
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

            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="icon-cog bigger-150"></i>
                </div>

                <div class="ace-settings-box" id="ace-settings-box">
                    <div>
                        <div class="pull-left">
                            <select style="display: none;" id="skin-colorpicker" class="hide">
                                <option selected="selected" data-skin="default" value="#438EB9">#438EB9</option>
                                <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                            </select><div class="dropdown dropdown-colorpicker"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="btn-colorpicker" style="background-color:#438EB9"></span></a><ul class="dropdown-menu dropdown-caret"><li><a class="colorpick-btn selected" href="#" style="background-color:#438EB9;" data-color="#438EB9"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#222A2D;" data-color="#222A2D"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#C6487E;" data-color="#C6487E"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#D0D0D0;" data-color="#D0D0D0"></a></li></ul></div>
                        </div>
                        <span>&nbsp; Choose Skin</span>
                    </div>

                    <div>
                        <input class="ace ace-checkbox-2" id="ace-settings-navbar" type="checkbox">
                        <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                    </div>

                    <div>
                        <input class="ace ace-checkbox-2" id="ace-settings-sidebar" type="checkbox">
                        <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                    </div>

                    <div>
                        <input class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" type="checkbox">
                        <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                    </div>

                    <div>
                        <input class="ace ace-checkbox-2" id="ace-settings-rtl" type="checkbox">
                        <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                    </div>

                    <div>
                        <input class="ace ace-checkbox-2" id="ace-settings-add-container" type="checkbox">
                        <label class="lbl" for="ace-settings-add-container">
                            Inside
                            <b>.container</b>
                        </label>
                    </div>
                </div>
            </div><!-- /#ace-settings-container -->
        </div><!-- /.main-container-inner -->

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="icon-double-angle-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->
    <?=$scripts;?>
</body>
</html>
