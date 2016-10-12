	<!-- page header -->  
	<!-- top menu -->	
	<div id="topbar" class="wrapTopmenu">
		<div class="container">
			<nav class="col-md-12 textRight navbar navbar-default">
				<div class="" id="topnav">
					<?php /* function for dropdown menu */
						wp_nav_menu( array(
						  'theme_location' => 'top-menu',
						  'depth' => 1,
						  'container' => false,
						  'menu_class' => 'nav navbar-nav',
						  //Process nav menu using our custom nav walker
						  'walker' => new wp_bootstrap_navwalker()
						  )
						);
					?>
				</div><!-- /.navbar-collapse -->				
			</nav>
		</div> <!-- end container -->
	</div> <!-- end wrapper -->

	<!-- logo -->   
	<div class="container">
		<div class="row">	
			<header class="col-md-12 aligncenter">
				<div class="sitelogo marginTop marginBottom">
					<a href="<?php echo site_url(); ?>/index.php"><img alt="Logo" src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" /></a>
				</div>
			</header>
		</div>
	</div>
	
	<!-- main menu -->   
	<div class="wrapMainmenu">
		<div class="container">	
			<div class="mainnavLogo">
				<div class="marginTop marginBottom">
					<a href="<?php echo site_url(); ?>/index.php"><img alt="Logo" src="<?php bloginfo( 'template_url' ); ?>/img/logoSml.png" /></a>
				</div>
			</div>	
		  <nav class="col-md-12 mainnav navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="mainnav">
				<?php /* function for dropdown menu */
					wp_nav_menu( array(
					  'theme_location' => 'main-menu',
					  'depth' => 2,
					  'container' => false,
					  'menu_class' => 'nav navbar-nav',
					  //Process nav menu using our custom nav walker
					  'walker' => new wp_bootstrap_navwalker()
					  )
					);
				?>
			</div><!-- /.navbar-collapse -->	
		</nav>
		</div><!-- /.container-fluid -->
	</div>