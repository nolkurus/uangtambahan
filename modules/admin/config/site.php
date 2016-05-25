<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Site (by CI Bootstrap 3)
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views when calling 
| MY_Controller's render() function. 
|
| Each of them can be overrided from child controllers.
|
*/

$config['site'] = array(

	// Site name
	'name' => 'Admin Panel',

	// Default page title
	// (set empty then MY_Controller will automatically generate one based on controller / action)
	'title' => 'Ejambi Admin',

	// Default meta data (name => content)
	'meta'	=> array(
		'author'		=> 'Michael Chan (https://github.com/waifung0207)',
		'description'	=> 'CI Bootstrap 3 Admin Panel'
	),

	// Default scripts to embed at page head / end
	'scripts' => array(
		'head'	=> array(
			'assets/dist/adminlte.min.js',
			'assets/dist/admin.min.js'
		),
		'foot'	=> array(
		),
	),

	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			'assets/dist/adminlte.min.css',
			'assets/dist/admin.min.css'
		)
	),

	// Multilingual settings (set empty array to disable this)
	'multilingual' => array(),

	// AdminLTE settings
	'adminlte' => array(
		'webmaster'	=> array('skin' => 'skin-red'),
		'admin'		=> array('skin' => 'skin-purple'),
		'manager'	=> array('skin' => 'skin-black'),
		'staff'		=> array('skin' => 'skin-blue'),
		'boss'		=> array('skin' => 'skin-green')
	),

	// Menu items which support icon fonts, e.g. Font Awesome
	// (or directly update view file: /application/modules/admin/views/_partials/sidemenu.php)
	'menu' => array(
		'home' => array(
			'name'		=> 'Home',
			'url'		=> '',
			'icon'		=> 'fa fa-home',
		),
		'user' => array(
			'name'		=> 'Users',
			'url'		=> 'user',
			'icon'		=> 'fa fa-user',
			'children'  => array(
				'List'			=> 'user',
				'Create'		=> 'user/create',
				'User Groups'	=> 'user/group',
			)
		),
		'panel' => array(
			'name'		=> 'Admin Panel',
			'url'		=> 'panel',
			'icon'		=> 'fa fa-lock',
			'children'  => array(
				'Admin Users'			=> 'panel/admin_user',
				'Create Admin User'		=> 'panel/admin_user_create',
				'Admin User Groups'		=> 'panel/admin_user_group',
			)
		),
		'penduduk' => array(
			'name'		=> 'Data WNI',
			'url'		=> 'penduduk',
			'icon'		=> 'fa fa-users',
			'children'  => array(
				'Penduduk'			=> 'penduduk/penduduk',
				'Kelahiran'			=> 'penduduk/kelahiran',
				'Kematian'			=> 'penduduk/kematian',
				'Surat-Surat'		=> 'penduduk/surat_surat',
			)
		),
		'mutasi' => array(
			'name'		=> 'Mutasi',
			'url'		=> 'mutasi',
			'icon'		=> 'fa fa-bullhorn',
			'children'  => array(
				'Masuk'					=> 'mutasi/masuk',
				'Keluar'				=> 'mutasi/keluar',
				'Pindah RT'				=> 'master/pindah_rt',
			)
		),
		'master' => array(
			'name'		=> 'Master Tabel',
			'url'		=> 'master',
			'icon'		=> 'fa fa-table',
			'children'  => array(
				'Agama'					=> 'master/agama',
				'Pendidikan'			=> 'master/pendidikan',
				'Pekerjaan'				=> 'master/pekerjaan',
				'SHDK'					=> 'master/shdk',
				'Gelar'					=> 'master/gelar',
				'Golongan Darah'		=> 'master/golongan_darah',
				'Status Perkawinan'		=> 'master/status_perkawinan',
				'Jenis Cacat'			=> 'master/jenis_cacat',
				'Status Kemasyarakatan'	=> 'master/jenis_kemasyarakatan',
			)
		),
		'database' => array(
			'name'		=> 'Database',
			'url'		=> 'database',
			'icon'		=> 'fa fa-cloud',
			'children'  => array(
				'Backup'	=> 'database/backup',
				'Restore'	=> 'database/restore',
			)
		),
		'setting' => array(
			'name'		=> 'Setting',
			'url'		=> 'setting',
			'icon'		=> 'fa fa-gear',
			'children'  => array(
				'Data Referensi'	=> 'setting/data_referensi',
			)
		),
		'demo' => array(
			'name'		=> 'Demo',
			'url'		=> 'demo',
			'icon'		=> 'ion ion-load-b',	// use Ionicons (instead of FontAwesome)
			'children'  => array(
				'AdminLTE'			=> 'demo/adminlte',
				'Blog Posts'		=> 'demo/blog_post',
				'Blog Categories'	=> 'demo/blog_category',
				'Blog Tags'			=> 'demo/blog_tag',
				'Cover Photos'		=> 'demo/cover_photo',
				'Pagination'		=> 'demo/pagination',
				'Sortable'			=> 'demo/sortable',
				'Item 1'			=> 'demo/item/1',
				'Item 2'			=> 'demo/item/2',
			)
		),
		'logout' => array(
			'name'		=> 'Sign Out',
			'url'		=> 'panel/logout',
			'icon'		=> 'fa fa-sign-out',
		)
	),

	// default page when redirect non-logged-in user
	'login_url' => 'admin/login',

	// restricted pages to specific groups of users, which will affect sidemenu item as well
	// pages out of this array will have no restriction (except required admin user login)
	'page_auth' => array(
		'user/create'				=> array('webmaster', 'admin', 'manager'),
		'user/group'				=> array('webmaster', 'admin', 'manager'),
		'penduduk'					=> array('webmaster', 'admin'),
		'penduduk/penduduk'			=> array('webmaster', 'admin'),
		'penduduk/kelahiran'		=> array('webmaster', 'admin'),
		'penduduk/kematian'			=> array('webmaster', 'admin'),
		'penduduk/mutasi_masuk'		=> array('webmaster', 'admin'),
		'penduduk/mutasi_keluar'	=> array('webmaster', 'admin'),
		'penduduk/pindah_rt'		=> array('webmaster', 'admin'),
		'penduduk/surat_surat'		=> array('webmaster', 'admin'),
		'penduduk/data_penduduk'	=> array('webmaster', 'admin'),
		'penduduk/attribute'		=> array('webmaster', 'admin'),
		'penduduk/grafik_statistik'	=> array('webmaster', 'admin'),
		'penduduk/data_referensi'	=> array('webmaster', 'admin'),
		'penduduk/master_tabel'		=> array('webmaster', 'admin'),
		'penduduk/backup'			=> array('webmaster', 'admin'),
		'panel'						=> array('webmaster'),
		'panel/admin_user'			=> array('webmaster'),
		'panel/admin_user_create'	=> array('webmaster'),
		'panel/admin_user_group'	=> array('webmaster'),
	),

	// Useful links to display at bottom of sidemenu (e.g. to pages outside Admin Panel)
	'useful_links' => array(
		array(
			'auth'		=> array('webmaster', 'admin', 'manager', 'staff'),
			'name'		=> 'Frontend Website',
			'url'		=> '',
			'target'	=> '_blank',
			'color'		=> 'text-aqua'
		),
	),

	// For debug purpose (available only when ENVIRONMENT = 'development')
	'debug' => array(
		'view_data'		=> FALSE,	// whether to display MY_Controller's mViewData at page end
		'profiler'		=> FALSE,	// whether to display CodeIgniter's profiler at page end
	),
);