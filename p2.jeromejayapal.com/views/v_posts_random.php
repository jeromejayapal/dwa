
	
<? foreach ($random as $single): ?>	


	<h2>
	<?=$random['first_name']?> <?=$random['last_name']?> posted:</h2>
	<?=$random['content']?>
	
<? endforeach; ?>