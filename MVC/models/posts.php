<?php 

require_once 'controllers/general.php';

class postsModel extends General{

	function getAllPosts(){

		$sql = "SELECT * FROM posts";
		$query = $this->db->query($sql);
		$posts = $query->fetchAll(PDO::FETCH_ASSOC);

		return $posts;
		// print_r($posts);

	}

	function getPost($post_id){
		$sql = "SELECT * FROM posts WHERE id=$post_id";
		$query = $this->db->query($sql);
		$posts = $query->fetchAll(PDO::FETCH_ASSOC);

		return $posts;
	}
	
}

?>