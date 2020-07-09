<div>
	<?php
		echo '<h2 class = "looks">'.$posts_item['title'].'</h2>';
		echo '<p class = "looks">Created At: </p>' .'<p class = "looks">'.$posts_item['created_at'].'</p>';
		echo "<br>";
	?>
		<img class = 'thumbnail' src="<?php echo $posts_item['post_image']; ?>" height = '720' width = '1099'>
	<?php
		echo '<p class = "looks">'.$posts_item['body'].'</p>';
	?>
	<?php
		if($posts_item['post_image1'] !== 'noimage.jpeg'){
	?>
		<img class = 'thumbnail' src="<?php echo $posts_item['post_image1']; ?>" height = '720' width = '1099'>
	<?php
		}
	?>	
	
	<?php
		echo '<p class = "looks">'.$posts_item['body1'].'</p>';
	?>
</div>
