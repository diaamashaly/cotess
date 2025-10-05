<?php
if (!defined('FW'))
	die('Forbidden');

/**

 * @var $atts

 */
?>
<section id="waves" class="section">
    <?php
    $waves = ($atts['waves_select'] == 'color-2')? 'waves-2' : '';
    ?>
    <div class="waves <?php echo $waves;?>">
        <div class="wave-1"></div>
        <div class="wave-2"></div>
        <div class="wave-3"></div>
        <div class="wave-4"></div>
    </div>
</section>