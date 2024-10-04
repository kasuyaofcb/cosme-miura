
<footer class="footer">
      <div class="footer__inner">
        <a class="footer__link-logo" href="#">
          <h2 class="footer__title-logo">
            <img
              src="<?php echo get_template_directory_uri();?>/images/logo2.png"
              alt="ロゴ"
              class="footer__logo__img"
              width="140"
              height="55"
              decoding="async"
            />
          </h2>
        </a>
        <nav>
          <ul class="footer-nav">
            <li class="footer-nav__item">
              <a class="footer-nav__link" href="#">TOP</a>
            </li>
            <li class="footer-nav__item">
              <a
                class="footer-nav__link"
                href="https://line.me/ja/"
                target="_blank"
                >公式LINE</a
              >
            </li>
            <li class="footer-nav__item">
              <a class="footer-nav__link" href="#">会社概要</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.footer__inner-->
      <p class="copyright">○○○ All Right Reserved.</p>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/javascript/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
