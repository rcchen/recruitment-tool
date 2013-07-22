<!DOCTYPE html>
<html xml:lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <title>Dashboard - Bootstrap Admin</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">   
    
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" media="screen" rel="stylesheet" type="text/css" />
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css" />
    
    <link href="<?php echo base_url(); ?>assets/css/adminia-1.1.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/adminia-1.1-responsive.css" media="screen" rel="stylesheet" type="text/css" />
    
    <link href="<?php echo base_url(); ?>assets/css/pages/dashboard.css" media="screen" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/css/pages/login.css" rel="stylesheet"> 

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
  </head>

<body>

<div class="navbar navbar-fixed-top">
    
    <div class="navbar-inner">
        
        <div class="container">
            
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>              
            </a>
            
            <a class="brand" href="./index.html">Athena</a>
            
            <div class="nav-collapse">
            
                <ul class="nav pull-right">
                    <!-- <li>
                        <a href="#"><span class="badge badge-warning">7</span></a>
                    </li> -->
                    
                    <li class="divider-vertical"></li>
                    
                    <li class="dropdown">

                        <? if ($user) { ?>
                        <a href="/logout">Logout</a>
                        <? } else { ?>
                        <a href="/login">Login</a>
                        <? } ?>
                        
                        <!-- 
                        <a data-toggle="dropdown" class="dropdown-toggle " href="#">
                            Rod Howard <b class="caret"></b>                            
                        </a> -->
                        
                        
                    </li>
                </ul>
                
            </div> <!-- /nav-collapse -->
            
        </div> <!-- /container -->
        
    </div> <!-- /navbar-inner -->
    
</div> <!-- /navbar -->