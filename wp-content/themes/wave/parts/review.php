<section class="review">
  <div class="review-wave">
    <span class="review-shark">
      <img src="<?php echo resolve_asset_url('/images/creatures/shark-outlined.png'); ?>" alt="shark">
    </span>
    <span class="review-seaweed-crab">
      <img src="<?php echo resolve_asset_url('/images/creatures/seaweed-crab.png'); ?>" alt="shark">
    </span>
    <span class="review-wave-1"><img src="<?php echo resolve_asset_url('/images/waves/review-wave-1.svg'); ?>" alt="wave"></span>
  </div>
  <div class="wrapper">
    <div class="review-content">
      <div class="review-heading">
        <?php import_part('heading', array(
          'modifier' => 'heading-alt',
          'title_en' => 'customer voice',
          'title_jp' => 'お客様のお声',
        ));?>
        <span class="review-octopus"><img src="<?php echo resolve_asset_url('/images/creatures/octopus.png'); ?>" alt=""></span>
      </div>
      <div class="review-list">
        <div class="js-review-carousel">
          <div class="swiper-wrapper">
            <?php if( have_rows('review', 'option') ): ?>
              <?php while( have_rows('review', 'option') ) : the_row(); ?>
                <div class="swiper-slide review-slide">
                  <div class="review-item">
                    <?php import_part('card-review', array(
                      'modifier' => '',
                      'link' => '',
                      'avatar' => get_sub_field('logo'),
                      'ratings' => get_sub_field('rating'),
                      'review' => get_sub_field('description'),
                      'name' => get_sub_field('name'),
                      'position' => get_sub_field('position'),
                      'company' => get_sub_field('company_name')
                    )); ?>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <?php import_part('carousel-actions', array(
          'modifier' => 'review',
          'navModifier' => 'review',
          'paginationEl' => 'js-review-pagination',
        ))?>
      </div>
    </div>
  </div>
</section>