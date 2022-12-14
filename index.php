<?php
/**
 * The main template file.
 */
get_header();
?>
<!-- /index -->
<div id="float-div">
    <div id="services" class="site-content">
        <header class="page-header entry-header">
            <h2 class="page-title entry-title" style="text-align:center">SERVICES</h2>
        </header>
        <?php
        if ( has_nav_menu( 'services' ) ) :
            wp_nav_menu( [
                'theme_location' => 'services',
                'container'      => 'div',
                'container_class' => 'widget',
                'container_aria_label' => 'Services Menu',
                'menu_class'     => 'menu',
                'menu_id'        => 'services-menu',
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

    <div class="col-8"> <!-- Shadow div to stack tag-line div on top of content div -->
    <div id="tag-line" class="site-content">
        <h2 id="blog-title" class="page-title entry-title" style="text-align:center">
            Dignity. Honor. Respect.
        </h2>
    </div>
        <ul id="content" class="site-content">
            <?php
            // Start the loop
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/post/content', get_post_format() );
                endwhile;

                echo paginate_links( [
                    'prev_text' => esc_html__( 'Prev', 'Bayview' ),
                    'next_text' => esc_html__( 'Next', 'Bayview' ),
                ] );
            else :
                get_template_part( 'template-parts/page/content', 'none' );
            endif;
            ?>
        </ul>
    </div>
    <div id="events" class="site-content">
        <header class="page-header entry-header">
            <h2 class="page-title entry-title" style="text-align:center">EVENTS</h2>
        </header>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php
get_footer();