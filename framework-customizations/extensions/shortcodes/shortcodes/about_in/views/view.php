<?php
if (!defined('FW'))
	die('Forbidden');

/**

 * @var $atts

 */
?>

<section id="about" class="section">
    <div class="container">
        <div class="row row-rtl">
            <div class="col-md-6">
                <div class="title-home">
                    <h2><?php echo $atts['title_about'] ?></h2>
                </div>
                <div class="text-home">
                    <p><?php echo $atts['desc_about'] ?></p>
                </div>
            </div>
            <div class="col-md-6">

	            <?php

	            $id_img  = $atts['image_box']['attachment_id'];
	            $img_size = wp_get_attachment_image( $id_img, 'kr-img-525x427' );
	            if(!empty($img_size)):
		            ?>
                    <div class="about-image animation" data-animation-delay=".4" data-animation-name="zoomIn">
	                    <?php echo $img_size; ?>
                    </div>
	            <?php endif; ?>

            </div>
        </div>
    </div>
</section>
