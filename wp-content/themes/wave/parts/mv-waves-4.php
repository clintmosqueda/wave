<?php
$modifier = empty($modifier) ? '' : $modifier;
$parallex_speed = empty($parallex_speed) ? '' : $parallex_speed;
?>
<div class="mv-waves-layer mv-waves-4 ">
<div class="mv-waves-inner <?php echo $modifier; ?>" data-rellax-speed="<?php echo $parallex_speed; ?>">
  <img src="<?php echo resolve_asset_url('/images/waves/mv-wave-4.svg'); ?>" alt="wave">
  <?php import_part('image', array(
    'modifier' => 'mv-nesting',
    'src' => '/images/creatures/nesting.png'
  ))?>
  <?php import_part('image', array(
    'modifier' => 'mv-sardines-1',
    'src' => '/images/creatures/school-of-fish.png'
  ))?>
</div>
</div>