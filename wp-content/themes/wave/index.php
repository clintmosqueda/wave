<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>
<?php import_part('mv');?>
<?php import_part('journey');?>
<?php import_part('about-us');?>
<?php import_part('partners');?>
<?php import_part('projects');?>
<?php import_part('review');?>
<?php import_part('interview');?>
<?php import_part('pr');?>

<?php
get_footer();

