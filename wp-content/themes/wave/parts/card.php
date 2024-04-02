<?php
$modifier = empty($modifier) ? '' : $modifier;
$link = empty($link) ? '/' : $link;
$image = empty($image) ? resolve_asset_url('/images/no-image.jpg') : $image;
$title = empty($title) ? '' : $title;
$date = empty($date) ? '' : $date;
$client = empty($client) ? '' : $client;
$tags = empty($tags) ? '' : $tags;
$external = empty($external) ? '_self' : $external;
?>

<article class="card <?php echo $modifier;?>">
  <figure class="card-figure">
    <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
  </figure>
  <div class="card-block">
    <a class="card-link" href="<?php echo $link;?>" target="<?php echo $external; ?>">
      <h3 class="card-title">
        <?php echo $title; ?>
        <span class="card-icon"></span>
      </h3>
    </a>
    <time class="card-time"><?php echo $date; ?></time>
  </div>
  <?php if(!empty($client)) : ?>
    <span class="card-client"><?php echo $client; ?></span>
  <?php endif; ?>
  <?php if(!empty($tags)) : ?>
    <div class="card-tags">
      <?php foreach($tags as $tag ) { ?>
        <span class="card-tag"><?php echo $tag->name; ?></span>
      <?php } ?>
    </div>
  <?php endif; ?>
</article>