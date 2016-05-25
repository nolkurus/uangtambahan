<div class="row">
	<div class="col-md-4">
		<?php echo modules::run('adminlte/widget/box_open', 'Shortcuts'); ?>
			<?php echo modules::run('adminlte/widget/app_btn', 'fa fa-user', 'Account', 'panel/account'); ?>
			<?php echo modules::run('adminlte/widget/app_btn', 'fa fa-sign-out', 'Logout', 'panel/logout'); ?>
		<?php echo modules::run('adminlte/widget/box_close'); ?>
	</div>
	
	<div class="col-md-4">
		<?php echo modules::run('adminlte/widget/info_box', 'yellow', $count['users'], 'Users', 'fa fa-user', 'user'); ?>
	</div>
	<div class="col-md-4">
		<?php echo modules::run('adminlte/widget/info_box', 'green', $count['group'], 'User Group', 'fa fa-users', 'user'); ?>
	</div>
	<div class="col-md-4">
		<?php echo modules::run('adminlte/widget/info_box', 'blue', $count['admin'], 'Admin User', 'fa fa-cog', 'panel/admin_user'); ?>
	</div>
	<div class="col-md-4">
		<?php echo modules::run('adminlte/widget/info_box', 'purple', $count['pnddk'], 'Data Penduduk', 'fa fa-users', 'penduduk/penduduk'); ?>
	</div>
	<div class="col-md-4">
		<?php echo modules::run('adminlte/widget/info_box', 'black', $count['photo'], 'Photo', 'fa fa-users', 'demo/cover_photo'); ?>
	</div>
	<div class="col-md-4">
		<?php echo modules::run('adminlte/widget/info_box', 'red', $count['lahir'], 'Kelahiran', 'fa fa-users', 'penduduk/kelahiran'); ?>
	</div>
		
</div>
