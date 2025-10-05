<footer id="footer" <?php echo (is_front_page())? '' : 'class="footer-page"' ?>>
    <div class="container">

        <div class="logo-footer">
		    <?php if(is_front_page()): ?>
			    <?php if (is_kr_options('logo-footer')): ?>
                    <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name') ?>">
                        <img src="<?php the_kr_options('logo-footer', 'url') ?>" alt="<?php the_kr_options('alternative_logo'); ?>"/>
                    </a>
			    <?php else: ?>
                    <a href="<?php echo home_url() ?>" title="<?php bloginfo('name') ?>">
                        <img src="<?php echo KR_THEME_IMAGES_URI; ?>logo-footer.png" alt="<?php bloginfo('name') ?>"/>
                    </a>
			    <?php endif; ?>
            <?php else: ?>
			    <?php if (is_kr_options('logo')): ?>
                    <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name') ?>">
                        <img src="<?php the_kr_options('logo', 'url') ?>" alt="<?php the_kr_options('alternative_logo'); ?>"/>
                    </a>
			    <?php else: ?>
                    <a href="<?php echo home_url() ?>" title="<?php bloginfo('name') ?>">
                        <img src="<?php echo KR_THEME_IMAGES_URI; ?>logo-footer.png" alt="<?php bloginfo('name') ?>"/>
                    </a>
			    <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="description-footer text-center">
	        <?php the_kr_options('description-footer') ?>
        </div>

        <div class="social-media text-center clearfix">

	        <?php kr_social('social_icon'); ?>

        </div>
    </div>
    <div class="copyright text-center bg-color">
	    <?php the_kr_options('copyrights-footer') ?>
    </div>
</footer>

<div class="mirror"></div>

<?php wp_footer(); ?>
<?php if(is_front_page()): ?>

    <script>
        jQuery(document).ready(function () {
            jQuery('.social-media ul li a').addClass('bg-color');
        })
    </script>

<?php endif; ?>
<!-- END   JAVA SCRIPT -->
</body>
</html>