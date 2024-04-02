<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @see https://codex.wordpress.org/Creating_an_Error_404_Page
 */
get_header(); ?>

<div class="page-404">
  <h1 class="page-404-heading">Page Not Found</h1>
  <p class="page-404-par">申し訳ございませんが、 お探しのページは見つかりませんでした。
  お客さまのお探しのページは削除されたか、もしくは移動された可能性があります。</p>
  <?php import_part('anchor', array(
    'modifier' => '',
    'anchor_link' => resolve_url(),
    'anchor_text' => 'トップページへ戻る', 
  )); ?>
</div>

<?php import_part('consultation'); ?>
<?php
get_footer();
