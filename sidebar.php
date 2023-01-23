<?php
/**
 * Template for sidebar.php
 */
?>
<!-- /sidebar -->
<div id="calendar" class="">
    
    <ul>
    <?php 
        // Ensure the global $post variable is in scope

        global $post;

        //$dom = new DomDocument(); //instantiate dom oject to parse Html later
        
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
            $cats = get_the_terms( $post->ID, 'tribe_events_cat' );
            $cat = $cats[0]->name;
            
            // get $post category
            // $catHtmlString = tribe_get_event_categories($post->ID); // output is string with extraneous html
            // @ $dom->loadHTML($catHtmlString); // convert string to html obj for parsing (overwrite $dom instance each time)
            // $textContent = $dom->firstElementChild->firstElementChild->textContent; // dig down to <a> element and pull text
            // $textContentArray = explode("Event Category: ", $textContent); // split event name from rest of string returned by "tribe_get_event_categories"
            // $cat = $textContentArray[1]; // whatever isnt "Event Category :" is the event category. nice one eventscalendar.
        
            if ($cat == "Events"){
                // event-specific template tag to show the date after the title
                echo '<li><h4><a href="' . $post->guid . '">' . $post->post_title . '</a></h4>';
                echo '<p>' . tribe_get_start_date( $post ) . '</p></li>';
            }
        }
        
       
    
    ?>

    </ul>
</div>