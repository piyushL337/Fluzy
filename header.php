<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head itemscope itemtype="http://schema.org/WebSite">
	<meta name="google-site-verification" content="" />
	<meta name="msvalidate.01" content="89B48FE8EC3DC3870EC934D929810BA4" />
	<meta charset="<?php bloginfo('charset' ); ?>"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?php wp_title(); ?> </title>
	<?php wp_head(); ?>
	<meta name="theme-color" content="#333333">

	
</head>
<body itemscope itemtype="https://schema.org/WebPage">

<header itemscope itemtype="http://schema.org/WPHeader">
<div class="fluzy-header"> 
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-3" itemscope itemtype="http://schema.org/Organization">
			<a href="<?php bloginfo('wpurl'); ?>" itemprop="url">
				<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" class="img-responsive my-logo" title="fluzy" itemprop="logo">
			</a>
			<?php if(is_home()){ ?>
				<h1 style="display:none;"><?php bloginfo('name'); ?></h1>
			<?php } ?>				
		</div>
		<div class="col-xs-12 col-sm-4 col-md-5">
			 <?php get_search_form(); ?>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4">
			<div class="social-box">
				<div class="fb sb-icon"> <a href="https://www.facebook.com/fluzy/" target="_blank" title="Follow us on Facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </div>
				<div class="tw sb-icon"> <a href="https://twitter.com/fluzy" target="_blank" title="Follow us on Twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </div>
				<div class="gp sb-icon"> <a href="https://plus.google.com/u/0/116789087789879936805" target="_blank" title="Follow us on Google Plus"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a> </div>
				<div class="yt sb-icon"> <a href="#" target="_blank" title="Follow us on YouTube"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a> </div>				
			</div>			
		</div>
	</div>
</div>
</div>

<div class="fluzy-navbar">
<div class="container-fluid">
	<nav class="navbar navbar-inverse" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
		<div class="row nav-row">
			<header>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
			</header>
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
			<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => '',
					'menu_class'        => 'nav navbar-nav',
					'walker' 			=> new wp_bootstrap_navwalker())
				);
			?>                
			</div>
		</div>
	</nav>	
</div>
</div>
</header>

