<?php 
class EntityPost extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}
	// propiedades
		public $_ID;
		public $_postAuthor;
		public $_postDate;
		public $_postDateGmt;
		public $_postContent;
		public $_postTitle;
		public $_postExcerpt;
		public $_postStatus;
		public $_commentStatus;
		public $_pingStatus;
		public $_postPassword;
		public $_postName;
		public $_toPing;
		public $_pinged;
		public $_postModified;
		public $_postModifiedGmt;
		public $_postParent;
		public $_guid;

}