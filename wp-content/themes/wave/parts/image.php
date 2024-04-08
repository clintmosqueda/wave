<?php
$modifier = empty($modifier) ? '' : $modifier;
$src = empty($src) ? '' : resolve_asset_url($src) ;
$speed = empty($speed) ? '' : $speed;
?>

<span class="image <?php echo $modifier;?>" data-rellax-speed="<?php echo $speed; ?>" data-rellax-percentage="0.5">
  <img src="<?php echo $src; ?>" alt="">
</span>