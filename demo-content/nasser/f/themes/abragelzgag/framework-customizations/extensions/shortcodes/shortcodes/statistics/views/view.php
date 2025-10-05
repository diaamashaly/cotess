<?php
if (!defined('FW'))
	die('Forbidden');

/**

 * @var $atts

 */
?>
<section id="statistics">
    <div class="overlay section">
        <div class="container">
            <div id="counter" class="row row-rtl">
	            <?php if(!empty($atts['statistic_box_1']['title_statistic'])): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="statistic animation" data-animation-delay=".25" data-animation-name="flipInY">
                        <div class="icon bg-color">

	                        <?php if($atts['statistic_box_1']['icon_statistic']['type'] == 'icon-font'): ?>
                                <i class="<?php echo $atts['statistic_box_1']['icon_statistic']['icon-class']; ?>"></i>
	                        <?php elseif ($atts['statistic_box_1']['icon_statistic']['type'] == 'custom-upload'): ?>
                                <img src="<?php echo $atts['statistic_box_1']['icon_statistic']['url']?>" style="height: 42px; display: inline;">
	                        <?php else: ?>
                                <i class="kr-cart"></i>
	                        <?php endif; ?>

                        </div>
                        <div class="title">
                            <h5><?php echo $atts['statistic_box_1']['title_statistic']; ?></h5>
                        </div>
                        <div class="count">
                            <span  class="counter-value" data-count="<?php echo $atts['statistic_box_1']['counter_statistic']; ?>">0</span>
                        </div>
                    </div>
                </div>
	            <?php endif; ?>

	            <?php if(!empty($atts['statistic_box_2']['title_box'])): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="statistic animation" data-animation-delay=".25" data-animation-name="flipInY">
                        <div class="icon bg-color">
	                        <?php if($atts['statistic_box_2']['icon_statistic']['type'] == 'icon-font'): ?>
                                <i class="<?php echo $atts['statistic_box_2']['icon_statistic']['icon-class']; ?>"></i>
	                        <?php elseif ($atts['statistic_box_2']['icon_statistic']['type'] == 'custom-upload'): ?>
                                <img src="<?php echo $atts['statistic_box_2']['icon_statistic']['url']?>" style="height: 42px; display: inline;">
	                        <?php else: ?>
                                <i class=" kr-project"></i>
	                        <?php endif; ?>
                        </div>
                        <div class="title">
                            <h5><?php echo $atts['statistic_box_2']['title_box']; ?></h5>
                        </div>
                        <div class="count">
                            <span class="counter-value" data-count="<?php echo $atts['statistic_box_2']['counter_statistic']; ?>">0</span>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

	            <?php if(!empty($atts['statistic_box_3']['title_box'])): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="statistic animation" data-animation-delay=".25" data-animation-name="flipInY">
                        <div class="icon bg-color">
	                        <?php if($atts['statistic_box_3']['icon_statistic']['type'] == 'icon-font'): ?>
                                <i class="<?php echo $atts['statistic_box_3']['icon_statistic']['icon-class']; ?>"></i>
	                        <?php elseif ($atts['statistic_box_3']['icon_statistic']['type'] == 'custom-upload'): ?>
                                <img src="<?php echo $atts['statistic_box_3']['icon_statistic']['url']?>" style="height: 42px; display: inline;">
	                        <?php else: ?>
                                <i class="kr-line-chart"></i>
	                        <?php endif; ?>
                            </div>
                        <div class="title">
                            <h5><?php echo $atts['statistic_box_3']['title_box']; ?></h5>
                        </div>
                        <div class="count">
                            <span class="counter-value" data-count="<?php echo $atts['statistic_box_3']['counter_statistic']; ?>">0</span>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

	            <?php if(!empty($atts['statistic_box_4']['title_box'])): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="statistic animation" data-animation-delay=".25" data-animation-name="flipInY">
                        <div class="icon bg-color">
	                        <?php if($atts['statistic_box_4']['icon_statistic']['type'] == 'icon-font'): ?>
                                <i class="<?php echo $atts['statistic_box_4']['icon_statistic']['icon-class']; ?>"></i>
	                        <?php elseif ($atts['statistic_box_4']['icon_statistic']['type'] == 'custom-upload'): ?>
                                <img src="<?php echo $atts['statistic_box_4']['icon_statistic']['url']?>" style="height: 42px; display: inline;">
	                        <?php else: ?>
                                <i class="kr-like"></i>
	                        <?php endif; ?>
                        </div>
                        <div class="title">
                            <h5><?php echo $atts['statistic_box_4']['title_box']; ?></h5>
                        </div>
                        <div class="count">
                            <span class="counter-value" data-count="<?php echo $atts['statistic_box_4']['counter_statistic']; ?>">0</span>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
