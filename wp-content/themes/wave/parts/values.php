<?php
$values = get_field('values');
?>

<section class="values animate-in fade-in">
  <div class="values-block">
    <div class="values-graphic">
      <h3 class="values-heading">our values</h3>
      <a class="values-logo" href="">
        <img src="<?php echo resolve_asset_url('/images/creatures/penguin-logo.png')?>" alt="">
      </a>
      <?php import_part('sun', array(
        'modifier' => 'values-sun rellax',
        'speed' => '1.5'
      ))?>
    </div>
  </div>
  <div class="values-content">
    <p class="values-desc"><?php echo $values; ?></p>
  </div>
</section>