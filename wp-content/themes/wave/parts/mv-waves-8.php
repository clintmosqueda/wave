<?php
$modifier = empty($modifier) ? '' : $modifier;
$parallex_speed = empty($parallex_speed) ? '' : $parallex_speed;
?>

<div class="mv-waves-layer mv-waves-8">
  <div class="mv-waves-inner <?php echo $modifier; ?>" data-rellax-speed="<?php echo $parallex_speed; ?>">
    <img src="<?php echo resolve_asset_url('/images/waves/mv-wave-8.svg'); ?>" alt="wave">
    <?php import_part('image', array(
      'modifier' => 'mv-seaweed-snake',
      'src' => '/images/creatures/seaweed-snake.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-angel-fish',
      'src' => '/images/creatures/fish-3.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-trash-can',
      'src' => '/images/trash/trash-can-1.png',
    ))?>
  </div>
</div>