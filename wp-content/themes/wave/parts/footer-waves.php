<div class="footer-waves">
  <?php import_part('image', array(
    'modifier' => 'footer-waves-1',
    'src' => '/images/waves/footer-wave-1.svg',
  ))?>
  <?php import_part('image', array(
    'modifier' => 'footer-waves-2',
    'src' => '/images/waves/footer-wave-2.svg',
  ))?>
  <?php import_part('image', array(
    'modifier' => 'footer-waves-3',
    'src' => '/images/waves/footer-wave-3.svg',
  ))?>
  <?php import_part('image', array(
    'modifier' => 'footer-coral-1',
    'src' => '/images/corals/coral-footer-1.png',
  ))?>
  <?php import_part('image', array(
    'modifier' => 'footer-coral-2',
    'src' => '/images/corals/coral-footer-2.png',
  ))?>
  <?php import_part('image', array(
    'modifier' => 'footer-fish-1',
    'src' => 'images/creatures/school-of-fish.png',
  ))?>
  <?php import_part('image', array(
    'modifier' => 'footer-fish-2',
    'src' => 'images/creatures/school-of-fish.png',
  ))?>
  <?php import_part('image', array(
    'modifier' => 'footer-fish-3',
    'src' => 'images/creatures/school-of-fish.png',
  ))?>
  <?php import_part('image', array(
    'modifier' => 'footer-fish-4',
    'src' => 'images/creatures/school-of-fish.png',
  ))?>

  <?php if(!is_front_page()) : ?>
    <?php import_part('image', array(
      'modifier' => 'footer-waves-4',
      'src' => '/images/waves/footer-wave-4.svg',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'footer-turtle',
      'src' => '/images/creatures/turtle-outlined.png',
    ))?>
    <?php import_part('image', array(
      'modifier' => 'footer-jellyfish',
      'src' => '/images/creatures/jellyfish-outlined.png',
    ))?>
  <?php endif; ?>
</div>