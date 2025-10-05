<?php
if (!defined('FW'))
	die('Forbidden');

/**

 * @var $atts

 */
?>

<section id="contact-us" class="section">

    <div class="container">
        <div class="row row-rtl">

            <div class="col-lg-6 offset-lg-3 col-md-12">

                <div class="form-contact">
                    <div class="overlay">

                        <div class="title text-center">
                            <h4><?php echo $atts['title_about'] ?></h4>
                        </div>

	                    <?php echo do_shortcode($atts['shortcode']); ?>

                    </div>
                </div>

            </div>

        </div>
    </div>
    <style>
        #map ~ .waves {
            display: none;
        }
        #waves {
            margin-top: -160px;
        }
    </style>
</section>