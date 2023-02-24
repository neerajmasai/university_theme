<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage University_Theme
 * @since Univeristy_Theme 1.0
 */

// The famous WordPress "Loop".
while( have_posts() ) {
    the_post();
    ?>
    <a href="<?php permalink_link(); ?>"><h1><?php the_title(); ?></h1></a>
    <p><?php the_excerpt(); ?></p>
    <hr>
    <?php
}

