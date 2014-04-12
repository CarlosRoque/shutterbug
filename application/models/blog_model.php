<?php
class Blog_model extends Model{
	
	function __construct()
	{
		parent :: Model();
	}
	
	function get_last_ten()
	{
		$query = $this->db->get('blog', 10);
		
		return $query;
	}
	
	function get_blogs()
	{
		$this->db->order_by("id", "desc"); 
		$query = $this->db->get('blog');
		
		return $query;
	}
	
	function get_current($id)
	{
		$query = $this->db->get_where('blog', array('id' => $id));
		
		return $query;
	}
	
	function insert($post)
	{
		$name = $this->session->userdata('user_info');
		$this->name = $name['name']; 
		$this->title = $post['title'];
		$this->post = $post['post'];
		
		$query = $this->db->insert('blog', $this);
		
		return true;
	}
	
	function delete($cid)
	{
		$this->db->delete('blog', array('id' => $cid));
	}
	
}
?>