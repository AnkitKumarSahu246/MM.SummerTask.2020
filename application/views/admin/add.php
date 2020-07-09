<div class="pick looks" style="margin-top: 200px;"><h2>Add Article</h2></div>
<div class = 'container' style="margin-left: 250px;">
	<form class = 'form-inline' method="post" action = "<?php echo site_url('admin/add'); ?>">
	  	<div > 
	  		<div class="form-group">
	  	  	  <label class = "looks" for="text1">Title</label>
	  	  	  <input style="width: 550 ;margin-left:1.5em;" type="text" class="form-control" id="text1" placeholder="Title" name = 'title'>
	  		</div>
	  		<br>
	  		<br>
	  		<div class="form-group">
	  		  <label class = "looks" for="text1">Body1</label>
	  		  <textarea style="width: 550 ;margin-left:0.45em;" class="form-control" id="text1" placeholder="Body1" name = 'body1'></textarea> 
	  		</div>
	  		<br>
	  		<br>
	  		<div class="form-group">
	  		  <label class = "looks" for="text1">Body2</label>
	  		  <textarea style="width: 550 ;margin-left:0.45em;" class="form-control" id="text1" placeholder="Body2" name = 'body2'>Optional</textarea>
	  		</div>
	  		<br>
	  		<br>
	  		<div class="form-group">
	  		  <label class = "looks" for="text1">Image1</label>
	  		  <input style="width: 550 ;" type="text" class="form-control" id="text1" placeholder="Image1" name = 'img1'>
	  		</div>
	  		<br>
	  		<br>
	  		<div class="form-group">
	  		  <label class = "looks" for="text1">image2</label>
	  		  <input style="width: 550 ;" type="text" class="form-control" id="text1" placeholder="Image2" name = 'img2' value = 'Optional'>
	  		</div>
	  		<br>
	  		<br>
	  		<div>
	  			<label class="looks" for="category">Category </label>
	  			<input list="categories" name="category" id="category">
				<datalist id="categories">
				  <option value="Tech">Tech</option>
				  <option value="Business">Business</option>
				  <option value="Sports">Sports</option>
				  <option value="Lifestyle">Lifestyle</option>
				  <option value="world">world</option>
				  <option value="Politics">Politics</option>
				  <option value="CoronaVirus">CoronaVirus</option>
				  <option value="Entertainment">Entertainment</option>
				  <option value="Defence">Defence</option>
				  <option value="Economy">Economy</option>
				  <option value="India">India</option>
				</datalist>
	  		</div>
	  		<br>
	  		<br>
	  		<button type="submit" style="margin-left: 300px;" class="btn btn-success">Submit</button>
	  	</div>
	</form>
</div>
