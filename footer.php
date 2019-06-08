<!-- footer-menu -->
<div id="footer-menu">
<div class="inner">
<div class="footer-logo"><a href="/">blog title</a></div><!-- /footer-logo -->
<div class="footer-sub">サブタイトルが入りますサブタイトルが入ります</div><!-- /footer-sub -->

<nav class="footer-nav">
<?php
    wp_nav_menu(
        array(
            'container'       => false,
            'depth'           => 1,
            'theme_location'  => 'footer',
            'container'       => 'nav',
            'container_class' => 'footer-nav',
            'menu_class'      => 'footer-list',
        )
    );
    ?>
</nav>

</div><!-- /inner -->
</div><!-- /footer-menu -->



<!-- footer -->
<footer id="footer">
<div class="inner">
<div class="copy">&copy; daily-trial WordPress theme All rights reserved.</div><!-- /copy -->
<div class="by">Presented by <a href="https://tokyofreelance.jp/" rel="noopener" target="_blank">東京フリーランス</a></div><!-- /by -->

</div><!-- /inner -->
</footer><!-- /footer -->



<div class="floating">
    <a href="#"><i class="fas fa-chevron-up"></i></a>
</div>

<!-- jqueryはWPデフォで読み込まれるので消してOK -->
<?php wp_footer(); ?>

</body>
</html>

