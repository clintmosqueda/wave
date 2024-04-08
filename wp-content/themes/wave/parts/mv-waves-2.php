<?php
$modifier = empty($modifier) ? '' : $modifier;
$speed = empty($speed) ? '' : $speed;
?>

<div class="mv-waves-layer mv-waves-2">
<div class="mv-waves-inner <?php echo $modifier; ?>" data-rellax-speed="<?php echo $speed; ?>">
  <img src="<?php echo resolve_asset_url('/images/waves/mv-wave-2.svg'); ?>" alt="wave">
  <?php import_part('image', array(
    'modifier' => 'mv-ducks',
    'src' => '/images/creatures/ducks.png'
  ))?>
</div>
</div>