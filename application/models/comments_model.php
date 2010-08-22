<?php 

class Comments_Model extends Model {
	
	function getComments(){
	
		$post_id = $this->uri->segment(2);
				
		$query = $this->db->get_where('comments', array('post_id' => $post_id));
		
		if($query->num_rows() > 0 )
		{
			foreach ($query->result() as $row)
			{
				$data[] = $row;
			}
			
			return $data;
		}
		
	}
	
	function new_comment($data)
	{
		$this->db->insert('comments', $data);
		return;
	}
}