<?php 

class Model_records extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getRecordsData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM records WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM records ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function countTotalRecords()
	{
		$sql = "SELECT * FROM records";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}
}