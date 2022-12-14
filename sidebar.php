<?php
/**
 * Template for sidebar.php
 */
?>
<!-- /sidebar -->
<div id="calendar" class="">
    <!-- <?php dynamic_sidebar( 'default-sidebar' ); ?> -->
    <ul>
    <?php 
        // tribe_get_events([
        // 'posts_per_page' => 5,
        // 'start_date'     => 'now',
        // ] );
        // get_template_part( 'template-parts/post/content', get_post_format() );

        // Ensure the global $post variable is in scope

        global $post;
        
        // Retrieve the next 5 upcoming events
        $events = tribe_get_events( [ 
            'posts_per_page' => 5,
            'start_date' => 'now',
            ] );
        
        // Loop through the events: set up each one as
        // the current post then use template tags to
        // display the title and content
        foreach ( $events as $post ) {
        setup_postdata( $post );
        
        // This time, let's throw in an event-specific
        // template tag to show the date after the title!
        echo '<li><h4><a href="' . $post->guid . '">' . $post->post_title . '</a></h4>';
        echo '<p>' . tribe_get_start_date( $post ) . '</p></li>';
        }
    
    ?>

    </ul>
</div>