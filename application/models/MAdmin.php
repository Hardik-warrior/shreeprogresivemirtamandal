<?php 

	/// this is the model for the admin facility...
	class MAdmin extends CI_Model
	{

		/// this is the function get admin's details from the database...
		public function login($AdminName, $AdminPassword){

			$where['AdminName'] = $AdminName;
			$where['AdminPassword'] = $AdminPassword;

			$data = $this->db->where($where)->get('admindetails')->result_array();
			return $data;
		}
	}




?>
