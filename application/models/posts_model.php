<?php 

class Posts_model extends Model {
	
	function getAll(){
	
		$query = $this->db->get('posts');
		
		if($query->num_rows() > 0 )
		{
			foreach ($query->result() as $row)
			{
				$data[] = $row;
			}
			
			return $data;
		}
		
	}
	
	function getPost(){
		
		$post = $this->uri->segment(2);
				
		$query = $this->db->get_where('posts', array('id' => $post));
		
		if($query->num_rows() > 0 )
		{
			foreach ($query->result() as $row)
			{
				$data[] = $row;
			}
			
			return $data;
		}
	
	}
}