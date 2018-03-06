<?php
/*
Template Name: All Services
*/
get_header(); ?>
		  <div class="container">
			<div class="row">
				<div class="col-sm-12">
								<ul class="service-list">
									<?php   $args = array('post_type'=>'dental_services' , 'posts_per_page'=> -1);
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
													<p><?= substr(strip_tags($post->post_content), 0, 130)."..";?></p>
		<div class="oral-btn"><a href="<?php the_permalink(); ?>">Read more <i class="fa fa-angle-double-right"></i></a></div>
												</div>
										</div>
									</li>
									<?php endwhile; wp_reset_query(); ?>
								</ul>									
							</div>
			</div>
		</div>
<?php get_footer(); ?>