<?php
/**
 * Contains the header.
 */
?>
<!-- /header -->
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <title>Bayview Senior Services</title>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <!-- <body <?php body_class(); ?>> -->
    <body class="home page-template page-template-template-home page-template-template-home-php page page-id-49 custom-background wp-custom-logo wide-theme-layout vertical-header-layout site-title-hidden site-description-hidden comments-hidden">
    <div id="page" class="site">
        <!-- ======= Header ======= -->
        <header id="masthead" class="site-header" role="banner">
            <!-- <?php
                echo get_header_image();
            ?> -->

			<div class="header-main">

				<div id="header-images">
					<!-- <div id="top-left-img">
						<a href="./index.html" class="custom-logo-link" rel="home" aria-current="page"><img width="550" height="142" src="./wp-content/uploads/2015/08/mainbayview_logo_550x142.png" class="custom-logo" alt="Bayview Senior Services"></a>
					</div> -->
	
					<div class="site-logo">
                            <a href=<?php echo get_home_url(); ?> class="custom-logo-link" rel="home" aria-current="page"><img width="550" height="142" src=<?php echo get_header_image(); ?> class="custom-logo" alt="Bayview Senior Services"/></a>
                    </div>
	
					<!-- <div id="top-right-img">
						<a href="./index.html" class="custom-logo-link" rel="home" aria-current="page"><img width="550" height="142" src="./wp-content/uploads/2015/08/mainbayview_logo_550x142.png" class="custom-logo" alt="Bayview Senior Services"></a>
					</div> -->
				</div>
	
				<div class="primary-navigation">
                        <?php
                            if ( has_nav_menu( 'primary' ) ) :
                                wp_nav_menu( [
                                    'theme_location' => 'primary',
                                    'container'      => 'nav',
                                    'container_class' => 'main-navigation',
                                    'container_id' => 'site-navigation',
                                    'container_aria_label' => 'Primary Menu',
                                    'menu_class'     => 'menu',
                                    'menu_id'        => 'primary-menu',
                                    'depth'          => 3
                                ] );
                            else :
                                printf(
                                    '<a href="%1$s">%2$s</a>',
                                    esc_url( admin_url( '/nav-menus.php' ) ),
                                    esc_html__( 'Asign a menu', 'herobiz' )
                                );
                            endif;
                        ?>
				</div>
			</div>
		</header>
       

