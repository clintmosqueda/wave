<?php
$modifier = empty($modifier) ? '' : $modifier;
$speed = empty($speed) ? '' : $speed;
?>
<div class="mv-waves-layer mv-waves-10">
  <div class="mv-waves-inner <?php echo $modifier; ?>" data-rellax-speed="<?php echo $speed; ?>">
    <!-- <span class="mv-stem-rock">
      <img src="<?php echo resolve_asset_url('/images/corals/coral-stem-rock.png'); ?>" alt="corals">
    </span> -->
    <img src="<?php echo resolve_asset_url('/images/waves/mv-wave-10.svg'); ?>" alt="wave">
    <?php import_part('image', array(
      'modifier' => 'mv-stem-rock',
      'src' => '/images/corals/coral-stem-rock.png'
    ))?>
    <?php import_part('image', array(
      'modifier' => 'mv-starfish',
      'src' => '/images/creatures/starfish.png'
    ))?>
  </div>
</div>