	
    <!-- footer -->        
    <div class="wrapFooter">
        <div class="container">  
			<footer id="footer">
				<div class="row">                 
					  <div class="col-sm-3">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					  </div>
					  <div class="col-sm-3">
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
						<?php /* function footer menu */
							wp_nav_menu( array(
							  'theme_location' => 'footer-links',
							  )
							);
						?>
					  </div>
					  <div class="col-sm-3">
					  	<?php dynamic_sidebar( 'sidebar-4' ); ?>
					  </div>  
					  <div class="col-sm-3">
					  	<?php dynamic_sidebar( 'sidebar-5' ); ?>
					  </div>   					  
				</div>
                
				<div class="row">
                    <div class="col-sm-10">
					   <h5 class="copyright">Copyright <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?> <?php bloginfo('description'); ?></h5>
                    </div>
					<div class="col-sm-2" >
						<div><a href="http://www.lamtha2.co.uk" target="_blank"><span class="designedBy"></span></a></div>
					</div>
				</div>
				<div class="row">
                    <div class="col-sm-12">
					   <p class="regoffice marginTop">Registered office 71 - 75 Shelton Street, Covent Garden, London WC2H 9JQ. Company number 10214003.</p>
                    </div>
				</div>
			</footer>
		</div> <!-- end container -->
    </div> <!-- end wrapper -->

	<noscript>
		<div class="container" style="text-align:center; font-size:24px;">
		<div style="position: fixed; top: 0px; left: 0px; z-index: 3000; height: 100%; width: 100%; background-color: #FFFFFF;">
			<p>This website requires Javascript to be enabled in your browser.</p>
			<p>Please follow the instructions to enable Javascript at <a href="http://www.enable-javascript.com/" target="_blank">http://www.enable-javascript.com/</a></p>
		</div>
		</div>
	</noscript>
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 

	<!-- Bootstrap JavaScript plugins -->
	<script src="<?php bloginfo( 'template_url' ); ?>/bootstrap-3.3.1/js/bootstrap.min.js"></script> 

	<!-- smooth scroll script -->
	<script src="<?php bloginfo( 'template_url' ); ?>/js/smoothscroll.js" type="text/javascript" ></script>

	<!-- To Top scripts http://www.mattvarone.com/web-design/uitotop-jquery-plugin/ -->
	<!-- the necessary css for UItoTop -->	
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'template_url' ); ?>/jquery.ui.totop/css/ui.totop.css" />
	<!-- easing plugin ( optional ) -->
	<script src="<?php bloginfo( 'template_url' ); ?>/jquery.ui.totop/js/jquery.easing.js" type="text/javascript"></script>
	<!-- UItoTop plugin -->
	<script src="<?php bloginfo( 'template_url' ); ?>/jquery.ui.totop/js/jquery.ui.totop.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<!-- parallax background -->
	<script  src="<?php bloginfo( 'template_url' ); ?>/parallax.js-1.4.2/parallax.min.js" type="text/javascript" ></script>

	<!-- topmenu fade on scroll
	<script>
	var scroll_transparency = false;
	 $(window).scroll(function() {

		if ($(window).scrollTop() == 0) {
			scroll_transparency = false;
			$('#topbar').fadeTo( "fast", 1 );

		}else{
			if (scroll_transparency == false){
				$('#topbar').fadeTo( "fast", .8 );
				scroll_transparency = true;
			}
		}
	});
	</script>  -->
	
	<!-- stop mainmenu when at top of screen -->
	<script>
		$(window).bind('scroll', function () {
		if ($(window).scrollTop() > 220) {
			$('.mainnav').addClass('mainmenuFixed');
			$('.mainnavLogo').show();
		} else {
			$('.mainnav').removeClass('mainmenuFixed');
			$('.mainnavLogo').hide();
		}
	});
	</script>
	
	<!-- temp swop images for placeholders
	<script>
		$(document).ready(function() {
			$('img').attr('src', 'http://placehold.it/1x1');
			$('img').attr('srcset', 'http://placehold.it/1x1');
			$('img').attr('data-image-src', 'http://placehold.it/1x1');
		});
	</script> -->
	
<!-- statcounter -->
<?php include('inc/statcounter.php') ?>
	
<?php wp_footer();?>
	
</body>
</html>