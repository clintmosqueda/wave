<div class="journey-bg">
  <div class="journey-waves">
    <img src="<?php echo resolve_asset_url('/images/waves/journey-wave-1.svg'); ?>" alt="wave">

    <div class="journey-wave journey-wave-2">
      <?php import_part('image', array(
        'modifier' => '',
        'src' => '/images/waves/journey-wave-2.svg'
      ))?>
    </div>

    <div class="journey-wave journey-wave-3">
      <?php import_part('image', array(
        'modifier' => '',
        'src' => '/images/waves/journey-wave-3.svg'
      ))?>
      <?php import_part('image', array(
        'modifier' => 'journey-flying-fish',
        'src' => '/images/creatures/flying-fish-outlined.png'
      ))?>
      <?php import_part('image', array(
        'modifier' => 'journey-squirtle',
        'src' => '/images/creatures/squirtle-outlined.png'
      ))?>
      <?php import_part('image', array(
        'modifier' => 'journey-tin',
        'src' => '/images/trash/trash-tin.png'
      ))?>
    </div>
    
    <div class="journey-wave journey-wave-4">
      <?php import_part('image', array(
        'modifier' => '',
        'src' => '/images/waves/journey-wave-4.svg'
      ))?>
      <?php import_part('image', array(
        'modifier' => 'journey-plastic',
        'src' => '/images/trash/trash-plastic.png'
      ))?>
      <?php import_part('image', array(
        'modifier' => 'journey-penguin',
        'src' => '/images/creatures/penguin-outlined.png'
      ))?>
      <?php import_part('image', array(
        'modifier' => 'journey-group-fish',
        'src' => '/images/creatures/fish-1.png'
      ))?>
      <?php import_part('image', array(
        'modifier' => 'journey-starfish',
        'src' => '/images/creatures/starfish-outlined.png'
      ))?>
    </div>

    <div class="journey-wave journey-wave-5">
      <?php import_part('image', array(
        'modifier' => '',
        'src' => '/images/waves/journey-wave-5.svg'
      ))?>
      <?php import_part('image', array(
        'modifier' => 'journey-jellyfish',
        'src' => '/images/creatures/jellyfish-outlined.png'
      ))?>
      <?php import_part('image', array(
        'modifier' => 'journey-bear',
        'src' => '/images/creatures/polarbear-outlined.png'
      ))?>
      <?php import_part('image', array(
        'modifier' => 'journey-bottle',
        'src' => '/images/trash/trash-bottle.png'
      ))?>
      <?php import_part('image', array(
        'modifier' => 'journey-yellow-fish',
        'src' => '/images/creatures/fish-2.png'
      ))?>
    </div>

    <div class="journey-wave journey-wave-6">
      <?php import_part('image', array(
        'modifier' => '',
        'src' => '/images/waves/journey-wave-6.svg'
      ))?>
    </div>

  </div>
  <?php for ($i=1; $i <=6 ; $i++) { ?>
    <?php import_part('image', array(
      'modifier' => 'journey-fish journey-fish-'.$i,
      'src' => 'images/creatures/school-of-fish.png'
    ))?>
  <?php }?>
</div>