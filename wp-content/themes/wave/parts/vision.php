<?php
$mission = get_field('mission');
$mission_video = get_field('mission_video');
?>

<section class="vision animate-in fade-in">
  <div class="vision-content">
    <span class="vision-dolphin">
      <img src="<?php echo resolve_asset_url('/images/creatures/dolphin-outlined.png')?>" alt="">
    </span>
    <h3 class="vision-heading">our mission</h3>
    <div class="vision-video">
      <?php echo $mission_video;?>
    </div>
    <div class="vision-descriptions">
    <p class="vision-desc"><?php echo $mission;?></p>
    </div>
  </div>
</section>