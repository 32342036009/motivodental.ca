<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
		<section class="block12" >
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-5">
						<h4><span><i class="fa  fa-slack footer-circle"></i></span>About us</h4>
						<p>Our Patient’s Dental West Edmonton we satisfy our patients dental needs in the most comfortable way with minimal pain. Every individual is unique, so we believe that our treatment approach should be tailored to accommodate each patient’s needs.</p>
						<ul class="footer-left-social-icon">
						<h6>Social media:- </h6>
							<li><a href="<?= get_option('twentyseventeen_facebook_link');  ?>" target="_blank"><i class="fa fa-facebook footer-circle"></i></a></li>
							<li><a href="<?= get_option('twentyseventeen_google_plus'); ?>" target="_blank"><i class="fa fa-google-plus footer-circle"></i></a></li>
							<li><a href="https://www.instagram.com/motivodental/" target="_blank"><i class="fa fa-instagram footer-circle"></i></a></li>
						</ul>
					</div>
					<div class=" col-md-3 col-sm-3">
						<h4><span><i class="fa fa-handshake-o footer-circle"></i></span>Links</h4>
						<?php 
										$menu = array( 'menu' 		  	=> 'Footer',
													   'menu_class'   	=> 'footer-links',
													   'theme_location' => 'primary',
													   //'walker'  => new wp_bootstrap_navwalker(),
													   'depth' 			=> 0);
												wp_nav_menu($menu); ?>
							
					</div>
					<div class="col-md-3  col-sm-3">
						
						<h4 ><span><i class="fa fa-link footer-circle"></i></span>Contact</h4>
						
						<p class="footer-address"><?= get_option('twentyseventeen_address'); ?></p>
						<p class="email-footer"><a href="tel:<?= get_option('twentyseventeen_calls'); ?>"><?= get_option('twentyseventeen_calls'); ?></a></p>
						<p class="phone-footer"><a href="mailto:<?= get_option('twentyseventeen_email'); ?>"><?= get_option('twentyseventeen_email'); ?></a></p>
						
					</div>
				</div>
			</div>
		</section>
		<section class="block13">
        	<div class="container">
            	<div class="row">
                	<div class="col-sm-12">
                    	<a  class="date-icon">Copyrights &copy;2018  - All Rights Reserved | Crafted by </a><a rel="nofollow" target="_blank" href="https://greenwebmedia.com" style="text-decoration:none;color:#fff">Greenwebmedia.com</a>
                    </div>
                </div>
            </div>
        </section>
	
		
	</div>
	<div id='toTop'><i class="fa fa-angle-up"></i></div>
<?php wp_footer(); ?>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>				
    <script src="<?= get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
<script>
		$(window).scroll(function() {
			if ($(this).scrollTop()) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		});

		$("#toTop").click(function () {
		   //1 second of animation time
		   //html works for FFX but not Chrome
		   //body works for Chrome but not FFX
		   //This strange selector seems to work universally
		   $("html, body").animate({scrollTop: 0}, 1000);
		});
		
</script>
	<script>
$(document).ready(function() {
 // $('.home #myModal').modal('show');
});
</script>
  
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="https://formsroostergrin.com/ortho-group/js/label_text.js"></script>
    <script>
 jQuery(function() {
	 jQuery(".datepicker").datepicker();
  });
  </script>
<script>   
$(document).ready(
    function() {
        $(".music").click(function() {
            $(".musicinfo").toggle("");
        });
    });
  </script>

   <script>
	$(document).ready(function(e) {
        var navbarOuter = $(".block3").offset().top;		
    	
    	$(window).scroll(function() {
			var windowTop = $(window).scrollTop();
		
    if (windowTop >= navbarOuter ) {		
		
        $(".block3").addClass("block3-fixed");
    } else {
        $(".block3").removeClass("block3-fixed");
    }
});
});
    </script>  
</body>
</html>