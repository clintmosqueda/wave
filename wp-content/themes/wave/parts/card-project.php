<?php
$modifier = empty($modifier) ? '' : $modifier;
$title = empty($title) ? '' : $title;
$desc = empty($desc) ? '' : $desc;
$link = empty($link) ? '/' : $link;
$image = empty($image) ? resolve_asset_url('/images/no-image.jpg') : $image;
?>

<article class="card-project <?php echo $modifier; ?>">
  <div class="card-project-content">
    <span class="card-project-label"></span>
    <h3 class="card-project-title"><?php echo $title; ?></h3>
    <p class="card-project-desc"><?php echo $desc; ?></p>
    <a class="card-project-link" href="<?php echo $link;?>">view more</a>
  </div>
  <figure class="card-project-figure">
    <img src="<?php echo $image;?>" alt="">
  </figure>
</article>