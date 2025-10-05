<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var $atts
 */
?>


<section id="services" class="section">

    <div class="container">
        <div class="title-home style text-center">
            <h2><?php echo $atts['title_services']; ?></h2>
        </div>
        <div class="row row-rtl services-features">
            <div class="col-lg-6 mb-30">
                <div id="features-slider" class="owl-carousel owl-theme animation" data-animation-delay=".4"
                     data-animation-name="zoomIn">

					<?php
					$images = $atts['slide'];
					foreach ( $images as $image_id ):
						$img_size = wp_get_attachment_image( $image_id['image']['attachment_id'], 'kr-img-230x430' );
						?>
                        <div class="item">
                            <div class="single-feat-img">
								<?php echo $img_size; ?>
                            </div>
                        </div>
					<?php endforeach; ?>

                </div>
            </div>

            <div class="col-lg-6">

                <div class="table-content">
                    <div class="table-content-cell">

                        <ul class="nav nav-pills mobile-nav-pills nav-stacked clearfix">

                            <li index-item="0" class="active-icon">
                                <a href="#tab_1" data-toggle="pill">

	                                <?php if($atts[0]['slide']['icon_box']['type'] == 'icon-font'): ?>
                                        <i class="<?php echo $atts[0]['about_box_2']['icon_box']['icon-class']; ?>"></i>
	                                <?php elseif ($atts[0]['slide']['icon_box']['type'] == 'custom-upload'): ?>
                                        <img src="<?php echo $atts[0]['slide']['icon_box']['url']?>" style="height: 24px; display: inline;">
	                                <?php else: ?>
                                        <i class="kr-web-design-1 bg-color"></i>
	                                <?php endif; ?>

                                </a>
                            </li>

                            <li index-item="1">
                                <a href="#tab_2" data-toggle="pill">

	                                <?php if($atts[1]['slide']['icon_box']['type'] == 'icon-font'): ?>
                                        <i class="<?php echo $atts[1]['about_box_2']['icon_box']['icon-class']; ?>"></i>
	                                <?php elseif ($atts[1]['slide']['icon_box']['type'] == 'custom-upload'): ?>
                                        <img src="<?php echo $atts[1]['slide']['icon_box']['url']?>" style="height: 24px; display: inline;">
	                                <?php else: ?>
                                        <i class="kr-smartphonesmartphone bg-color"></i>
	                                <?php endif; ?>

                                </a>
                            </li>

                            <li index-item="2">
                                <a href="#tab_3" data-toggle="pill">

	                                <?php if($atts[2]['slide']['icon_box']['type'] == 'icon-font'): ?>
                                        <i class="<?php echo $atts[2]['about_box_2']['icon_box']['icon-class']; ?>"></i>
	                                <?php elseif ($atts[2]['slide']['icon_box']['type'] == 'custom-upload'): ?>
                                        <img src="<?php echo $atts[2]['slide']['icon_box']['url']?>" style="height: 24px; display: inline;">
	                                <?php else: ?>
                                        <i class="kr-browser-window bg-color"></i>
	                                <?php endif; ?>

                                </a>
                            </li>

                            <li index-item="3">
                                <a href="#tab_4" data-toggle="pill">

	                                <?php if($atts[3]['slide']['icon_box']['type'] == 'icon-font'): ?>
                                        <i class="<?php echo $atts[3]['about_box_2']['icon_box']['icon-class']; ?>"></i>
	                                <?php elseif ($atts[3]['slide']['icon_box']['type'] == 'custom-upload'): ?>
                                        <img src="<?php echo $atts[3]['slide']['icon_box']['url']?>" style="height: 24px; display: inline;">
	                                <?php else: ?>
                                        <i class="kr-structurestructure bg-color"></i>
	                                <?php endif; ?>

                                </a>
                            </li>

                        </ul>

                        <div class="tab-content">

							<?php
							$slides  = $atts['slide'];
							$counter = 1;
							foreach ( $slides as $slide ):
								?>

                                <div class="tab-pane mobile-tab-pane <?php echo ( $counter == 1 ) ? 'active' : ''; ?>"
                                     id="tab_<?php echo $counter; ?>">
                                    <h4><?php echo $slide['title_box']; ?></h4>
                                    <p><?php echo $slide['desc_box']; ?></p>
                                </div>

								<?php
								$counter ++;
							endforeach;
							?>


                        </div>

                    </div>
                </div>


            </div>

        </div>
    </div>

    <div class="waves">
        <div class="wave-1"></div>
        <div class="wave-2"></div>
        <div class="wave-3"></div>
        <div class="wave-4"></div>
    </div>

</section>

