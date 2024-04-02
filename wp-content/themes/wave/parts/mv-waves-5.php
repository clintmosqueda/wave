<?php
$modifier = empty($modifier) ? '' : $modifier;
$parallex_speed = empty($parallex_speed) ? '' : $parallex_speed;
?>
<div class="mv-waves-layer mv-waves-5">
  <div class="mv-waves-inner <?php echo $modifier; ?>" data-rellax-speed="<?php echo $parallex_speed; ?>">
    <img class="mv-waves-5-image" src="<?php echo resolve_asset_url('/images/waves/mv-wave-5.svg'); ?>" alt="wave">
    <?php import_part('image', array(
      'modifier' => 'mv-turtle',
      'src' => '/images/creatures/turtle.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-dolphin',
      'src' => '/images/creatures/dolphin.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-net',
      'src' => '/images/trash/trash-net.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-jellyfishies',
      'src' => '/images/creatures/jellyfishies.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-angel-fish-small',
      'src' => '/images/creatures/fish-3.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-grofish',
      'src' => '/images/creatures/group-of-fish-1.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-bottle',
      'src' => '/images/trash/trash-bottle-3.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-trash-tin',
      'src' => '/images/trash/trash-tin-2.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-sardines-2',
      'src' => '/images/creatures/school-of-fish.png'
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-sardines-3',
      'src' => '/images/creatures/school-of-fish.png'
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-sardines-4',
      'src' => '/images/creatures/school-of-fish.png'
    ))?>
  </div>
</div>