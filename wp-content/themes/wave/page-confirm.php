<?php 
/*
* Template name: Confirm
*/
get_header(); ?>
<?php import_part('page-heading', array(
  'modifier' => '',
  'heading_en' => 'contact',
  'heading_jp' => 'お問い合わせ',
))?>
<section class="contact">
  <div class="contact-wave">
    <span class="contact-fish"><img src="<?php echo resolve_asset_url('/images/creatures/group-of-fish.png'); ?>" alt=""></span>
  </div>
  <div class="contact-container">
    <div class="contact-content">
      <div class="contact-form">
        <?php while (have_posts()) : the_post(); ?>
          <?php remove_filter ('the_content', 'wpautop'); the_content();?>
        <?php endwhile; ?>
      </div>
      <aside class="contact-aside">
        <div class="contact-logo">
          <a class="contact-logo-image" href="/"><img src="<?php echo resolve_asset_url('/images/logo-contact.png'); ?>" alt="company logo"></a>
        </div>
        <a class="contact-tel" href="">03・0000・0000</a>
        <div class="contact-sns">
          <span class="contact-sns-label">フォローはこちら</span>
          <a class="contact-sns-instagram" target="_blank" href="https://www.instagram.com">
            <img src="<?php echo resolve_asset_url('/images/instagram.png'); ?>" alt="instagram">
          </a>
        </div>
      </aside>
    </div>
  </div>
</section>
<?php
get_footer();