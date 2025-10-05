<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var string $title
 * @var string $subtitle
 */
if (empty($title)) {
    return;
}
?>



<div class="fw-col-xs-12 form-builder-item">
    <div class="border-left">
        <h3><?php echo esc_attr($title); ?></h3>
        <?php if (!empty($subtitle)) : ?>
            <p><?php echo force_balance_tags($subtitle); ?></p>
        <?php endif ?>
       
    </div>
     <?php
        if (defined('FW')) {
            FW_Flash_Messages::_print_frontend();
        }
        ?>
</div>