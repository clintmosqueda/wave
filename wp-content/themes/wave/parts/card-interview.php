<?php
$modifier = empty($modifier) ? '' : $modifier;
$link = empty($link) ? '/' : $link;
$image = empty($image) ? resolve_asset_url('/images/no-image.jpg') : $image;
$title = empty($title) ? '' : $title;
$desc = empty($desc) ? '' : $desc;
?>

<article class="card-interview <?php echo $modifier; ?>">
  <div class="card-interview-figure">
    <img src="<?php echo $image?>" alt="<?php echo $title; ?>">
  </div>
  <div class="card-interview-content">
    <h3 class="card-interview-title"><a class="card-interview-link" href="<?php echo $link; ?>"><?php echo $title; ?></a></h3>
    <p class="card-interview-desc"><?php echo $desc; ?></p>
  </div>
</article>