<footer class="site-footer clearfix">
    <div class="clearfix social col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <a href="<?php echo home_url(); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Site-logo"> </a>
    </div>


    <div class="footer-widget-area">
        <div class="clearfix social col-xs-6 col-sm-3 col-md-3 col-lg-3" >
            <?php if (is_active_sidebar('footer-widget-nav')) :?>
                <div class="footer-widget-nav">
                    <?php dynamic_sidebar('footer-widget-nav'); ?>
                </div>
            <?php endif; ?>

        </div>
        <div class="clearfix social col-xs-12 col-sm-6 col-md-6 col-lg-6" >
            <?php if (is_active_sidebar('footer-form')) :?>
                <div class="footer-form-wrap">
                    <?php dynamic_sidebar('footer-form'); ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>