<div class="member-bio">
  <div class="member-brand">
    <span class="member-brand-logo">
      <?php import_part('wave-logo', array(
        'color' => '#3BA3D6'
      ))?>
    </span>
    <span class="member-brand-flow">
      <?php import_part('wave-flow', array(
        'color' => '#2B81A0'
      ))?>
    </span>
  </div>
  <figure class="member-profile">
    <img src="<?php echo $image;?>" alt="">
  </figure>
  <div class="member-info">
    <span class="member-position"><?php echo $position;?></span>
    <h3 class="member-name">
      <span class="member-name-jp"><?php echo $name_jp;?></span>
      <span class="member-name-en"><?php echo $name_en;?></span>
    </h3>
    <span class="member-job"><?php echo $job;?></span>
    <p class="member-desc"><?php echo $biography;?></p>
  </div>
</div>