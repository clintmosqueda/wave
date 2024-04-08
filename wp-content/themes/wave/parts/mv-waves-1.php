<?php
$modifier = empty($modifier) ? '' : $modifier;
$speed = empty($speed) ? '' : $speed;
?>

<div class="mv-waves-1 <?php echo $modifier; ?>" data-rellax-speed="<?php echo $speed; ?>">
  <?php import_part('image', array(
    'modifier' => 'mv-penguin',
    'src' => '/images/creatures/penguin.png'
  ))?>
  <img class="mv-waves-1-image" src="<?php echo resolve_asset_url('/images/waves/mv-wave-1.svg'); ?>" alt="wave">
  <?php import_part('image', array(
    'modifier' => 'mv-flying-fish',
    'src' => '/images/creatures/flying-fish.png'
  ))?>
</div>