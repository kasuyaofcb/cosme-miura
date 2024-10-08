<?php get_header(); ?>
<main>
<div class="page404__container">
  <h1 class="page404__title">404 Not Found</h1>
  <p class="page404__text">お探しのページは移動したか削除されています。</p>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="page404__link">トップに戻る</a>
</div>
</main>
<?php get_footer(); ?>
