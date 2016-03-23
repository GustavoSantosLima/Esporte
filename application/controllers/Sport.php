<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sport extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->info = array();
	}

	public function index(){
		$this->info['title'] = 'Blog de Futebol';
		$this->load->view('index', $this->info);
	}
}
