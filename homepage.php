<?php
/*
Template Name: homepage
*/
?>
<?php get_header(); ?>

<body <?php body_class(); ?>>

	<!-- page header -->   
	<?php include('pageheader.php') ?>

    <!-- content -->
    <div id="content"> <!-- page content -->

		<!-- slider -->
		<div class="marginTop">
			<div class="<!--container removed for large slides -->">
				<div class="row slideshow">
					<!-- display page's featured image -->
					<div class="heroimage" data-parallax="scroll" data-image-src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>">
						<h2 class="caption"><?php echo get_post_meta($post->ID, "caption", true); ?></h2>
						<div class="shopbtnwrap"><div class="shopbtn"><a href="#shopsection"><h2>SHOP</h2></a></div></div>
					</div>	
					<!-- display meta slider (disabled) -->
					<?php 
						//echo do_shortcode("[metaslider id=38]"); 
					?>
					<div class="shopbtnwrap"><div class="shopbtn"><a href="#shopsection"><h2>SHOP</h2></a></div></div>
				</div>
			</div>
		</div>

		<!-- home page text -->
		<section>
			<div class="container">
				<div class="row">	
					<div  class="col-md-12 textCenter">
						<!-- Start the Loop. --> 
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<!-- Display the Post's Content -->
						<h1><?php the_title(); ?></h1>
						<div class="dashedline"></div>
						<?php the_content(); ?>

						<!-- Stop The Loop (but note the "else:" - see next line). -->
						<?php endwhile; else: ?>

						<!-- The very first "if" tested to see if there were any Posts to -->
						<!-- display.  This "else" part tells what do if there weren't any. -->
						<h1>Page not found</h1>
						<p>Sorry, that page no longer exists. The page may have been removed or you have followed an obsolete link.
						Please use the site's navigation menus to try again.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

						<!-- REALLY stop The Loop. -->
						<?php endif; ?>

						<!-- /post -->
					</div> 
				</div>
			</div>
		</section>
  
		<!-- shop section -->
 		<section>
			<div class="container">
				<div class="row">	
					<div class="col-md-12"><a id="shopsection"></a>
						<!-- Start the Loop. --> 
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
						<!-- product categories -->
						<?php echo do_shortcode("[product_categories number='2' parent='0' columns='2']"); ?>
						
						<div class="featuredprods">						
						<!-- removed 
						<h2>All products in a specific category</h2>-->
						<?php //echo do_shortcode("[product_category category='clutch-bags' per_page='4']"); ?>
						
						<h2>Recently Added Products</h2>
						<?php echo do_shortcode("[recent_products per_page='4' columns='4']"); ?>

						<h2>Featured Products</h2>
						<?php echo do_shortcode("[featured_products per_page='4' columns='4']"); ?>
						
						<h2>Products on sale</h2>
						<?php echo do_shortcode("[sale_products per_page='4']"); ?>

						<!-- removed -->
						<h2>Best Sellers</h2>
						<?php echo do_shortcode("[best_selling_products per_page='4']"); ?>
						
						</div>
						
						<!-- Stop The Loop (but note the "else:" - see next line). -->
						<?php endwhile; else: ?>

						<!-- The very first "if" tested to see if there were any Posts to -->
						<!-- display.  This "else" part tells what do if there weren't any. -->
						<h1>Page not found</h1>
						<p>Sorry, that page no longer exists. The page may have been removed or you have followed an obsolete link.
						Please use the site's navigation menus to try again.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

						<!-- REALLY stop The Loop. -->
						<?php endif; ?>

						<!-- /post -->
					</div> 
				</div>
			</div>
		</section>
		
    </div><!-- end page container -->   

    <!-- footer -->
	<?php get_footer(); ?>
 