<?php
$events = get_field('events');
?>

<?php if(!empty($events)) :?>

<div class="event">
  <div class="wrapper">

    <div class="event-container">
      <div class="event-cards">
        <?php foreach($events as $event) :?>
          <div class="event-card">
            <figure class="event-image">
              <img src="<?php echo $event["event_image"]?>" alt="">
            </figure>
            <div class="event-text">
              <span class="event-year"><?php echo $event["event_year"]?></span>
              <h2 class="event-heading"><?php echo $event["event_name"]?></h2>
              <p class="event-description"><?php echo $event["event_description"]?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="event-timeline">
        <?php foreach($events as $event) :?>
          <span class="event-timeline-year"><?php echo $event["event_year"]?></span>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</div>

<?php endif;?>