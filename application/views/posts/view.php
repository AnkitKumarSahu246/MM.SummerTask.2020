<div>
	<?php
		echo '<h2>'.$posts_item['title'].'</h2>';
		echo 'Created At: ' .'<p>'.$posts_item['created_at'].'</p>';
		echo "<br>";
	?>
		<img class = 'thumbnail' src="<?php echo $posts_item['post_image']; ?>" height = '720' width = '1099'>
	<?php
		echo $posts_item['body'];
	?>
	<?php
		if($posts_item['post_image1'] !== 'noimage.jpeg'){
	?>
			<img class = 'thumbnail' src="<?php echo $posts_item['post_image1']; ?>" height = '720' width = '1099'>
	<?php
		}
	?>	
	
	<?php
		echo $posts_item['body1'];
	?>
</div>
