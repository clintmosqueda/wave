<?php
$modifier = empty($modifier) ? '' : $modifier;
$link = empty($link) ? '/' : $link;
$avatar = empty($avatar) ? resolve_asset_url('/images/no-image.jpg') : $avatar;
$ratings = empty($ratings) ? 1 : (int)$ratings;
$review = empty($review) ? '' : $review;
$name = empty($name) ? '' : $name;
$position = empty($position) ? '' : $position;
$company = empty($company) ? '' : ','.$company;
?>

<article class="card-review <?php echo $modifier; ?>">
  <div class="card-review-rating">
    <?php for ($i=1; $i <= 5 ; $i++) { ?>
      <span>
        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.07088 0.612343C9.41462 -0.204115 10.5854 -0.204114 10.9291 0.612346L12.9579 5.43123C13.1029 5.77543 13.4306 6.01061 13.8067 6.0404L19.0727 6.45748C19.9649 6.52814 20.3267 7.62813 19.6469 8.2034L15.6348 11.5987C15.3482 11.8412 15.223 12.2218 15.3106 12.5843L16.5363 17.661C16.744 18.5211 15.7969 19.201 15.033 18.7401L10.5245 16.0196C10.2025 15.8252 9.7975 15.8252 9.47548 16.0196L4.96699 18.7401C4.20311 19.201 3.25596 18.5211 3.46363 17.661L4.68942 12.5843C4.77698 12.2218 4.65182 11.8412 4.36526 11.5987L0.353062 8.2034C-0.326718 7.62813 0.0350679 6.52814 0.927291 6.45748L6.19336 6.0404C6.5695 6.01061 6.89716 5.77543 7.04207 5.43123L9.07088 0.612343Z" fill="#a8a8a8"/>
        </svg>
      </span>
    <?php } ?>
    <div class="card-review-rating-filled">
      <?php for ($i=1; $i <= $ratings ; $i++) { ?>
        <span>
          <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.07088 0.612343C9.41462 -0.204115 10.5854 -0.204114 10.9291 0.612346L12.9579 5.43123C13.1029 5.77543 13.4306 6.01061 13.8067 6.0404L19.0727 6.45748C19.9649 6.52814 20.3267 7.62813 19.6469 8.2034L15.6348 11.5987C15.3482 11.8412 15.223 12.2218 15.3106 12.5843L16.5363 17.661C16.744 18.5211 15.7969 19.201 15.033 18.7401L10.5245 16.0196C10.2025 15.8252 9.7975 15.8252 9.47548 16.0196L4.96699 18.7401C4.20311 19.201 3.25596 18.5211 3.46363 17.661L4.68942 12.5843C4.77698 12.2218 4.65182 11.8412 4.36526 11.5987L0.353062 8.2034C-0.326718 7.62813 0.0350679 6.52814 0.927291 6.45748L6.19336 6.0404C6.5695 6.01061 6.89716 5.77543 7.04207 5.43123L9.07088 0.612343Z" fill="#E9A96F"/>
          </svg>
        </span>
      <?php } ?>
    </div>
  </div>
  <h3 class="card-review-desc"><a class="card-review-link" href="<?php echo $link; ?>"><?php echo $review; ?></a></h3>
  <div class="card-review-information">
    <figure class="card-review-avatar">
      <img src="<?php echo $avatar; ?>" alt="">
    </figure>
    <div class="card-review-detail">
      <span class="card-review-name"><?php echo $name;?></span>
      <p class="card-review-info"><?php echo $position;?><?php echo $company;?></p>
    </div>
  </div>
</article>