<table border=1, width="30%">
	<thead>
		<tr>
			<th>Name</th>
			<th>Lastname</th>
			<th>email</th>
			<th>Navigation</th>
		</tr>
	</thead>

	<tbody>
		<?php 

			foreach($users as $user){
				echo "<tr>";
				echo "<td>$user[firstname]</td>";
				echo "<td>$user[lastname]</td>";
				echo "<td>$user[email]</td>";
				echo "<td><a href='/PHP-Neven/MVC/users/getUser/$user[id]'</a>User</td>";
				echo "</tr>";
		}
		
		?>

	</tbody>

</table>

		<a href="/PHP-Neven/MVC/users/getUsers">Pokazi gi site</a>
		<br>
		<a href="/PHP-Neven/MVC/posts/getPosts">Pokazi gi site postovi</a>