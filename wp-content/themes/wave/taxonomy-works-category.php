<?php get_header(); ?>
<?php
    global $wp_query; 
    $itemsFound = $wp_query->found_posts;

    $args = array(
      'taxonomy' => WORKS_POST_TYPE_CATEGORY,
      'orderby' => 'name',
      'order'   => 'DESC',
      'hide_empty' => false,
    );
    $works_categories = get_categories($args);
?>
<section class="works">
  <div class="works-wrapper">
    <div class="works-content">

      <?php import_part('graphic-works')?>

      <div class="works-mid">
        <h3 class="works-mid-heading">all works</h3>
        <p class="works-desc">社会と人を繋ぐ。再生回数ではなくて、誰が見てくれたのか。温かみが入ってくる。</p>
      </div>
      <div class="works-categories">
        <a class="works-category" href="">全て</a>
        <?php foreach($works_categories as $category) : ?>
          <a class="works-category" href="<?php echo get_term_link($category->name, WORKS_POST_TYPE_CATEGORY) ?>"><?php echo $category->name; ?></a>
        <?php endforeach; ?>
      </div>
      <div class="works-cards">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); 
            $tags = get_the_terms(get_the_ID(), WORKS_POST_TYPE_TAG);
          ?>
            <?php import_part('card', array(
              'modifier' => 'card-alt',
              'link' => get_permalink(),
              'image' => get_eyecatch_data(get_the_ID(), 'card-work', ''),
              'title' => get_the_title(),
              'date' => get_the_time('Y.m.d'),
              'client' => get_field('client'),
              'tags' => $tags,
            ))?>
          <?php endwhile; // End Loop. ?>
        <?php endif; ?>
      </div>
      <div class="works-pagination">
        <?php import_part('pagination')?>
      </div>
      
    </div>
  </div>
</section>
<section class="works-graphic">
  <div class="works-graphic-bg"></div>
  <?php import_part('graphic-works')?>
</section>
<?php
get_footer();