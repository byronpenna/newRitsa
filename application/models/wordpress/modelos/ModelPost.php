<?php 

class ModelPost extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("wordpress/entidades/EntityPost");
	}
	public function llenarEntityPost($row){
		$post = new EntityPost();
		$post->_ID 				= $row->ID;
		$post->_postAuthor 		= $row->post_author;
		$post->_postDate 		= $row->post_date;
		$post->_postDateGmt 	= $row->post_date_gmt;
		$post->_postContent 	= $row->post_content;
		$post->_postTitle		= $row->post_title;
		$post->_postExcerpt 	= $row->post_excerpt;
		$post->_postStatus		= $row->post_status;
		$post->_commentStatus 	= $row->comment_status;
		$post->_pingStatus 		= $row->ping_status;
		$post->_postPassword 	= $row->post_password;
		$post->_postName 		= $row->post_name;
		$post->_toPing			= $row->to_ping;
		$post->_pinged 			= $row->pinged;
		$post->_postModified 	= $row->post_modified;
		$post->_postModifiedGmt	= $row->post_modified_gmt;
		$post->_postParent		= $row->post_parent;
		$post->_guid			= $row->guid;
		return $post;
	}
	public function get($title,$date){
		$sql = "SELECT * 
				FROM `wp_posts` 
				WHERE post_date 
				like '".$date."%' and post_name = '".$title."'";
		$query = $this->db->query($sql);
		$row = $query->row();
		$post = $this->llenarEntityPost($row);
		return $post;
	}
}