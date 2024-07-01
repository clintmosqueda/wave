<?php
$partners = [
  array( 'name' => 'brand-1.png', 'width' => '285px',),
  array( 'name' => 'brand-2.png', 'width' => '395px',),
  array( 'name' => 'brand-3.png', 'width' => '293px',),
  array( 'name' => 'brand-4.png', 'width' => '420px',),
  array( 'name' => 'brand-5.png', 'width' => '283px',),
  array( 'name' => 'brand-6.png', 'width' => '263px',),
  array( 'name' => 'brand-7.png', 'width' => '255px',),
  array( 'name' => 'brand-8.png', 'width' => '188px',),
  array( 'name' => 'brand-9.png', 'width' => '388px',),
  array( 'name' => 'brand-10.png', 'width' => '593px',),
  array( 'name' => 'brand-11.png', 'width' => '339px',),
  array( 'name' => 'brand-12.png', 'width' => '199px',),
  array( 'name' => 'brand-13.png', 'width' => '294px',),
  array( 'name' => 'brand-14.png', 'width' => '405px',),
  array( 'name' => 'brand-15.png', 'width' => '662px',),
  array( 'name' => 'brand-16.png', 'width' => '350px',),
  array( 'name' => 'brand-17.png', 'width' => '278px',),
  array( 'name' => 'brand-18.png', 'width' => '510px',),
  array( 'name' => 'brand-19.png', 'width' => '506px',),
] 
?>

<section class="partners animate-in fade-in">
  <div class="partners-waves">
    <!-- <img src="<?php echo resolve_asset_url('/images/waves/partners-wave-1.svg'); ?>" alt="wave"> -->
    <span class="partners-fish"><img src="<?php echo resolve_asset_url('/images/creatures/fish.png'); ?>" alt="wave"></span>
    <span class="partners-plastic"><img src="<?php echo resolve_asset_url('/images/trash/trash-plastic.png'); ?>" alt="wave"></span>
  </div>
  <div class="wrapper">
    <div class="partners-content">
      <p class="partners-label">さまざまなお客様とお仕事してます！</p>
      <ul class="partners-list">
        <?php foreach($partners as $partner) { ?>
          <li class="partners-item">
            <figure class="partners-figure" style="max-width: <?php echo $partner["width"]; ?>">
              <img src="<?php echo resolve_asset_url('/images/partners/'.$partner["name"]); ?>" alt="">
            </figure>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</section>