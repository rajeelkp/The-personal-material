<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
<div class='wrap'>
<header id="masthead" class="site-header" role="banner">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			
			<div class="container site-header-inner  col-sm-6 col-sm-push-3 col-xs-12">

				<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
					</a>
				<?php } // end if ( ! empty( $header_image ) ) ?>


				<div class="white top-card card-inset-shadow site-branding m-0">
					<div class="title-block">
						
					<h1 class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="lead"><?php bloginfo( 'description' ); ?></p>
				</div>
				</div>
			</div>
			<div class='container col-sm-3 col-sm-pull-6 col-xs-6'>
				<div class='white top-card card-inset-shadow half-face'>
					<img src='http://rajeelkp.com/wp-content/uploads/2017/12/HalfBW.png'/>
				</div>
			</div>
			<div class='container col-sm-3 col-xs-6'>
				<div class='red top-card card-inset-shadow'>
					Home
				</div>	
			</div>
		</div>
      <div class='row  socials'>
        <div class='container col-xs-6 visible-xs'>
         <div class='big-card card-inset-shadow white'>
             <div class='single-box fb'><img  src='wp-content/themes/_tk/includes/images/fb.png'/>Find on Facebook</div>
             <div class='single-box twitter'><img  src='wp-content/themes/_tk/includes/images/twitter.png'/>Find on Twitter</div>
             <div class='single-box linkedin'><img  src='wp-content/themes/_tk/includes/images/g+.png'/>Find on Google +</div>
             <div class='single-box mail'><img src='wp-content/themes/_tk/includes/images/g+.png'>Message Me</div>
             <div class='single-box mail'><img src='wp-content/themes/_tk/includes/images/g+.png'>Message Me</div>

            </div>
        </div>
 
        <div class='container col-xs-6 visible-xs'>
            <div class='top-card card-inset-shadow white rapid'>
                A lazy body powered by an extremely efficient mind capable of generating enthusiastic ideas from dynamic viewpoints, coupled with an emotion cooled and divine heart.
            </div>
        </div>   
      </div>
	</div><!-- .container -->

    
</header><!-- #masthead -->
	
	<!-- Navigation space left -->

<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
      
		<div class="row">
			<div id="content" class="main-content-inner col-xs-12 col-sm-8">

