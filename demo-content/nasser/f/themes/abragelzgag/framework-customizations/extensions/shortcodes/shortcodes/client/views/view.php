<?php
if (!defined('FW'))
	die('Forbidden');

/**

 * @var $atts

 */
?>



<section id="client" class="section">
    <div class="container">

        <div class="title-home style text-center">
            <h2><?php echo $atts['title_client'] ?></h2>
        </div>

        <div class="row row-rtl">
            
            <?php foreach ( $atts['clients'] as $client ) : ?>
            <div class="col-lg-3 col-md-6">
                <div class="client bg-color animation" data-animation-delay=".25" data-animation-name="flipInX">
                    <a href="<?php $client['url_client'] ?>" target="_blank">
                        <img src="<?php echo $client['image_client']['url'] ?>" alt="<?php echo $client['alternative'] ?>">
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>



