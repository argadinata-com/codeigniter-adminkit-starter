<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminkit extends CI_Controller {

	public function index()
	{
		$page = $this->uri->segment(2) ?: 'index';
		
		$this->load->view('adminkit/index_tpl', array (
			'content' => 'adminkit_'.str_replace('-', '_', $page)
		));
	}
	
	public function pages_sign_in()
	{
		$this->load->view('adminkit/sign_in_tpl');
	}
	
	public function pages_sign_up()
	{
		$this->load->view('adminkit/sign_up_tpl');
	}
}
