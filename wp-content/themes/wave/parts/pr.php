<section class="pr">
  <div class="pr-sun">
    <?php import_part('sun', array(
      'modifier' => ''
    ))?>
  </div>
  <div class="pr-turtle">
    <img src="<?php echo resolve_asset_url('/images/creatures/turtle-outlined.png'); ?>" alt="turtle">
  </div>
  <div class="pr-octopus">
    <img src="<?php echo resolve_asset_url('/images/creatures/octopus-outlined.png'); ?>" alt="octopus">
  </div>
  <div class="pr-jellyfish">
    <img src="<?php echo resolve_asset_url('/images/creatures/jellyfish-outlined.png'); ?>" alt="jellyfish">
  </div>
  <div class="pr-wave">
    <img src="<?php echo resolve_asset_url('/images/waves/pr-wave.svg'); ?>" alt="wave">
  </div>
  <div class="pr-wrapper">
    <div class="wrapper">
      <div class="pr-content">
        <h3 class="pr-heading">
          <span class="pr-heading-en">news</span>
          <span class="pr-heading-squiggly"></span>
          <span class="pr-heading-jp">お知らせ</span>
        </h3>
        <div class="pr-articles">
          <div class="pr-camerenguin">
            <img src="<?php echo resolve_asset_url('/images/creatures/cameriguin.svg'); ?>" alt="penguin">
          </div>
          <div class="pr-list">
            <?php 
              $news_query = query_post(NEWS_POST_TYPE, 3); 
              if($news_query->have_posts()) :
                while($news_query->have_posts()): 
                  $news_query->the_post();
                  $link = get_field('url')
            ?>
              <a class="pr-item" href="<?php echo $link; ?>" target="_blank">
                <span class="pr-date"><?php the_time('Y.m.d'); ?></span>
                <p class="pr-title"><?php the_title();?></p>
              </a>
            <?php endwhile; endif; ?>
          </div>
          <a href="<?php echo resolve_archive_url(NEWS_POST_TYPE); ?>" class="pr-button">view all</a>
        </div>
      </div>
    </div>
  </div>
</section>