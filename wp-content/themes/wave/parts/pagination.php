<?php
$modifier = empty($modifier) ? '' : $modifier;
?>
<div class="pagination <?php echo $modifier; ?>">
  <div class="pagination-nav">
    <span class="pagination-prev">prev</span>
  </div>
  <ul class="pagination-list">
    <li class="pagination-item">1</li>
    <li class="pagination-item">2</li>
    <li class="pagination-item">3</li>
  </ul>
  <div class="pagination-nav">
    <span class="pagination-next">next</span>
  </div>
</div>