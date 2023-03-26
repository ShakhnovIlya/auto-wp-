<footer class="footer">
    <div class="container">
      <div class="footer__inner">
        <a class="logo" href="#"></a>
          <img class="logo__img" src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="logo">
        </a>
        <div class="social footer__social">
          <a class="social__link" href="<?php the_field("instagram-link");?>">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/instagram.svg" alt="instagram icon">
          </a>
          <a class="social__link" href="<?php the_field("telegram-link");?>">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/telegram.svg" alt="telegram icon">
          </a>
          <a class="social__link" href="<?php the_field("whatsapp-link");?>">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/whatsapp.svg" alt="whatsapp icon">
          </a>
          <a class="social__link" href="<?php the_field("facebook-link");?>">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/facebook.svg" alt="facebook icon">
          </a>
        </div>
        <a class="footer__copy" href="<?php echo get_page_link(75);?>">
          Политика конфиденциальности
        </a>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>

