<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {

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
	 * map to /Home_modelphp/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

	public function index()
	{
        $this->load->view('index');
    }

    public function getImage()
    {
        $data = $this->home_model->get_data();
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
}
