<?php
$modifier = empty($modifier) ? '' : $modifier;
$parallex_speed = empty($parallex_speed) ? '' : $parallex_speed;
?>
<div class="mv-waves-layer mv-waves-6">
  <div class="mv-waves-inner <?php echo $modifier; ?>" data-rellax-speed="<?php echo $parallex_speed; ?>">
    <img src="<?php echo resolve_asset_url('/images/waves/mv-wave-6.svg'); ?>" alt="wave">
    <?php import_part('image', array(
      'modifier' => 'mv-trash-bag',
      'src' => '/images/trash/trash-bag.png',
    ))?>
  </div>
</div>