<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title>Best Childrens Cosmetic Dentistry | Pediatric | Sedation| Family | Orthodontist | Endodontist - Motivo Dental</title>
    <!-- Bootstrap -->
     <link href="<?= get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?= get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
	 <link href="<?= get_template_directory_uri(); ?>/assets/css/et-line.css" rel="stylesheet">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Source+Sans+Pro|Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
	<script type="text/javascript" src="https://formsroostergrin.com/ortho-group/js/ink_signatures.js"></script>
<?php wp_head(); ?>
</head>
<?php get_header(); ?>
<body <?php body_class(); ?>>
<div class="musicinfo accepting-new-patient-pop-up-form">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">							
				 <div id="" class=" login-form-footer-popup clearfix">
						
							<div class=" col-xs-12">
								<div href="#" class="music footer-close-pop-up-button"><i class="fa fa-close"></i></div>
							</div>
					 <?= do_shortcode('[contact-form-7 id="241" title="Pop form"]'); ?>
				</div>
			</div>
		</div>
</div>
<div class="accepting-new-patient-pop-up">
	<h2> Make Appointment:</h2>
	<div class="music cl-btn" href="#">Book your first appointment now</div>
</div>
<div class="main-division">
		<section class="block1">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-lg-6">
						<ul class="header-social-icon">
							<li><a href="<?= get_option('twentyseventeen_facebook_link'); ?>" target="_blank"><span class="fa fa-facebook"></span></a></li>
							<li><a href="<?= get_option('twentyseventeen_google_plus'); ?>" target="_blank"><span class="fa fa-google-plus"></span></a></li>
	<li><a href="https://www.instagram.com/motivodental/" target="_blank"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
					<div class="col-sm-5 col-lg-6">
						<a href="<?php the_permalink(19); ?>" class="header-appointment"><i class="fa fa-calendar calendar-icon"></i> Make Appointment</a>
					</div>
				</div>
			</div>
		</section>
		<section class="block2">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<ul class="header-email header-email-envelop">
							<li>email us</li>
							<a href="mailto:<?= get_option('twentyseventeen_email'); ?>"><?= get_option('twentyseventeen_email'); ?></a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-xs-6">
						<a href="<?php the_permalink(5); ?>" class="logo"><img src="<?= get_option('twentyseventeen_logo'); ?>"></a>
					</div>
					<div class="col-sm-3 col-xs-6">
						<ul class="header-email header-email-phone">
							<li>call us</li>
							<li><a href="tel:<?= get_option('twentyseventeen_calls'); ?>"><?= get_option('twentyseventeen_calls'); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="block3">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
							<div class="header-right">
							   <div class="navbar-header">
									
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div class="collapse navbar-collapse" id="navbar-collapse-1">
									
						<?php  $menu = array('theme_location'=> 'Primary',
											 'menu' => 'primary',
											 'menu_class' => 'nav navbar-nav',
											 'menu_id' => 'main-nav',
											 'walker'  => new wp_bootstrap_navwalker());
										wp_nav_menu($menu); ?>					
											
								</div>
                           
                           </div>
					</div>
				</div>
			</div>
		</section>
		<?php if(is_page(5)){ ?>
		<section class="block4">
			<div class="">
				<div class="">
					<div class="">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
								 <?php $sql = array('post_type' =>'slider' ,
				                               'posts_per_page'=>- 1,); 
				             	   				$counter= 1; ?>
				            <?php $result= new WP_Query($sql); ?>
				            <?php while($result->have_posts()):$result->the_post(); ?>
									
									<div class="item <?php if($counter==1){echo "active"; } ?>">
										<?php the_post_thumbnail('full'); ?>
									  <div class="carousel-caption">
										<h3><?php the_content(); ?></h3>
										<div class=""><a href="<?php the_permalink(7); ?>">Read more</a></div>
									  </div>
									</div>
									 <?php $counter++; endwhile; wp_reset_query();?>
									
								  </div>
								  <!-- Controls -->
								  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								  </a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php  } else{ ?>
		<section class="inner-banner">
			<?php the_post_thumbnail(); ?>	
		</section>
		<section class="inner-page-content">
		<div class="container">
				<div class="row">
		<div class="col-sm-12">
			<?php while(have_posts()):the_post(); ?>
				<h2 class="about-us-headning"><?php the_title(); ?></h2>
			<?php endwhile; ?>
			<?php } ?>
				</div>
		
		</div>
	</div>
</section>
<!-- Modal -->
<div id="myModal" class="modal fade main-model-app" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Make Appointment</h4>
      </div>
      <div class="modal-body">
        <?= do_shortcode('[contact-form-7 id="241" title="Pop form"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	<script type="text/javascript">
    	jQuery(document).ready(function(){
    		jQuery("li.dropdown>a").attr("data-toggle", "dropdown");
			//jQuery("#menu-item-70").attr("data-toggle", "dropdown");
			jQuery('.dropdown-menu').addClass('sub-menu');
			jQuery('#menu-item-30').click(function(){
				window.location.href = '<?= site_url(); ?>/about-us';
			});
			jQuery('#menu-item-291').click(function(){
				window.location.href= '<?= site_url(); ?>/services';
			});
    	});
    </script>