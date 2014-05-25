<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="glyphicon glyphicon-user"></i>
        <span><?php echo $user->name; ?> <i class="caret"></i></span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header bg-light-blue">
            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
            <p>
                <?php echo $user->name; ?>
                <small>Member since <?php echo date('M Y', strtotime($user->creation_date)); ?></small>
            </p>
        </li>
        <!-- Menu Body -->
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
                <button class="btn btn-default btn-flat signout">Sign out</button>
            </div>
        </li>
    </ul>
</li>
<script type="text/javascript">
$(function(){
	$('.signout').click(function(){
		window.location = site_url + 'logout';
	});
});
</script>