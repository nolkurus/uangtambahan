<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
		$this->mTitle = 'Master Tabel - ';
	}

	public function agama()
	{
		$crud = $this->generate_crud('tb_agamas');
		$crud->columns('kode','agama');
		
		// disable direct create / delete Admin User
		if ($this->ion_auth->in_group(array('webmaster')))
		{
		}
		else {
		$crud->unset_add();
		$crud->unset_delete();
		}

		$this->mTitle.= 'Agama';
		$this->render_crud();
	}
	public function pendidikan()
	{
		$crud = $this->generate_crud('tb_pendidikans');
		$crud->columns('kode','pendidikan');
		
		// disable direct create / delete Admin User
		if ($this->ion_auth->in_group(array('webmaster')))
		{
		}
		else {
		$crud->unset_add();
		$crud->unset_delete();
		}

		$this->mTitle.= 'Pendidikan';
		$this->render_crud();
	}
	public function pekerjaan()
	{
		$crud = $this->generate_crud('tb_pekerjaans');
		$crud->columns('kode','pekerjaan');
		
		// disable direct create / delete Admin User
		if ($this->ion_auth->in_group(array('webmaster')))
		{
		}
		else {
		$crud->unset_add();
		$crud->unset_delete();
		}

		$this->mTitle.= 'Pekerjaan';
		$this->render_crud();
	}
	public function shdk()
	{
		$crud = $this->generate_crud('tb_shdks');
		$crud->columns('kode','status');
		
		// disable direct create / delete Admin User
		if ($this->ion_auth->in_group(array('webmaster')))
		{
		}
		else {
		$crud->unset_add();
		$crud->unset_delete();
		}

		$this->mTitle.= 'SHDK';
		$this->render_crud();
	}
	public function gelar()
	{
		$crud = $this->generate_crud('tb_gelars');
		$crud->columns('kode','gelar');
		
		// disable direct create / delete Admin User
		if ($this->ion_auth->in_group(array('webmaster')))
		{
		}
		else {
		$crud->unset_add();
		$crud->unset_delete();
		}

		$this->mTitle.= 'Gelar';
		$this->render_crud();
	}
	public function golongan_darah()
	{
		$crud = $this->generate_crud('tb_gol_darahs');
		$crud->columns('kode','gol_darah');
		
		// disable direct create / delete Admin User
		if ($this->ion_auth->in_group(array('webmaster')))
		{
		}
		else {
		$crud->unset_add();
		$crud->unset_delete();
		}

		$this->mTitle.= 'Golongan Darah';
		$this->render_crud();
	}
	public function status_perkawinan()
	{
		$crud = $this->generate_crud('tb_status_perkawinans');
		$crud->columns('kode','status');
		
		// disable direct create / delete Admin User
		if ($this->ion_auth->in_group(array('webmaster')))
		{
		}
		else {
		$crud->unset_add();
		$crud->unset_delete();
		}

		$this->mTitle.= 'Status Perkawinan';
		$this->render_crud();
	}
	public function jenis_cacat()
	{
		$crud = $this->generate_crud('tb_cacats');
		$crud->columns('kode','cacat');
		
		// disable direct create / delete Admin User
		if ($this->ion_auth->in_group(array('webmaster')))
		{
		}
		else {
		$crud->unset_add();
		$crud->unset_delete();
		}

		$this->mTitle.= 'Jenis Cacat';
		$this->render_crud();
	}
	public function jenis_kemasyarakatan()
	{
		$crud = $this->generate_crud('tb_jenis_kemasyarakatans');
		$crud->columns('kode','status');
		
		// disable direct create / delete Admin User
		if ($this->ion_auth->in_group(array('webmaster')))
		{
		}
		else {
		$crud->unset_add();
		$crud->unset_delete();
		}

		$this->mTitle.= 'Status Kemasyarakatan';
		$this->render_crud();
	}
}
