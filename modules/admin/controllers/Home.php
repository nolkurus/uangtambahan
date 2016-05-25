<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {

	public function index()
	{
		$this->load->model('user_model', 'users');
		$this->load->model('admin_user_model', 'admin');
		$this->load->model('group_model', 'group');
		$this->load->model('Demo_cover_photo_model', 'photo');
		$this->load->model('Tb_penduduk_model', 'pnddk');
		$this->load->model('Tb_kelahiran_model', 'lahir');
		$this->mViewData['count'] = array(
			'users' => $this->users->count_all(),
			'admin' => $this->admin->count_all(),
			'group' => $this->group->count_all(),
			'photo' => $this->photo->count_all(),
			'pnddk' => $this->pnddk->count_all(),
			'lahir' => $this->lahir->count_all(),
		);	
		
		$this->render('home');
	}
}
