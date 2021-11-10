<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slide_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getDataDb()
	{
		$this->db->where('attrName','slides' );
		$this->db->select('*');
		$data =	$this->db->get('slide');
		$data =$data->result_array();
		
		foreach($data as $value){
			$dl =$value['data'];
		}
		return $dl;
	}
	public function updateData($data)
	{
		$this->db->where('attrName', 'slides');
		$data = array('attrName' =>'slides' ,
						'data'=>$data );
		return	$this->db->update('slide', $data);

	}
	public function deleteData_once($id)
	{
		$this->db->where('attrName', 'slides');
		

		$this->db->delete('slide');
	}

}

/* End of file slide_model.php */
/* Location: ./application/models/slide_model.php */