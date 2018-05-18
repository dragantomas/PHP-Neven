<?php 

class posts {

	function getPosts(){
		
		$postsModel = new postsModel();
		$posts = $postsModel->getAllPosts();

		include "view/posts.php";

	}

	function getPost($post_id){

		$postsModel = new postsModel();
		$posts = $postsModel->getPost($post_id);

		include "view/posts.php";

	}

}

 ?>