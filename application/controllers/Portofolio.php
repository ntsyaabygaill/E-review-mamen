<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function novel_1()
	{
		$this->load->view('common/header');
		$this->load->view('common/content_portofolio1');
		$this->load->view('common/footer');
	}

	public function journal_1()
	{
		$this->load->view('common/header');
		$this->load->view('common/content_portofolio2');
		$this->load->view('common/footer');
	}
	
	public function magazine_1()
	{
		$this->load->view('common/header');
		$this->load->view('common/content_portofolio3');
		$this->load->view('common/footer');
	}

	public function book_1()
	{
		$this->load->view('common/header');
		$this->load->view('common/content_portofolio4');
		$this->load->view('common/footer');
	}

	public function novel_2()
	{
		$this->load->view('common/header');
		$this->load->view('common/content_portofolio5');
		$this->load->view('common/footer');
	}

	public function magazine_2()
	{
		$this->load->view('common/header');
		$this->load->view('common/content_portofolio6');
		$this->load->view('common/footer');
	}
}
