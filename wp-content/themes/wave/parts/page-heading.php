<?php
$modifier = empty($modifier) ? '' : $modifier;
$heading_en = empty($heading_en) ? '' : $heading_en;
$heading_jp = empty($heading_jp) ? '' : $heading_jp;
?>
<section class="page-heading <?php echo $modifier; ?>">
  <div class="page-heading-wave"></div>
  <div class="wrapper">
    <div class="page-heading-content">
      <h1 class="page-heading-header">
        <span class="page-heading-header-en"><?php echo $heading_en;?></span>
        <span class="page-heading-header-jp"><?php echo $heading_jp?></span>
      </h1>
    </div>
  </div>
</section>