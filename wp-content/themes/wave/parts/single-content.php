<div class="single-bg"></div>
<article class="single-block">
  <?php while (have_posts()) : the_post(); ?>
    <?php 
      $client = get_field('client'); 
      $year = get_field('year'); 
      $logo = get_field('logo'); 
      $video_url = get_field('video_url'); 
    ?>
    <div class="single-wrapper">
      <div class="single-container">
        <div class="single-content">
          <h1 class="single-title"><?php the_title();?></h1>
          <?php if(has_excerpt()) {?>
            <div class="single-exerpt">
              <?php the_excerpt(); ?>
            </div>
          <?php }; ?>
        
          <div class="single-body">
            <?php the_content();?>
            <?php if($logo):?>
              <div class="single-logo">
                <img src="<?php the_field('logo') ?>" alt="">
              </div>
            <?php endif;?>
          </div>
        </div>
        <aside class="single-aside">
          <?php if($client):?>
            <dl>
                <dt>CLIENT</dt>
                <dd><?php the_field('client'); ?></dd>
            </dl>
          <?php endif;?>
          <?php if($year):?>
            <dl>
                <dt>YEAR</dt>
                <dd><?php the_field('year'); ?></dd>
            </dl>
          <?php endif;?>
        </aside>
      </div>
      <?php if($video_url):?>
        <div class="single-video">
          <iframe class="single-iframe" src="<?php the_field('video_url'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      <?php endif;?>
      <div class="single-button">
        <?php import_part('button', array(
          'modifier' => '',
          'link' => WORKS_POST_TYPE == get_post_type() ? resolve_archive_url(WORKS_POST_TYPE) : resolve_archive_url(PENGUIN_POST_TYPE),
          'text' => 'all works',
        ))?>
      </div>
    </div>
  <?php endwhile; ?>
</article>