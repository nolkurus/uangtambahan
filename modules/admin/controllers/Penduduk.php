<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
		$this->mTitle = 'Data WNI - ';
	}

	public function penduduk()
	{
		$crud = $this->generate_crud('tb_penduduks');
		$crud->columns('nik', 'nama','wni','tempat_lahir');
		
		// disable direct create / delete Admin User
		if ($this->ion_auth->in_group(array('webmaster')))
		{
		}
		else {
		$crud->unset_add();
		$crud->unset_delete();
		}

		$this->mTitle.= 'Penduduk';
		$this->render_crud();
	}
	
	public function kelahiran()
	{
		$crud = $this->generate_crud('tb_kelahirans');
		$crud->columns('tanggal_input', 'nama','nik','tanggal_lahir');

		// disable direct create / delete Admin User
		if ($this->ion_auth->in_group(array('webmaster')))
		{
		}
		else {
		$crud->unset_add();
		$crud->unset_delete();
		}

		$this->mTitle.= 'Kelahiran';
		$this->render_crud();
	}
	public function kematian()
	{
		$crud = $this->generate_crud('tb_kematians');
		$crud->columns('tanggal_input', 'tanggal_kematian','tempat_kematian','nama','nik');

		// disable direct create / delete Admin User
		if ($this->ion_auth->in_group(array('webmaster')))
		{
		}
		else {
		$crud->unset_add();
		$crud->unset_delete();
		}

		$this->mTitle.= 'Kematian';
		$this->render_crud();
	}
}
