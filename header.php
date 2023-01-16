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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bayview Senior Services</title>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <!-- <body <?php body_class(); ?>> -->
    <body class="vertical-header-layout">
    
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
                        <!-- Givebutter Elements -->
                        <script>
                            window.Givebutter=window.Givebutter||function(){(Givebutter.q=Givebutter.q||[]).push(arguments)};Givebutter.l=+new Date;
                            window.Givebutter('setOptions',
                            {
                                "accountId": "DiMt5G8qR2CV0ITR"
                            });
                        </script>
                        <script async src="https://js.givebutter.com/elements/latest.js" ></script>
                        <!-- End Givebutter Elements -->
                        <!-- Element Name: New Donate Button -->
                        <div givebutter-element-id="pXvR2L"></div>
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
                                    esc_html__( 'Asign a menu', 'bayview' )
                                );
                            endif;
                        ?>
				</div>
			</div>
		</header>
       

