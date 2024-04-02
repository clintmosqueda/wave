<?php get_header(); ?>
<?php
    global $wp_query; 
    $itemsFound = $wp_query->found_posts;
?>
<section class="penguin-video">

</section>
<section class="penguin-block">
  <div class="penguin-container">
    <div class="penguin-content">
      <div class="penguin-graphic">
        <h2 class="penguin-graphic-heading">GrApHiC WoRks</h2>
        <p class="penguin-graphic-desc">社会と人を繋ぐ。再生回数ではなくて、
        誰が見てくれたのか。温かみが入ってくる。</p>
      </div>
      <div class="penguin-cards">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); 
            $tags = get_the_terms(get_the_ID(), PENGUIN_POST_TYPE_TAG);
          ?>
            <?php import_part('card', array(
              'modifier' => 'card-alt penguin-card',
              'link' => get_permalink(),
              'image' => '',
              'title' => get_the_title(),
              'date' => get_the_time('Y.m.d'),
              'client' => get_field('client'),
              'tags' => $tags,
            ))?>
          <?php endwhile; // End Loop. ?>
        <?php endif; ?>
      </div>

      <?php import_part('pagination', array(
        'modifier' => 'penguin-pagination'
      ))?>

    </div>
  </div>
</section>
<?php
get_footer();