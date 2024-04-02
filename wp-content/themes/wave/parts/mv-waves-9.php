<?php
$modifier = empty($modifier) ? '' : $modifier;
$parallex_speed = empty($parallex_speed) ? '' : $parallex_speed;
?>
<div class="mv-waves-layer mv-waves-9">
  <div class="mv-waves-inner <?php echo $modifier; ?>" data-rellax-speed="<?php echo $parallex_speed; ?>">
    <img src="<?php echo resolve_asset_url('/images/waves/mv-wave-9.svg'); ?>" alt="wave">
    <?php import_part('image', array(
      'modifier' => 'mv-coral-creatures',
      'src' => '/images/creatures/coral-creatures.png'
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-seaweed',
      'src' => '/images/corals/coral-seaweed.png'
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-bear',
      'src' => '/images/creatures/polarbear.png'
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-puffer',
      'src' => '/images/creatures/pufferfish1.png'
    ))?>
  </div>
</div>