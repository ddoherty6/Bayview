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
            <h2 class="entry-title">SERVICES</h2>
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
                esc_html__( 'Asign a menu', 'bayview' )
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
    <?php
        $dom = new DomDocument(); // counting future events to see if we need to display events column
        $numberOfEvents = 0;
        $events = tribe_get_events( [ 
            'start_date' => 'now',
            ] );
        
        foreach ( $events as $post ) {

            setup_postdata( $post );
            
            // get $post category
            $catHtmlString = tribe_get_event_categories($post->ID); // output is string with extraneous html
            @ $dom->loadHTML($catHtmlString); // convert string to html obj for parsing (overwrite $dom instance each time)
            $textContent = $dom->firstElementChild->firstElementChild->textContent; // dig down to <a> element and pull text
            $textContentArray = explode("Event Category: ", $textContent); // split event name from rest of string returned by "tribe_get_event_categories"
            $cat = $textContentArray[1]; // whatever isnt "Event Category :" is the event category. nice one eventscalendar.
        
            if ($cat == "Events"){
                $numberOfEvents = $numberOfEvents + 1;
            }

        }

        if($numberOfEvents > 0): ?>
        <div id="events" class="site-content">
            <header class="page-header entry-header">
                <h2 class="page-title entry-title" style="text-align:center">EVENTS</h2>
            </header>
            <?php get_sidebar(); ?>
        </div>
    <?php else: endif; ?>
</div>
<?php
    get_footer();
?>