<?php
$modifier = empty($modifier) ? '' : $modifier;
$parallex_speed = empty($parallex_speed) ? '' : $parallex_speed;
?>
<div class="mv-waves-layer mv-waves-7">
  <div class="mv-waves-inner <?php echo $modifier; ?>" data-rellax-speed="<?php echo $parallex_speed; ?>">
    <img class="mv-waves-7-image" src="<?php echo resolve_asset_url('/images/waves/mv-wave-7.svg'); ?>" alt="wave">
    <?php import_part('image', array(
      'modifier' => 'mv-squirtle',
      'src' => '/images/creatures/squirtle.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-seaweed-leaf',
      'src' => '/images/creatures/seaweed.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-shark',
      'src' => '/images/creatures/shark.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-sponge',
      'src' => '/images/corals/coral-sponge.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-snapper',
      'src' => '/images/creatures/fish-4.png',
    ))?>


  </div>
</div>