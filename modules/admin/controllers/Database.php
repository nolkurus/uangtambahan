<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
		$this->mTitle = 'Database - ';
	}

	public function backup($fileName='db_backup.sql')
	{
		// Load the DB utility class
    	$this->load->dbutil();

    	// Backup your entire database and assign it to a variable
    	$backup =& $this->dbutil->backup();

    	// Load the file helper and write the file to your server
   		$this->load->helper('file');
    	write_file(FCPATH.'/downloads/'.$fileName, $backup);

   		// Load the download helper and send the file to your desktop
   	 	$this->load->helper('download');
   		force_download($fileName, $backup);
	}

}
