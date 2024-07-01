<?php
$members = get_field('members');
?>
<section class="member">
  <div class="member-content">
    <div class="wrapper">
      <div class="member-top animate-in fade-in">
        <h3 class="member-heading ">member</h3>
        <span class="member-bottle">
          <img src="<?php echo resolve_asset_url('/images/trash/trash-bottle-2.png');?>" alt="">
        </span>
      </div>
    </div>

    <div class="member-carousel animate-in fade-in">
      <div class="member-slider swiper js-member-slider">
        <div class="swiper-wrapper">
          <?php foreach($members as $member) :?>
            <div class="swiper-slide">
              <?php import_part('card-member', array(
                'image' => $member["portrait"],
                'position' => $member["position"],
                'name_jp' => $member["name_jp"],
                'name_en' => $member["name_en"],
                'job' => $member["job"],
                'biography' => $member["biography"],
              ))?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>


  </div>
</section>