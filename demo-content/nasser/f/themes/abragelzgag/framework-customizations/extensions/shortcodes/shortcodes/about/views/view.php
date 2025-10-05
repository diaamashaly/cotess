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
            <div class="col-lg-6 mb-50">
                <div class="title-home">
                    <h2><?php echo $atts['title_about'] ?></h2>
                </div>
                <div class="text-home">
                    <p><?php echo $atts['desc_about'] ?></p>
                </div>
                <div class="link-hero">
                    <a href="<?php echo get_page_link($atts['about_url'][0]) ?>" class="link-about shadow bg-color">المزيد حولنا</a>
                </div>
            </div>
            <div class="col-lg-6">

                <div class="boxs-about">

                    <div class="box-about-col">

                        <?php if(!empty($atts['about_box_1']['title_box'])): ?>
                        <div class="box-about animation" data-animation-delay=".25" data-animation-name="fadeInUp">
                            <div class="box-icon">

	                            <?php if($atts['about_box_1']['icon_box']['type'] == 'icon-font'): ?>
                                    <i class="<?php echo $atts['about_box_1']['icon_box']['icon-class']; ?>"></i>
                                <?php elseif ($atts['about_box_1']['icon_box']['type'] == 'custom-upload'): ?>
                                    <img src="<?php echo $atts['about_box_1']['icon_box']['url']?>" style="height: 42px; display: inline;">
                                <?php else: ?>
                                    <i class="kr-teamteam"></i>
	                            <?php endif; ?>

                            </div>
                            <div class="box-title">
                                <h4><?php echo $atts['about_box_1']['title_box']; ?></h4>
                            </div>
                            <div class="box-text">
                                <p><?php echo $atts['about_box_1']['desc_box']; ?></p>
                            </div>
                        </div>
                        <?php endif; ?>

	                    <?php if(!empty($atts['about_box_3']['title_box'])): ?>
                        <div class="box-about animation" data-animation-delay="1" data-animation-name="fadeInUp">
                            <div class="box-icon">
	                            <?php if($atts['about_box_3']['icon_box']['type'] == 'icon-font'): ?>
                                    <i class="<?php echo $atts['about_box_3']['icon_box']['icon-class']; ?>"></i>
	                            <?php elseif ($atts['about_box_3']['icon_box']['type'] == 'custom-upload'): ?>
                                    <img src="<?php echo $atts['about_box_3']['icon_box']['url']?>" style="height: 42px; display: inline;">
	                            <?php else: ?>
                                    <i class="kr-teamteam"></i>
	                            <?php endif; ?>
                            </div>
                            <div class="box-title">
                                <h4><?php echo $atts['about_box_3']['title_box']; ?></h4>
                            </div>
                            <div class="box-text">
                                <p><?php echo $atts['about_box_3']['desc_box']; ?></p>
                            </div>
                        </div>
	                    <?php endif; ?>
                    </div>

                    <div class="box-about-col box-about-col-50">

	                    <?php if(!empty($atts['about_box_2']['title_box'])): ?>
                        <div class="box-about animation" data-animation-delay=".50" data-animation-name="fadeInUp">
                            <div class="box-icon">
	                            <?php if($atts['about_box_2']['icon_box']['type'] == 'icon-font'): ?>
                                    <i class="<?php echo $atts['about_box_2']['icon_box']['icon-class']; ?>"></i>
	                            <?php elseif ($atts['about_box_2']['icon_box']['type'] == 'custom-upload'): ?>
                                    <img src="<?php echo $atts['about_box_2']['icon_box']['url']?>" style="height: 42px; display: inline;">
	                            <?php else: ?>
                                    <i class="kr-teamteam"></i>
	                            <?php endif; ?>
                            </div>
                            <div class="box-title">
                                <h4><?php echo $atts['about_box_2']['title_box']; ?></h4>
                            </div>
                            <div class="box-text">
                                <p><?php echo $atts['about_box_2']['desc_box']; ?></p>
                            </div>
                        </div>
	                    <?php endif; ?>

	                    <?php if(!empty($atts['about_box_3']['title_box'])): ?>
                        <div class="box-about animation" data-animation-delay=".75" data-animation-name="fadeInUp">
                            <div class="box-icon">
	                            <?php if($atts['about_box_4']['icon_box']['type'] == 'icon-font'): ?>
                                    <i class="<?php echo $atts['about_box_4']['icon_box']['icon-class']; ?>"></i>
	                            <?php elseif ($atts['about_box_4']['icon_box']['type'] == 'custom-upload'): ?>
                                    <img src="<?php echo $atts['about_box_4']['icon_box']['url']?>" style="height: 42px; display: inline;">
	                            <?php else: ?>
                                    <i class="kr-teamteam"></i>
	                            <?php endif; ?>
                            </div>
                            <div class="box-title">
                                <h4><?php echo $atts['about_box_4']['title_box']; ?></h4>
                            </div>
                            <div class="box-text">
                                <p><?php echo $atts['about_box_4']['desc_box']; ?></p>
                            </div>
                        </div>
	                    <?php endif; ?>

                    </div>


                </div>

            </div>
        </div>
    </div>
</section>
