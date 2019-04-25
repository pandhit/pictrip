<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Masters extends CI_Model {
	
	public function category($where=array())
    {
        $this->db->select('id,name');
        if(!empty($where))
        {
            $this->db->where($where);
        }
        $result = $this->db->get('category');
        return $result->result_array();;
    }
	
}
