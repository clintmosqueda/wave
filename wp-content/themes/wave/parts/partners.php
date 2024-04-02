<?php
$partners = [
  array( 'name' => 'logo-1.png', 'width' => '84px',),
  array( 'name' => 'logo-2.png', 'width' => '179px',),
  array( 'name' => 'logo-3.png', 'width' => '142px',),
  array( 'name' => 'logo-4.png', 'width' => '117px',),
  array( 'name' => 'logo-5.png', 'width' => '136px',),
  array( 'name' => 'logo-6.png', 'width' => '144px',),
  array( 'name' => 'logo-7.png', 'width' => '180px',),
  array( 'name' => 'logo-8.png', 'width' => '163px',),
  array( 'name' => 'logo-9.png', 'width' => '142px',),
  array( 'name' => 'logo-10.png', 'width' => '171px',),
  array( 'name' => 'logo-11.png', 'width' => '134px',),
  array( 'name' => 'logo-12.png', 'width' => '76px',),
  array( 'name' => 'logo-13.png', 'width' => '127px',),
] 
?>

<section class="partners">
  <div class="partners-waves">
    <img src="<?php echo resolve_asset_url('/images/waves/partners-wave-1.svg'); ?>" alt="wave">
    <span class="partners-fish"><img src="<?php echo resolve_asset_url('/images/creatures/fish.png'); ?>" alt="wave"></span>
    <span class="partners-plastic"><img src="<?php echo resolve_asset_url('/images/trash/trash-plastic.png'); ?>" alt="wave"></span>
  </div>
  <div class="wrapper">
    <div class="partners-content">
      <p class="partners-label">さまざまなお客様とお仕事してます！</p>
      <ul class="partners-list">
        <?php foreach($partners as $partner) { ?>
          <li class="partners-item">
            <figure class="partners-figure" style="width: <?php echo $partner["width"]; ?>">
              <img src="<?php echo resolve_asset_url('/images/partners/'.$partner["name"]); ?>" alt="">
            </figure>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</section>