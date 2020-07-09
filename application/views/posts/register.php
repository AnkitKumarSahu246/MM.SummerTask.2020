<div class = 'logprop'>
  <h3 class="looks">User Signup</h3>
</div>
<div class = 'log'>
  <?php echo form_open('posts/register'); ?>
    <div class="form-group">
      <label class="looks" for="exampleInputname1">firstname</label>
      <!-- <input type="email" class="form-control" id="exampleInputuser1" placeholder="Username"> -->
      <?php echo form_input(['class'=>'form-control','placeholder'=>'Firstname','id'=>'exampleInputname1','type'=>'text','name'=>'first']); ?>
      <p><b><?php echo form_error('first',"<div class = 'text-danger'> ","</div>");?></b></p>
    </div>
    <div class="form-group">
      <label class="looks" for="exampleInputname2">lastname</label>
      <!-- <input type="email" class="form-control" id="exampleInputuser1" placeholder="Username"> -->
      <?php echo form_input(['class'=>'form-control','placeholder'=>'Lastname','id'=>'exampleInputname2','type'=>'text','name'=>'last']); ?>
      <p><b><?php echo form_error('last',"<div class = 'text-danger'> ","</div>");?></b></p>
    </div>
    <div class="form-group">
      <label class="looks" for="exampleInputuser1">Username</label>
      <?php echo form_input(['class'=>'form-control','placeholder'=>'Username','id'=>'exampleInputuser1','type'=>'email','name'=>'usernamed']); ?>
      <p><b><?php echo form_error('username',"<div class = 'text-danger'> ","</div>");?></b></p>
    </div>
    <div class="form-group">
      <label class="looks" for="exampleInputPassword4">Password</label>
      <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
      <?php echo form_password(['class'=>'form-control','placeholder'=>'Password','id'=>'exampleInputPassword4','type'=>'password','name'=>'passedword']) ?>
      <p><b><?php echo form_error('password',"<div class = 'text-danger'> ","</div>");?></b></p>
    </div>
    <div class="form-group">
      <label class="looks" for="exampleInputFile">Profile Picture Upload</label>
      <input class="looks" name = 'file' type="file" id="exampleInputFile">
      <p><b><?php echo form_error('file',"<div class = 'text-danger'> ","</div>");?></b></p>
    </div>
    <!-- <button type="submit" class="btn btn-default">Submit</button> -->
    <?php echo form_submit(['type'=>'submit','class'=>'btn btn-success','style'=>'margin-left: 160px;','value' => 'Signup']) ?>
    <?php echo form_reset(['type'=>'reset','class'=>'btn btn-danger','value' => 'Reset']) ?>
  </form> 
</div>
