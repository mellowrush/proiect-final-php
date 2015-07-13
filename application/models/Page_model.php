<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends CI_Model {

	private $table = 'tbl_cms';

	function __construct()
	{
		parent::__construct();
	}

	function SaveForm($form_data)
	{
		$this->db->insert($this->table, $form_data);
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		return FALSE;
	}

	function EditForm($form_data, $id) {
		$this->db->where('id',$id);
		$this->db->update($this->table, $form_data);
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		return FALSE;
	}


	function getAllPages() {
		$this->db->select('*');
		$query = $this->db->get($this->table);

		if($query->num_rows()>0) {
			return $query->result_array();
		}
		else {
			return FALSE;
		}

	}

	function getPageByID($id) {
		$this->db->select('*');
		$this->db->where('id', $id);
		$query = $this->db->get($this->table);

		if($query->num_rows()>0) {
			return $query->result_array();
		}
		else {
			return FALSE;
		}
	}

	function getPageByLabel($label) {
		$this->db->select('*');
		$this->db->where('label', strtolower($label));
		$query = $this->db->get($this->table);

		if($query->num_rows()>0) {
			return $query->result();
		}
		else {
			return FALSE;
		}
	}

	function deletePageByID($id) {
		$this->db->where('id', $id);
		$this->db->delete($this->table); 
	}


}

/* End of file Project.php */
/* Location: ./application/models/Project.php */