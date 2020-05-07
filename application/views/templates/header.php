<html>
        <head>
                <title><?= $title ?></title>
                <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
                        <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
                        <li><a href="#">Forum</a></li>
                       </ul>
                      
                      <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <table>
                            <td  class = 'col-lg-4'>
                              <li><a href="#">Technology</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Business</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Sports</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Lifestyle</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">World</a></li>
                            </td>
                            <td  class = 'col-lg-4'>
                              <li><a href="#">Politics</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Coronavirus</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Entertainment</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Defence</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Economy</a></li>
                            </td>
                            <td  class = 'col-lg-4'>
                              <li><a href="#">India</a></li>
                            </td>
                            </table>
                          </ul>
                        </li>
                        <li><a href="#">Signup</a></li>
                        <li><a href="#">Signin</a></li>
                      </ul>
                      
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                  </nav>

