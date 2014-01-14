<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['main'] = "home";
		$this->load->vars($data);
		$this->load->view('template');
	}
	public function detail()
	{
		$data['navi'] = "Yangon Division";
		$data['main'] = "home_detail";
		$this->load->vars($data);
		$this->load->view('template');
	}
	public function abtmm()
	{
		$data['navi'] = "About Myanmar";
		$data['main'] = "about_mm";
		$this->load->vars($data);
		$this->load->view('template');
	}
	public function abtus()
	{
		$data['navi'] = "Greeting";
		$data['subnavi'] = "About Us";
		$data['main'] = "about_us";
		$this->load->vars($data);
		$this->load->view('template');
	}
	public function guide()
	{
		$data['navi'] = "Greeting";
		$data['subnavi'] = "Tour Guides";
		$data['main'] = "guide";
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */