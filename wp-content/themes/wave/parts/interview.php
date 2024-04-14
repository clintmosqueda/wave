<section class="interview ">
  <div class="interview-container animate-in fade-in">
    <div class="interview-wave">
      <div class="interview-wave-1">
        <img src="<?php echo resolve_asset_url('/images/waves/interview-wave-1.svg'); ?>" alt="wave">
      </div>

      <div class="interview-bear">
        <img src="<?php echo resolve_asset_url('/images/creatures/polarbear-outlined.png'); ?>" alt="polar bear">
      </div>

      <div class="interview-wave-2">
        <img src="<?php echo resolve_asset_url('/images/waves/interview-wave-2.svg'); ?>" alt="wave">
      </div>

      <div class="interview-trash">
        <span class="interview-trash-net">
          <img src="<?php echo resolve_asset_url('/images/trash/trash-net-1.png'); ?>" alt="net">
        </span>
        <span class="interview-trash-bottle">
        <img src="<?php echo resolve_asset_url('/images/trash/trash-bottle-2.png'); ?>" alt="bottle">
        </span>
        <span class="interview-trash-tin">
        <img src="<?php echo resolve_asset_url('/images/trash/trash-tin.png'); ?>" alt="net">
        </span>
      </div>
    </div>

    <div class="wrapper">
      <div class="interview-content">
        <?php import_part('heading', array(
          'modifier' => '',
          'title_en' => 'interview history',
          'title_jp' => '取材歴',
        ));?>
        <p class="interview-desc">さまざまなお客様とお仕事してます！</p>
        <div class="interview-cards">
          <div class="swiper js-interview-carousel">
            <div class="swiper-wrapper">
            <?php 
                $interview_query = query_post(INTERVIEW_POST_TYPE, -1); 
                if($interview_query->have_posts()) :
                  while($interview_query->have_posts()): 
                    $interview_query->the_post();
                    $link = get_field('url')
              ?>
                <div class="swiper-slide">
                  <?php import_part('card-interview', array(
                    'modifier' => '',
                    'link' => $link,
                    'image' => get_eyecatch_data(get_the_ID(), 'card-interview', ''),
                    'title' => get_the_title(),
                    'desc' => 'ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト',
                  )); ?>
                </div>
                <?php endwhile; endif; ?>
            </div>
          </div>

          <?php import_part('carousel-actions', array(
            'modifier' => 'interview',
            'paginationEl' => 'js-interview-pagination',
          ))?>

        </div>
      </div>
    </div>
  </div>
</section>