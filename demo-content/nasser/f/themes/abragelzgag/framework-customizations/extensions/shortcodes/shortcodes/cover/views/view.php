<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var $atts
 */
?>

<?php
if ( ! empty( $atts['background_cover']['url'] ) ) {
	$url_img  = $atts['background_cover']['url'];
	$bg_cover = ( ! empty( $url_img ) ) ? $url_img : '';
}
?>
<section id="hero-cover" style="background-image: url('<?php echo $bg_cover; ?>') !important;">
    <div id="particles-js"></div>
    <div class="overlay">

        <div class="hero-content active">
            <div class="hero-content-cell">
                <div class="container">
                    <div class="row row-rtl">
                        <div class="col-lg-6 col-md-12 ">
                            <div class="content">
                                <div class="content-cell">
                                    <div class="title-hero">
                                        <h1><?php echo $atts['title_cover'];?></h1>
                                    </div>
                                    <div class="text-hero">
                                        <p><?php echo $atts['desc_cover'];?></p>
                                    </div>
                                    <div class="link-hero">
                                        <a href="<?php echo get_page_link($atts['contact_us_button'][0]);?>" class="shadow"><span>تواصل</span> الآن</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-layer">

                            <div class="index-img layer-parallax">
                                <div class="layer" data-depth="0.30">
                                    <?php if(!empty($atts['image_cover']['url'])): ?>
                                    <img src="<?php echo $atts['image_cover']['url'];?>" alt="mockup">
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-search shadow d-none">
            <form action="<?php bloginfo('url') ?>/">
                <input type="text" name="s" placeholder="ابحث هنا ...">
                <input type="submit" value="">
            </form>
        </div>

        <div class="waves">
            <div class="wave-1"></div>
            <div class="wave-2"></div>
            <div class="wave-3"></div>
            <div class="wave-4"></div>
        </div>

    </div>
</section>

