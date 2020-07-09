
<div class = 'logprop'>
	<h3 class="looks">User Login</h3>
</div>
	<div class = 'log'>
		<?php echo form_open('posts/login'); ?>
		  <div class="form-group">
		    <label for="exampleInputEmail3" class="looks">Username</label>
		    <!-- <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Username"> -->
		    <?php echo form_input(['class'=>'form-control','placeholder'=>'Username','id'=>'exampleInputEmail3','type'=>'email','name'=>'name']); ?>
		    <p><b><?php echo form_error('name',"<div class = 'text-danger'> ","</div>");?></b></p>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword3" class="looks">Password</label>
		    <!-- <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password"> -->
		    <?php echo form_password(['class'=>'form-control','placeholder'=>'Password','id'=>'exampleInputPassword3','type'=>'password','name'=>'pass']) ?>
         	<p><b><?php echo form_error('pass',"<div class = 'text-danger'> ","</div>");?></b></p>
		  </div>
		  <div class="checkbox">
		    <label class="looks">
		      <input type="checkbox"> Remember me
		    </label>
		  </div>
		  <!-- <button type="submit" class="btn btn-default">Sign in</button> -->
		  <?php echo form_submit(['type'=>'submit','class'=>'btn btn-success','style'=>'margin-left: 160px;','value' => 'Login']) ?>
		  <?php echo form_reset(['type'=>'reset','class'=>'btn btn-danger','value' => 'Reset']) ?>
		<a href="<?php echo site_url('/posts/register'); ?>" ><p class="looks" style = 'text-align: center;'>New User Sign Up</p></a>
	</div>	