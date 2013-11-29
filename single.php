<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Wellness
 */

get_header(); ?>


    <section class="hero  hero--<?php the_ID(); ?>">
        <div class="grid">
            <div class="grid__item  ten-twelfths">
            
                <h2>The Blog</h2>
                
            </div>
        </div>
    </section>
    
    
    <section class="content">
        <div class="grid">
            <div class="grid__item  ten-twelfths">

        <?php while ( have_posts() ) : the_post(); ?>

                <h1 class="entry-title"><?php the_title(); ?></h1>
                
                <div class="grid">
                    <div class="grid__item  two-thirds  palm-one-whole">

            <?php get_template_part( 'content', 'single' ); ?>

            <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() )
                    comments_template();
            ?>

                    </div><!--

        <?php endwhile; // end of the loop. ?>

                    --><div class="grid__item  one-third  palm-one-whole">
                    
                        <div class="content__aside">
                        
<?php get_sidebar(); ?>

                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>