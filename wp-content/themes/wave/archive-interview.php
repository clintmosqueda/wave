<?php get_header(); ?>
<?php
    global $wp_query; 
    $itemsFound = $wp_query->found_posts;
?>
<?php import_part('page-heading', array(
  'modifier' => '',
  'heading_en' => 'interview',
  'heading_jp' => '取 材',
))?>

<div class="archive">
  <div class="archive-wave">
    <img src="<?php echo resolve_asset_url('/images/waves/archive-wave.svg'); ?>" alt="wave">
  </div>
  <div class="archive-wrapper">
    <div class="archive-content">
      <div class="archive-filters">
        <a class="archive-filters-button <?php echo is_post_type_archive('news') ? 'is-active' : '' ?>" href="<?php echo resolve_archive_url(NEWS_POST_TYPE); ?>">お知らせ</a>
        <a class="archive-filters-button <?php echo is_post_type_archive('interview') ? 'is-active' : '' ?>" href="<?php echo resolve_archive_url(INTERVIEW_POST_TYPE); ?>">取 材</a>
      </div>
      <div class="archive-cards">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); 
          $link = get_field('url')
        ?>
          <?php import_part('card', array(
            'modifier' => '',
            'link' => $link,
            'image' => get_eyecatch_data(get_the_ID(), 'card-news', ''),
            'title' => get_the_title(),
            'date' => get_the_time('Y.m.d'),
            'external' => '_blank'
          ))?>
          <?php endwhile; // End Loop. ?>
        <?php endif; ?>
      </div>
      <div class="archive-pagination">
        <?php import_part('pagination')?>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();