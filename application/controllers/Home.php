<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index()
	{
		$this->load->template('home');
	}
	
	public function forserviceprovider()
	{
		$this->load->template('forserviceprovider');
	}

	public function aboutus()
	{
		$this->load->template('aboutus');
	}

	public function how_it_works()
	{
		$this->load->template('how_it_works');
	}

	public function faq()
	{
		$this->load->template('faq');
	}

	public function admin()
	{
		$this->load->template('admin');
	}

	public function customer_support()
	{
		$this->load->template('customer_support');
	}
}
