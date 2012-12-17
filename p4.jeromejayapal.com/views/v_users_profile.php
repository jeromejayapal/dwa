<h1>This is the profile of <?=$user->first_name?></h1>

<? foreach($posts as $post): ?>
	
	
	<h2>User's Posts
	<?=$post['first_name']?> <?=$post['last_name']?> posted:</h2>
	<?=$post['content']?>
	
	<br><br>
	
<? endforeach; ?>