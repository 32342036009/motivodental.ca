<?php
/* Template Name: Home */
get_header(); ?>

<section class="block5">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="about-us">
									<h2><?= get_field('title'); ?></h2>
									<p class="about-us-main"><?= get_field('description'); ?></p>
									<div class="about-btn">
										<a href="<?php the_permalink(7); ?>">read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
		</section>
		<section class="block7 visible-xs">
					<ul>
						<li>
							<div class="emergency">
								<h3>Emergency Dental Service, <br>Walk-in and Same Day Appointment</h3>
								<p>Your west Edmonton dentist welcomes walk-ins and emergency dental patients, and we can provide treatment the same day for most patients.</p>
							</div>
							<div class="new">
								<h3>For new patients: </h3>
								<p>All New Patients are welcome to have a tour of our office and enjoy a complimentary consultation with Dr. Alhomsi with no obligation.</p>
							</div>
						</li>
						<li>
							<div class="choose">
								<h3>Why Choose Motivo Dental </h3>
								<ul class="choose-listing">
									<li>Relaxing and pleasant atmosphere that makes you feel at home</li>
									<li>Payment plans with as low as 0% interest</li>
									<li>Emergency dental service, walk-ins, same day appointments</li>
									<li>Brand new dental office with new equipment and the most current technology</li>
									<li>Convenient central location in the city</li>
									<li>Free parking </li>
								</ul>
							</div>
							
						</li>
					</ul>
		</section>
		<section class="block6">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="dental-service-hdg"><?= get_field('dental__title'); ?></h3>
								<p class="text-center"><?= get_field('desc'); ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<ul class="main-service hidden-xs">
									<li>
											<div class="figure-one">
												<img src="http://webdevelopers1.com/motivodental/wp-content/uploads/2018/03/invisaling.jpg">
												<div class="image-overlay"></div>
												<div class="image-caption-text">
													<h3><?= get_field('Invisalign_Title'); ?></h3>
													<p><?= get_field('Invisalign_description'); ?></p>
													<div class="orthodontics-btn"><a href="<?php the_permalink(13); ?>">Read more</a> <i class="fa fa-angle-double-right"></i></div>
												</div>
											</div>
										
									</li>

								</ul>
								
								<ul class="service-list visible-xs">																			 				
<li>
	<div class="service-list-inner">
			<div class="service-list-image">
				<img src="<?= get_template_directory_uri() ?>/assets/images/invisaling.jpg">
			</div>
			<div class="service-list-text">
				<h3><?= get_field('Invisalign_Title'); ?></h3>
				<p class="hidden-xs"><?= get_field('Invisalign_description'); ?></p>
				<div class="oral-btn"><a href="<?php the_permalink(13); ?>">Read more <i class="fa fa-angle-double-right"></i></a></div>
			</div>
	</div>
</li>
</ul>
								
								
								
								
								
								
								
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<ul class="service-list service-list-second">
									<?php   $args = array('post_type'=>'dental_services' , 'posts_per_page'=> 6);
										 		$res = new WP_Query($args);
										 		//echo "<pre>";	print_R($res); ?>
										 			<?php while($res->have_posts()): $res->the_post(); ?>	
									<li>
										<div class="service-list-inner">
												<div class="service-list-image">
													<img src="<?= get_field('Select your servies field'); ?>">
												</div>
												<div class="service-list-text">
													<h3><?= substr(strip_tags($post->post_title), 0, 45)."..";?></p></h3>
													<p class="hidden-xs"><?= substr(strip_tags($post->post_content), 0, 130)."..";?></p>
		<div class="oral-btn"><a href="<?php the_permalink(); ?>">Read more <i class="fa fa-angle-double-right"></i></a></div>
												</div>
										</div>
									</li>
									<?php endwhile; wp_reset_query(); ?>
								</ul>									
							</div>
							
							<div class="col-sm-12 more-service-wrapper">
								<a href="<?php the_permalink(9); ?>" class="more-service-btn">View all services</a>
							</div>

						</div>
					</div>
		</section>
		<section class="block7 hidden-xs">
					<ul>
						<li>
							<div class="emergency">
								<h3>Emergency Dental Service, <br>Walk-in and Same Day Appointment</h3>
								<p>Your west Edmonton dentist welcomes walk-ins and emergency dental patients, and we can provide treatment the same day for most patients.</p>
							</div>
							<div class="new">
								<h3>For new patients: </h3>
								<p>All New Patients are welcome to have a tour of our office and enjoy a complimentary consultation with Dr. Alhomsi with no obligation.</p>
							</div>
						</li>
						<li>
							<div class="choose">
								<h3>Why Choose Motivo Dental </h3>
								<ul class="choose-listing">
									<li>Relaxing and pleasant atmosphere that makes you feel at home</li>
									<li>Payment plans with as low as 0% interest</li>
									<li>Emergency dental service, walk-ins, same day appointments</li>
									<li>Brand new dental office with new equipment and the most current technology</li>
									<li>Convenient central location in the city</li>
									<li>Free parking </li>
								</ul>
							</div>
							
						</li>
					</ul>
		</section>
		<section class="block8 hidden-xs">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="dental-service-hdg appointment-hdg">SCHEDULE AN APPOINTMENT</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6"></div>
							<div class="col-sm-offset-1 col-md-5 col-sm-5">
								<!-- <form class="fix-appointment"> -->
										  <?= do_shortcode('[contact-form-7 id="75" title="Homp page contact"]'); ?>
							</div>
						</div>
					</div>
		</section>
		<section class="block9">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="dental-service-hdg schudle-hdg"><?= get_field('_what_we_offer_you_title'); ?></h3>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<h5>Call <a href="tel:<?= get_option('twentyseventeen_calls'); ?>"><?= get_option('twentyseventeen_calls'); ?></a> to book an appointment!</h5>
								
								<p><?= get_field('_what_we_offer_you_description'); ?></p>
								<div class="schudle-btn">
										<ul>
											<li><a href="#"> Direct Billing</a></li>
											<li><a href="#"> Payment Plan</a></li>
										</ul>
									</div>
							</div>
						</div>
					</div>
		</section>
		<section class="block10 hidden-xs">
					<div class="container">
						<?php $droctor = array('post_type'=>'droctors');  ?>
						<?php $q = new WP_Query($droctor); ?>
						<?php while($q->have_posts()): $q->the_post(); ?>
						<div class="row">
							<div class="col-md-8 col-sm-7">
								<h5><?php the_title(); ?></h5>
								<?php the_content(); ?>
							</div>
							<div class="col-md-4 col-sm-5">
								<div class="director-img"><?php the_post_thumbnail(); ?></div>
							</div>
						</div>
					<?php endwhile; wp_reset_query(); ?>
					</div>
		</section>
		<section class="block11">
			<div class="">
				<div class="">
					<?= get_option('twentyseventeen_map'); ?>
				</div>
			</div>
		</section>




<?php get_footer(); ?>