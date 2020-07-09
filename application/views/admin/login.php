
  	<div>
     <h3 class = 'looks logprop'>Admin Login</h3>

    </div>
    <div class = 'log'>
  		<?php echo form_open('admin/login'); ?>
        
  			<div class="form-group">
  			  <label class="looks" for="exampleInputEmail3" >Username:</label>
          <?php echo form_input(['class'=>'form-control','placeholder'=>'Username','id'=>'exampleInputEmail3','type'=>'email','name'=>'username','value'=>set_value("username")]); ?>
          <p><b><?php echo form_error('username',"<div class = 'text-danger'> ","</div>");?></b></p>
  			</div>
  			
  			<div class="form-group">
  			  <label class="looks" for="exampleInputPassword3">Password:</label>    
          <?php echo form_password(['class'=>'form-control','placeholder'=>'Password','id'=>'exampleInputPassword3','type'=>'password','name'=>'password','value'=>set_value("password")]) ?>
          <p><b><?php echo form_error('password',"<div class = 'text-danger'> ","</div>");?></b></p>
  			</div> 
  			
  			<div class="checkbox">
  			  <label class="looks">
  			    <input value = 'check' type="checkbox"> Remember me
  			  </label>
  			  
  			</div>
  			<br>
        <?php echo form_submit(['type'=>'submit','class'=>'btn btn-success','style'=>'margin-left: 160px;','value' => 'Login']) ?>
        <?php echo form_reset(['type'=>'reset','class'=>'btn btn-danger','value' => 'Reset']) ?>
		    <!-- <?php //echo validation_errors();  ?> -->
  </div>



