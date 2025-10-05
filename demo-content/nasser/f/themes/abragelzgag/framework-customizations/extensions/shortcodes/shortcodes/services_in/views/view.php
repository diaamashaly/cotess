<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var $atts
 */
?>

<section id="services" class="services section">
    <div class="container">

        <div class="title-home style text-center">
            <h2><?php echo $atts['title_services']; ?></h2>
        </div>

        <div class="services-description text-center">
            <p><?php echo $atts['desc_services']; ?></p>
        </div>

        <div class="result-search">
            <div class="row row-rtl boxs-about">

                <?php
                $services = $atts['services'];
                foreach ( $services as $service ) :
                ?>
                <div class="col-md-4">
                    <a href="#" class="bg-color-hover box-about text-center animation" data-animation-delay=".25" data-animation-name="fadeInUp">
                        <div class="box-icon">
                            <?php
                            if($service['image']['gadget'] == 'default_icon') {
                                echo $service['image']['default_icon']['icon_text'];
                            } else {
                                ?>
                                <i class="<?php echo $service['image']["icon_1"]['icon-class']; ?>"></i>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="box-title">
                            <h4><?php echo $service['title_box']; ?></h4>
                        </div>
                        <div class="box-text">
                            <p><?php echo $service['desc_box']; ?></p>
                        </div>
                    </a>
                </div>
                <?php  endforeach; ?>
            </div>
        </div>

    </div>
</section>

