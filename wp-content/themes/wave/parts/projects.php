<section class="projects">
  <div class="projects-wave">
    <?php import_part('image', array(
      'modifier' => 'projects-seagull',
      'src' => '/images/creatures/seagulls.png'
    ))?>   
    <?php import_part('image', array(
      'modifier' => 'projects-wave-1',
      'src' => '/images/waves/project-wave-1.svg'
    ))?>
    <div class="projects-wave-2">
      <img src="<?php echo resolve_asset_url('/images/waves/project-wave-2.svg'); ?>" alt="wave">
      <?php for ($i=1; $i <=4 ; $i++) { ?>
        <?php import_part('image', array(
          'modifier' => 'projects-fish-'.$i,
          'src' => '/images/creatures/school-of-fish.png'
        ))?>
      <?php } ?>
    </div>
 
  </div>
  <div class="wrapper">
    <div class="projects-content">
      <?php import_part('heading', array(
        'modifier' => '',
        'title_en' => 'works',
        'title_jp' => '実績',
      ));?>
      <div class="projects-slider">
        <span class="projects-slider-penguin"><img src="<?php echo resolve_asset_url('/images/creatures/cameriguin-1.png'); ?>" alt="wave"></span>
        <div class="swiper js-projects-carousel">
          <div class="swiper-wrapper">
            <?php 
            $work_query = query_post(WORKS_POST_TYPE, 5);
            if($work_query->have_posts()) :
              while($work_query->have_posts()): 
                $work_query->the_post();?>
              <div class="swiper-slide">
                <?php import_part('card-project', array(
                  'modifier' => '',
                  'title' => get_the_title(),
                  'desc' => wp_strip_all_tags(get_first_paragraph()),
                  'link' => get_permalink(),
                  'image' => get_eyecatch_data(get_the_ID(), 'card-project', ''),
                )); ?>
              </div>
            <?php 
              endwhile; 
            endif; ?>
          </div>
        </div>
        <?php import_part('carousel-actions', array(
          'modifier' => 'projects',
          'paginationEl' => 'js-projects-pagination',
        ))?>
      </div>
      <div class="projects-button">
        <?php import_part('button', array(
          'modifier' => 'button-alt',
          'text' => 'view all'
        ))?>
      </div>
    </div>
  </div>
</section>