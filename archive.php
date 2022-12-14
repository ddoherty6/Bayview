<?php
/**
 * The template for displaying archive pages.
 */
get_header();
?>
<!-- /archive -->
<div id="primary" class="site-content-page">
    <ul id="content" class="site-content">
        <?php  if ( have_posts() ) :  ?>
            <?php
                // Start the loop
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
        ?>
        <?php endif; ?>
        </ul>
</div>

<?php
get_footer();