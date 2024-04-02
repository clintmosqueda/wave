<?php
$modifier = empty($modifier) ? '' : $modifier.'-carousel-actions';
$navModifier = empty($navModifier) ? '' : $navModifier.'-carousel-navigation';
$paginationEl = empty($paginationEl) ? '' : $paginationEl;
$nextEl = empty($nextEl) ? '' : $nextEl;
$prevEl = empty($prevEl) ? '' : $prevEl;
?>

<div class="carousel-actions <?php echo $modifier; ?>">
  <div class="carousel-pagination <?php echo $paginationEl;?>"></div>
  <div class="carousel-navigation <?php echo $navModifier?>">
    <span class="carousel-navigation-prev <?php echo $prevEl; ?>"></span>
    <span class="carousel-navigation-next <?php echo $nextEl; ?>"></span>
  </div>
</div>