
  <?php 
    if(!is_front_page()) {
      import_part('connect');
    }
  ?>
  <div class="footer <?php echo is_front_page() ? 'is-top' : '' ?>">
    <div class="footer-content">
      <a class="footer-logo" href="<?php echo resolve_url(); ?>" ><img src="<?php echo resolve_asset_url('/images/logo-footer.png'); ?>" alt=""></a>

      <nav class="footer-nav">
        <a class="footer-link" href="">waveについて</a>
        <a class="footer-link" href="">制作実績</a>
        <a class="footer-link" href="">news</a>
        <a class="footer-link" href="">会社概要</a>
        <a class="footer-link footer-button" href="">お問い合わせ</a>
      </nav>
      <div class="footer-copyright">
        <small>© All rights reserved</small>
      </div>
    </div>
    <?php import_part('footer-waves')?>

  </div>
</div> <!-- end wrap -->
<?php wp_footer(); ?>
<script src="<?php echo resolve_asset_url('/js/app.js'); ?>"></script>
</body>

</html>