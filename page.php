<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Wellness
 */

get_header(); ?>


    <section class="hero  hero--<?php the_ID(); ?>">
        <div class="grid">
            <div class="grid__item  ten-twelfths">
            
                <h2><?php the_field( 'hero_text' ); ?></h2>
                
            </div>
        </div>
    </section>
    
    
    <section class="content">
        <div class="grid">
            <div class="grid__item  ten-twelfths">
        
<?php if ( is_front_page() ) { ?>

                <div class="grid">
                    <div class="grid__item  one-third  palm-one-whole">
                            
                        <div class="content__intro">
                        
        <?php get_sidebar(); ?>

                        </div>
                        
                    </div><!--

    <?php while ( have_posts() ) : the_post(); ?>

                    --><div class="grid__item  two-thirds  palm-one-whole">
                    
        <?php get_template_part( 'content', 'page' ); ?>

                    </div>
                    
    <?php endwhile; // end of the loop. ?>

                </div>
                
            </div>
            
<?php } elseif ( is_page( 'the-team' ) ) { ?>

    <?php while ( have_posts() ) : the_post(); ?>

                <h1 class="title--<?php the_ID(); ?>"><?php the_title(); ?></h1>
                
                <div class="grid">
                    <div class="grid__item  one-whole">
                    
        <?php get_template_part( 'content', 'page' ); ?>

                    </div>
                </div>
                
    <?php endwhile; // end of the loop. ?>

<?php } else { ?>
            
    <?php while ( have_posts() ) : the_post(); ?>

                <h1 class="title--<?php the_ID(); ?>"><?php the_title(); ?></h1>
                
                <div class="grid">
                    <div class="grid__item  two-thirds  palm-one-whole">
                    
        <?php get_template_part( 'content', 'page' ); ?>

                    </div><!--

    <?php endwhile; // end of the loop. ?>

                    --><div class="grid__item  one-third  palm-one-whole">
                    
                        <div class="content__aside">
                        
        <?php get_sidebar(); ?>

                        </div>
                        
                    </div>
                </div>
                
        <?php if ( is_page( array( 'performance' ) ) ) { ?>
        
                <div class="grid">
                    <div class="grid__item  one-whole">
                    
                        <?php the_field( 'secondary_content' ); ?>
                    
                    </div>
                </div>
        
        <?php }; ?>
                
<?php } ?>

            </div>
            
        </div>
    </section>


<?php get_footer(); ?>
