<?php 
/**
	Template Name: Contact
**/
get_header(); ?>

<section class="inner-page-content">
			<div class="container">
				<div class="row">					
					</div>
					<div class="row">
					<div class="col-sm-6">
						<ul class="contact-box clearfix">
							<li>
							<h4 class="address-heading"><strong>PHONE</strong></h4>
							<p class="text-alignmnt"><a href="tel:(780)757-1900">(780)757-1900</a></p>
							
							</li>
							<li>
							<h4 class="address-heading"><strong>ADDRESS</strong></h4>
							<p class="text-alignmnt cheading">Motivo Dental</p>
							<p class="text-alignmnt">14931 107 Ave, Edmonton, AB T5P 0X8</p>
							
							</li>
							<li>
							<h4 class="address-heading"><strong>EMAIL</strong></h4>
							<p class="text-alignmnt"><a href="mailto:info@motivodental.ca">info@motivodental.ca</a></p>
							</li>
						</ul>
					</div>
					<div class="col-sm-6">
							<ul class="opening-widget">
								
								<h4 class="address-heading"><strong>Opening hours</strong></h4>
								<li>Monday : 10:00 am &ndash; 7:00 pm</li>
								<li>Tuesday : 8:00 am &ndash; 4:00 pm</li>
								<li>Wednesday : 10:00 am &ndash; 7:00 pm</li>
								<li>Thursday : 09:00 am &ndash; 5:00 pm</li>
								<li>Friday : 8:00 am &ndash; 2:00 pm</li>
								<li>Saturday : 09:00 am &ndash; 12:00 noon ( by appointment only )</li>
							</ul>
					</div>
					
				</div>
			
				<div class="row">
                                <div class="col-md-6 col-sm-5 col-xs-12">
                                        	
										<div class="contact-iframe">
											<?= get_option('twentyseventeen_map'); ?>
										</div>
                                </div>
                               
									<div class="col-md-6 col-sm-7 col-xs-12">
									<div class="row">
									
										 <div class="login-form clearfix contactus">
											  <?= do_shortcode('[contact-form-7 id="88" title="contact us"]'); ?>
										 </div>
									</div>
							</div>
								
                </div>
		</div></section>



<?php get_footer(); ?>