<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
    
    
    <section class="content" role="main">
        <div class="grid">
            <div class="grid__item  ten-twelfths">
                <div class="grid">
                    <div class="grid__item  two-thirds  palm-one-whole">
    
                    <?php if ( have_posts() ) : ?>
            
                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>
            
                            <?php
                                /* Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'content', get_post_format() );
                            ?>
            
                        <?php endwhile; ?>
            
                    <?php else : ?>
            
                        <?php get_template_part( 'no-results', 'index' ); ?>
            
                    <?php endif; ?>
    
                    </div><!--
                    --><div class="grid__item  one-third  palm-one-whole">

<?php get_sidebar(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>