<div class = 'col-lg-5' ></div>
<div class = 'col-lg-4'>
    <div class = 'container'>
    <ul class="nav navbar-nav">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filter <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <table>
            <tr>
            <td  class = 'col-lg-6'>
                <div>
                    <label for="tech">Technology</label>
                    <input type="radio" id="tech" name="name1" value="Technology">
                </div>
                <div>
                    <label for="bus">Business</label>
                    <input type="radio" id="bus" name="name2" value="Business">
                </div>
                <div>
                    <label for="life">Lifestyle</label>
                    <input type="radio" id="life" name="name3" value="Lifestyle">
                </div>
                <div>
                    <label for="sport">Sports</label>
                    <input type="radio" id="sport" name="name4" value="Sports">
                </div>
                <div>
                    <label for="def">Defence</label>
                    <input type="radio" id="def" name="name5" value="Defence">
                </div>
                <div>
                    <label for="world">World</label>
                    <input type="radio" id="world" name="name6" value="World">
                </div>
            </td>
            <td  class = 'col-lg-6'>
                <div>
                    <label for="en">Entertainment</label>
                    <input type="radio" id="en" name="name7" value="Entertainment">
                </div>
                <div>
                    <label for="all">All</label>
                    <input type="radio" id="all" name="name8" value="All" checked>
                </div>
                <div>
                    <label for="cv">Coronavirus</label>
                    <input type="radio" id="cv" name="name9" value="Coronavirus">
                </div>
                <div>
                    <label for="eco">Economy</label>
                    <input type="radio" id="eco" name="name10" value="Economy">
                </div>
                <div>
                    <label for="pol">Politics</label>
                    <input type="radio" id="pol" name="name11" value="Politics">
                </div>
                <div>
                    <label for="in">India</label>
                    <input type="radio" id="in" name="name12" value="India">
                </div>
            </td>
            </tr>
            <hr>
        </table>
      </ul>
    </li>
    </ul>
    </div>
</div>
<div class = 'col-lg-3'></div>

<div  class = 'container'>	
	<?php foreach ($posts as $posts_item): ?>
		<div class = 'col-lg-12'>
				<br>
    			<div class = 'col-lg-3' style="margin-top: 5px">
    					<div class = 'col-lg-12'>
    					<img class = 'thumbnail' src="<?php echo $posts_item['post_image']; ?>" height = '150' width = '250'>
    				</div>
    			</div>
    			<div class = 'col-lg-9' style="margin-top: 10px">
    				<div class = 'col-lg-12'>
    					<h4><?php echo $posts_item['title']; ?></h4>
            			<p><?php echo word_limiter($posts_item['body'],35); ?></p>
            			<p  style="padding-top: 8px" class = 'pick'><a class = 'btn btn-primary' href="<?php echo site_url('posts/'.$posts_item['slug']); ?>">View article</a></p> 
    				</div>
    			</div>
		</div>
	<?php endforeach; ?>	
</div>

<!-- </p><?php ;?></p> -->
<!-- echo $posts_item['body'] -->