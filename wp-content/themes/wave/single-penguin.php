<?php
/**
 * The template for displaying all single posts.
 *
 * @see    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
get_header(); ?>
  <div class="single-post-type">
    <?php import_part('single-content')?>
  </div>
<?php
get_footer();