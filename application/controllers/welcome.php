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
	 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('orange_RatePlans_model');
		$this->load->helper('MY_array');
	}

	public function index()
	{
		$orig_data = $this->orange_RatePlans_model->get_orange_RatePlans();
		foreach($orig_data as $val){
			$group[$val['pos1']]['pos1'][] = $val['pos1'];
			$group[$val['pos1']]['pos2'][] = $val['pos2'];
			$group[$val['pos1']]['pos3'][] = $val['pos3'];
			$group[$val['pos1']]['pos4'][] = $val['pos4'];
			$group[$val['pos1']]['pos5'][] = $val['pos5'];
			$group[$val['pos1']]['hardware1'][] = $val['hardware1'];
			$group[$val['pos1']]['hardware2'][] = $val['hardware2'];
			$group[$val['pos1']]['hardware3'][] = $val['hardware3'];
			$group[$val['pos1']]['hardware4'][] = $val['hardware4'];
			$group[$val['pos1']]['hardware5'][] = $val['hardware5'];
		}
		
		
		$data['orange_RatePlans'] = $group;
		$data['title'] = 'News archive';

		$this->load->view('orange_RatePlans/index', $data);
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */