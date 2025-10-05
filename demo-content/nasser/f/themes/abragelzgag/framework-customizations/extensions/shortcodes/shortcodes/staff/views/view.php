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

<section id="statistics" class="staff" style="background-image: url('<?php echo $bg_cover; ?>') !important;">
    <div class="overlay section">
        <div class="container">
            <div class="title-home text-center">
                <h2><?php echo $atts['title_staff']; ?></h2>
            </div>
            <div id="staff" class="main_drag">
                <div class="staff-slider">
                    <!-- Start Swiper Container -->
                    <div class="swiper-wrapper">

						<?php foreach ( $atts['slide'] as $slide ) : ?>
                            <!-- Start One Screen -->
                            <div class="swiper-slide">
                                <div class="statistic animation" data-animation-delay=".25"
                                     data-animation-name="flipInY">
                                    <div class="avatar">

										<?php

										$id_img   = $slide['image']['attachment_id'];
										$img_size = wp_get_attachment_image( $id_img, 'kr-img-140x137' );
										if ( ! empty( $img_size ) ) {
											echo $img_size;
										}
										?>

                                    </div>
                                    <div class="title">
                                        <h5><?php echo $slide['title_box']; ?></h5>
                                    </div>
                                    <div class="count">
                                        <span><?php echo $slide['desc_box']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- End One Screen -->
						<?php endforeach; ?>

                    </div>
                    <!-- Start Swiper Slider Controls -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- End Swiper Slider Controls -->
                </div>
            </div>
        </div>
    </div>
</section>
