<?php
$modifier = empty($modifier) ? '' : $modifier;
?>
<div class="pagination <?php echo $modifier; ?>">
  <?php 
    previous_posts_link('<div class="pagination-nav"><span class="pagination-prev">prev</span></div>');
    if (get_previous_posts_link() == '') {
    echo '<div class="pagination-nav is-disabled"><span class="pagination-prev">prev</span></div>';
    }

    wp_pagenavi(); 

    next_posts_link('<div class="pagination-nav"><span class="pagination-next">next</span></div>');
    if (get_next_posts_link() == '') {
    echo '<div class="pagination-nav is-disabled"><span class="pagination-next">next</span></div>';
    }
  ?>
    <!-- <div class="pagination-nav"><span class="pagination-prev">prev</span></div> -->
  <!-- <ul class="pagination-list">
    <li class="pagination-item">1</li>
    <li class="pagination-item">2</li>
    <li class="pagination-item">3</li>
  </ul> -->
  <!-- <div class="pagination-nav"><span class="pagination-next">next</span></div> -->
</div>