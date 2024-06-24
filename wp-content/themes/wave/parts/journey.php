<?php 
$journey = get_field('journey', 'option');
?>
<section class="journey">
  <?php import_part('journey-wave'); ?>
  <div class="wrapper">
    <div class="journey-content">
      <div class="journey-container">
        <?php foreach($journey as $journy):?>
          <article class="journey-article">
          <div class="journey-text">
            <p class="journey-desc"><?php echo $journy["journey_description"]; ?></p>
          </div>
        </article>
        <?php endforeach;?>
      </div>
      <div class="journey-button">
        <?php import_part('button', array(
          'modifier' => '',
          'link' => resolve_url('about-us'),
          'text' => 'view more'
        ))?>
      </div>
    </div>

  </div>
</section>