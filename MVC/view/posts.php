<table border=1, width="60%">
	<thead>
		<tr>
			<th>title</th>
			<th>content</th>
			<th>publish date</th>
			<th>post</th>
		</tr>
	</thead>

	<tbody>
		<?php 

			foreach($posts as $post){
				echo "<tr>";
				echo "<td>$post[title]</td>";
				echo "<td>$post[content]</td>";
				echo "<td>$post[publish_date]</td>";
				echo "<td><a href='/PHP-Neven/MVC/posts/getPost/$post[id]'</a>Post</td>";
				echo "</tr>";
		}
		
		?>

	</tbody>

</table>

		<a href="/PHP-Neven/MVC/users/getUsers">Pokazi gi site korisnici</a>
		<br>
		<a href="/PHP-Neven/MVC/posts/getPosts">Pokazi gi site postovi</a>