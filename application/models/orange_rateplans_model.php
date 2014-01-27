<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orange_rateplans_model extends CI_Model {

	/**
	 * Model for orange_rateplans table
	 */
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_orange_RatePlans()
	{
		$query = $this->db->order_by('pos1','ASC');
		$query = $this->db->order_by('pos3','ASC');
		$query = $this->db->order_by('pos4','ASC');
		$query = $this->db->order_by('pos5','DESC');
		$query = $this->db->get('orange_RatePlans');
		return $query->result_array();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */