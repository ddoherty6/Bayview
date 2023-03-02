<?php
/**
 * Template part for displaying single posts.
 */

?>
<!-- assets/template-parts/post/content --> 
<li id="post" class="row site-content">
    <!-- Post thumbnail -->
    <!-- <div>
        <div id="thumb" class="ratio ratio-1x1">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail() ; // full, large, medium, custom size
            endif;
            ?>
        </div>
    </div> -->

    <!-- div to separate image from text -->
    <div style = "margin: 5%"></div>
   
    <div class="post-text">
        <!-- Post Title -->
        <?php
        if ( is_singular() ) :
            //the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="wp-block-post-title"><a id="front-post-title" href="'.esc_url( get_permalink() ).'" target="_self" rel="">', '</a></h2>' );
        endif;
        ?>
        <div>               
            <!-- Post Content -->
            <?php if ( is_home() || is_archive() ) : ?>
            <p class="excerpt">
                <?php echo get_the_excerpt(); ?>
            </p>
            <?php elseif( is_single() ) : ?>
                <p>
                    <?php
                        the_content();

                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ninestars' ),
                            'after'  => '</div>',
                        ) );
                    ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</li>