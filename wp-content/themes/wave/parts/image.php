<?php
$modifier = empty($modifier) ? '' : $modifier;
$src = empty($src) ? '' : resolve_asset_url($src) ;
?>

<span class="image <?php echo $modifier;?>">
  <img src="<?php echo $src; ?>" alt="">
</span>