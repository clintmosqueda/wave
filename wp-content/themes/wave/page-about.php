<?php 
/*
* Template name: About
*/

$vision = get_field('vision');

get_header(); ?>
<div class="about ">
  <div class="animate-in fade-in">
    <?php import_part('about-bg')?>
    <div class="about-content">
      <h2 class="about-heading">our vision</h2>
      <div class="about-text">
        <p class="about-desc"><?php echo $vision?></p>
      </div>
    </div>
  </div>
</div>
<?php import_part('vision')?>
<?php import_part('mission')?>
<?php import_part('member')?>
<?php import_part('goals')?>
<?php import_part('event');?>
<!-- <?php import_part('history');?> -->
<?php
get_footer();