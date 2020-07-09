<?php foreach ($posts as $posts_item): ?>
<div style = "margin-left: 10px;" class = 'container'>
    <div class="card" style = "background-color: white;margin-top : 10px;margin-bottom: 10px;margin-right: 50px;">
        <br>
        <h4 style = "margin-left: 60px"><?php echo $posts_item['title']; ?></h4>
        <div class="container-fluid">
		    <div class = 'col-lg-12'>
				<br>
    			<div class = 'col-lg-3' style="margin-top: 5px">
    				<div class = 'col-lg-12'>
    				   <img class = 'thumbnail' src="<?php echo $posts_item['post_image']; ?>" height = '150' width = '250'>
    				</div>
    			</div>
    			<div class = 'col-lg-9' style="margin-top: 10px">
    				<div class = 'col-lg-12'>
            		   <p><?php echo word_limiter($posts_item['body'],60); ?></p>
            		   <p  style="padding-top: 8px" class = 'pick'><a class = 'btn btn-primary' href="<?php echo site_url('posts/'.$posts_item['slug']); ?>">View article</a></p> 
    				</div>
    			</div>
		    </div>
        </div>    
    </div>
</div>
<?php endforeach; ?>    


<!-- date("Y-m-d",strtotime("-7 days")) -->

  
