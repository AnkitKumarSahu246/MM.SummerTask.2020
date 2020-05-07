<html>
  <head>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
  	<div class = 'container'>
  		
  		<nav class="navbar navbar-default">
  			<div class="container-fluid">
  			  <!-- Brand and toggle get grouped for better mobile display -->
  			  <div class="navbar-header">
  			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
  			      <span class="sr-only">Toggle navigation</span>
  			      <span class="icon-bar"></span>
  			      <span class="icon-bar"></span>
  			      <span class="icon-bar"></span>
  			    </button>
  			    <a class="navbar-brand"><b>NewsX</b></a>
  			  </div>
			
  			  <!-- Collect the nav links, forms, and other content for toggling -->
  			  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  			    <ul class="nav navbar-nav">
  			      <li class="active"><a href="<?php echo site_url('/welcome'); ?>">Welcome <span class="sr-only">(current)</span></a></li>
  			      <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
  			    </ul>
  			    <ul class="nav navbar-nav navbar-right">
            <?php
              if($this->session->userdata('id')){
            ?>
            <!-- <li><a></a></li> -->
            <li><a><img alt = 'img' class = 'img-circle' src="<?php echo base_url(); ?>assets/images/posts/<?php echo $this->session->userdata('profilephoto');?>" height = '20' width = '20'><?php echo $this->session->userdata('firstname');?></a></li>
            <li><a href="<?= base_url('admin/logout');?>" >Logout</a></li>
            <?php
              }
            ?>

            <?php
              if(! $this->session->userdata('id')){
            ?>
            <li><a href="<?php echo site_url('/admin/login'); ?>">Admin Login</a></li>
            <li><a href="#">User Login</a></li>
            <?php
              }
            ?>
  			    </ul>
  			  </div>
  			</div>
		</nav> 