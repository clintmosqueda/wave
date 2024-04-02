<?php get_header(); ?>
<?php
    global $wp_query; 
    $itemsFound = $wp_query->found_posts;
?>
<?php import_part('page-heading', array(
  'modifier' => '',
  'heading_en' => 'news',
  'heading_jp' => 'お知らせ',
))?>

<?php
get_footer();