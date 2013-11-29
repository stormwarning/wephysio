<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wellness
 */

get_header(); ?>


    <section class="hero  hero--<?php the_ID(); ?>">
        <div class="grid">
            <div class="grid__item  ten-twelfths">

                <h2>
                    <?php
                        if ( is_category() ) :
                            single_cat_title();

                        elseif ( is_tag() ) :
                            single_tag_title();

                        elseif ( is_author() ) :
                            /* Queue the first post, that way we know
                             * what author we're dealing with (if that is the case).
                            */
                            the_post();
                            printf( __( 'Author: %s', 'well' ), '<span class="vcard">' . get_the_author() . '</span>' );
                            /* Since we called the_post() above, we need to
                             * rewind the loop back to the beginning that way
                             * we can run the loop properly, in full.
                             */
                            rewind_posts();

                        elseif ( is_day() ) :
                            printf( __( 'Day: %s', 'well' ), '<span>' . get_the_date() . '</span>' );

                        elseif ( is_month() ) :
                            printf( __( 'Month: %s', 'well' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

                        elseif ( is_year() ) :
                            printf( __( 'Year: %s', 'well' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

                        elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
                            _e( 'Asides', 'well' );

                        elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
                            _e( 'Images', 'well');

                        elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
                            _e( 'Videos', 'well' );

                        elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
                            _e( 'Quotes', 'well' );

                        elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
                            _e( 'Links', 'well' );

                        else :
                            _e( 'Archives', 'well' );

                        endif;
                    ?>
                </h2>

            </div>
        </div>
    </section>


    <section class="content">
        <div class="grid">
            <div class="grid__item  ten-twelfths">

        <?php if ( have_posts() ) : ?>

                <?php
                    // Show an optional term description.
                    $term_description = term_description();
                    if ( ! empty( $term_description ) ) :
                        printf( '<div class="taxonomy-description">%s</div>', $term_description );
                    endif;
                ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <div class="grid">
                    <div class="grid__item  two-thirds  palm-one-whole">

                <?php
                    /* Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );
                ?>

                    </div><!--

            <?php endwhile; ?>

        <?php else : ?>

            <?php get_template_part( 'no-results', 'archive' ); ?>

        <?php endif; ?>

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
