<?php
class Comments extends Model{
	function Comments()
	{
		parent::Model();
	}
	
	/*
	 * Function Name: get_comments()
	 * 
	 * This retrieves all the comments from the comments table.
	 */
	
	function get_comments($cid){
		$query = $this->db->get_where('comments', array('blog_id' => $cid));
		
		return $query;
	}
	
	/*
	 * Function Name: get_queue()
	 * 
	 * This retrieves the queued comments from the comments table.
	 */
	
	function get_queue(){
		$query = $this->db->get_where('comments', array('queue' => 0));
		
		return $query;
	}
	
	/*
	 * Function Name: get_approved()
	 * 
	 * This retrieves the approved comments from the comments table.
	 */
	
	function get_approved($cid){
		$query = $this->db->get_where('comments', array('blog_id' => $cid, 'queue' => 1));
		
		return $query;
	}
	
	/*
	 * Function Name: delete()
	 * 
	 * Deletes the comment from the database.
	 */
	
	function delete($cid){
		$this->db->delete('comments', array('id' => $cid));
	}
	
	/*
	 * Function Name: approve()
	 * 
	 * Updates Queue Value to 1 and approves the comment.
	 */
	
	function approve($cid){
		$this->db->where('id', $cid);
		$this->db->update('comments', array('queue' => 1));
	}
	
	/*
	 * Function Name: insert_comments($data)
	 * 
	 * This inserts the data/comments into the table.
	 */
	
	function comment_add($post){
		$username = $post['username'];
		$blog_id = $post['blog_id'];
		$comment = $post['comments'];
		
		if($post['type'] == ""){
			$type = "";
		}
		else{
			$type = $post['type'];
		}
		
		if($username == ""){
			$username = "Anonymous";
		}
		
		$data = array(
					'blog_id' => $blog_id,
					'username' => $username,
					'comment' => $comment,
					'type' => $type
		);
		
		// checks the user level to see if comment needs approving.
		$level = $this->session->userdata('user_info');
		if($level['type']){
			if($level['type'] <= 5){
				$data = array(
					'blog_id' => $blog_id,
					'username' => $username,
					'comment' => $comment,
					'type' => $type,
					'queue' => 1
				);
			}
		}
		
		$this->db->insert('comments', $data);
	}
	
	function comment_number($cid)
	{
		$query = $this->db->get_where('comments', array('blog_id' => $cid));
		$number = $query->num_rows;
		
		return $number;
	}
}
?>