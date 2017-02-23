<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function main()
	{
		$this->load->view('main');
	}
	
	public function test()
	{
		$this->load->view('test');
	}
}
