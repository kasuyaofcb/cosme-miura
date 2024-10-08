
<footer class="footer">
      <div class="footer__inner">
        <a class="footer__linkLogo" href="#">
          <h2 class="footer__titleLogo">
            <img
              src="<?php echo get_template_directory_uri();?>/images/logo2.png"
              alt="ロゴ"
              width="140"
              height="55"
              decoding="async"
            />
          </h2>
        </a>
        <nav>
          <ul class="footer__listMenu">
            <li class="footer__listItem">
              <a class="footer__listLink" href="#">TOP</a>
            </li>
            <li class="footer__listItem">
              <a
                class="footer__listLink"
                href="https://line.me/ja/"
                target="_blank"
                >公式LINE</a
              >
            </li>
            <li class="footer__listItem">
              <a class="footer__listLink" href="#">会社概要</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.footer__inner-->
      <p class="copyright">○○○ All Right Reserved.</p>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
