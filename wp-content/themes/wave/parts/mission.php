<?php
$missions = [
  array( 
    'icon' => '/images/creatures/cameriguin-1.png',
    'icon_class' => 'mission-penguin',
    'image' => '/images/mission.png'
  ),
  array( 
    'icon' => '/images/creatures/squirtle-outlined.png',
    'icon_class' => 'mission-crocs',
    'image' => '/images/mission.png'
  ),
  array( 
    'icon' => '/images/creatures/polarbear-outlined.png',
    'icon_class' => 'mission-polarbear',
    'image' => '/images/mission.png'
  ),
];

$services = get_field('services');

?>

<section class="mission">
  <div class="mission-wave"></div>
  <div class="mission-wrapper">
    <?php import_part('values')?>
    <div class="mission-content">
      <h3 class="mission-heading animate-in fade-in">Services <span>事業内容</span></h3>
      <div class="mission-cards">
        <?php 
          foreach($services as $key => $service) :
          $img = $service["service_image"] ? $service["service_image"] : resolve_asset_url('/images/mission.png');
        ?>
          <article class="mission-card animate-in fade-in">
            <figure class="mission-figure">
              <img src="<?php echo $img; ?>" alt="">
            </figure>
            <div class="mission-block">
              <?php if(!empty($missions[$key]["icon_class"])) : ?>
                <span class="mission-creature <?php echo $missions[$key]["icon_class"]?>">
                  <img src="<?php echo resolve_asset_url($missions[$key]["icon"])?>" alt="">
                </span>
              <?php endif; ?>
              <span class="mission-number"></span>
              <h4 class="mission-title"><?php echo $service["service_title"]?></h4>
              <p class="mission-desc"><?php echo $service["service_description"]?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
    
  </div>
</section>