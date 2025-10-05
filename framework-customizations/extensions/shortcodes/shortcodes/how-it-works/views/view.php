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

<section id="steps-work" class="section">
    <div class="container">

        <div class="title-home style text-center">
            <h2><?php echo $atts['title']; ?></h2>
        </div>

        <div class="steps-work row row-rtl">

            <div class="col-md-6 mb-10 animation" data-animation-delay=".25" data-animation-name="flipInY">
				<?php
				$counter = 1;
				foreach ( $atts['slides_right'] as $slide ): ?>
                    <div>
                        <div class="step-work bg-color">
                            <div class="icon shadow">

								<?php if ( $slide['icon_box']['type'] == 'icon-font' ): ?>
                                    <i class="<?php echo $slide['icon_box']['icon_box']['icon-class']; ?>"></i>
								<?php elseif ( $slide['icon_box']['type'] == 'custom-upload' ): ?>
                                    <img src="<?php echo $slide['icon_box']['url'] ?>"
                                         style="height: 30px; display: inline;">
								<?php
                                elseif ( $counter == 1 ):
									echo '<i class="kr-solutionsolution"></i>';
                                elseif ( $counter == 2 ):
									echo '<i class="kr-work-team"></i>';
                                elseif ( $counter == 3 ):
									echo '<i class="kr-web-design"></i>';
								endif;
								?>

                            </div>
                            <div class="title">
                                <h5><?php echo $slide['title_box']; ?></h5>
                            </div>
                            <div class="text">
                                <p><?php echo $slide['desc_box']; ?></p>
                            </div>
                        </div>
                    </div>
					<?php
					$counter ++;
				endforeach;
				?>



            </div>

            <div class="col-md-6  animation" data-animation-delay=".25" data-animation-name="flipInY">



	            <?php
	            $counter = 1;
	            foreach ( $atts['slides_left'] as $slide ): ?>
                    <div>
                        <div class="step-work bg-color">
                            <div class="icon shadow">

					            <?php if ( $slide['icon_box']['type'] == 'icon-font' ): ?>
                                    <i class="<?php echo $slide['icon_box']['icon_box']['icon-class']; ?>"></i>
					            <?php elseif ( $slide['icon_box']['type'] == 'custom-upload' ): ?>
                                    <img src="<?php echo $slide['icon_box']['url'] ?>"
                                         style="height: 30px; display: inline;">
					            <?php
                                elseif ( $counter == 1 ):
						            echo '<i class="kr-programming"></i>';
                                elseif ( $counter == 2 ):
						            echo '<i class="kr-medal"></i>';
                                elseif ( $counter == 3 ):
						            echo '  <i class="kr-shipped"></i>';
					            endif;
					            ?>

                            </div>
                            <div class="title">
                                <h5><?php echo $slide['title_box']; ?></h5>
                            </div>
                            <div class="text">
                                <p><?php echo $slide['desc_box']; ?></p>
                            </div>
                        </div>
                    </div>
		            <?php
		            $counter ++;
	            endforeach;
	            ?>


            </div>

        </div>

    </div>
</section>

