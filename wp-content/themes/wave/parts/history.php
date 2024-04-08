<section class="history animate-in fade-in">
  <div class="history-wave">
    <img src="<?php echo resolve_asset_url('/images/waves/history-wave.svg'); ?>" alt="wave">
    <span class="history-fishes">
      <img src="<?php echo resolve_asset_url('/images/creatures/group-of-fish.png'); ?>" alt="fishes">
    </span>
    <span class="history-pufferfish">
      <img src="<?php echo resolve_asset_url('/images/creatures/pufferfish.png'); ?>" alt="fishes">
    </span>
  </div>
  <div class="wrapper">
    <div class="history-content">
      <div class="history-heading">
        <?php import_part('heading', array(
          'modifier' => 'heading-alt ',
          'title_en' => 'about history',
          'title_jp' => '私たちの歴史',
        ));?>
        <span class="history-penguin">
          <img src="<?php echo resolve_asset_url('/images/creatures/penguin-tripad-2.svg'); ?>" alt="penguin">
        </span>
      </div>
      <div class="history-text">
        <p class="history-desc">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダ</p>
        <?php import_part('button', array(
          'modifier' => 'button-alt history-button',
          'link' => resolve_url('about-us'),
          'text' => 'view all',
        ))?>
      </div>
      <div class="history-video"></div>
    </div>
  </div>
</section>