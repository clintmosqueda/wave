<?php
$modifier = empty($modifier) ? '' : $modifier;
$speed = empty($speed) ? '' : $speed;
?>
<div class="mv-waves-layer mv-waves-3">
  <div class="mv-waves-inner <?php echo $modifier; ?>" data-rellax-speed="<?php echo $speed; ?>">
    <img class="mv-waves-3-image" src="<?php echo resolve_asset_url('/images/waves/mv-wave-3.svg'); ?>" alt="wave">
    <?php import_part('image', array(
      'modifier' => 'mv-couple-fish',
      'src' => '/images/creatures/fish-5.png'
    ))?>
  </div>
</div>