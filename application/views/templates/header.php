<html>
        <head>
              <title><?= $title ?></title>
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
              <style type="text/css">
                body {
                  background-image: url('<?php echo base_url(); ?>assets/images/pages/darkShades.jpg');
                  background-size: cover;
                }
              </style>
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
                        <li class="active"><a href="<?php echo site_url('posts/home'); ?>">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="<?php echo site_url('posts/forum'); ?>">Forum</a></li>
                       </ul>
                      
                      <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <table>
                            <td  class = 'col-lg-4'>
                              <li><a href="<?php echo site_url('posts/category/Tech'); ?>">Technology</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="<?php echo site_url('posts/category/Business'); ?>">Business</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="<?php echo site_url('posts/category/Sports'); ?>">Sports</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="<?php echo site_url('posts/category/Lifestyle'); ?>">Lifestyle</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="<?php echo site_url('posts/category/world'); ?>">World</a></li>
                            </td>
                            <td  class = 'col-lg-4'>
                              <li><a href="<?php echo site_url('posts/category/Politics'); ?>">Politics</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="<?php echo site_url('posts/category/CoronaVirus'); ?>">Coronavirus</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="<?php echo site_url('posts/category/Entertainment'); ?>">Entertainment</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="<?php echo site_url('posts/category/Defence'); ?>">Defence</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="<?php echo site_url('posts/category/Economy'); ?>">Economy</a></li>
                            </td>
                            <td  class = 'col-lg-4'>
                              <li><a href="<?php echo site_url('posts/category/India'); ?>">India</a></li>
                            </td>
                            </table>
                          </ul>
                        </li>
                        <!-- <li><a href="#">Signup</a></li> -->
                        <!-- <li><a href="#">Signin</a></li> -->
                        <?php
                              if($this->session->userdata('ids')){
                         ?>
                             <!-- <li><a></a></li> -->
                             <li><a><img alt = 'img' class = 'img-circle' src="<?php echo base_url(); ?>assets/images/posts/<?php echo $this->session->userdata('profilephotos');?>" height = '20' width = '20'><?php echo $this->session->userdata('firstnames');?></a></li>
                             <li><a href="<?= base_url('posts/logout');?>" >Logout</a></li>
                        <?php
                              }
                        ?>
                      </ul>
                      
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                  </nav>

