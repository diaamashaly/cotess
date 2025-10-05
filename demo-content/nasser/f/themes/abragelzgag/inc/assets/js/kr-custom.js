/*
/!*
 *  JS for custom posts boxes.
 *!/

jQuery(document).ready(function () {
    "use strict";

    var page_template,
        page_template_val,
        box_main,
        contacus;

    page_template = jQuery("#page_template");

    box_main = jQuery("#fw-options-box-main");
    contacus = jQuery("#fw-options-box-contactus");

    page_template_val = jQuery("#page_template").val();


    page_template.change(function () {

        if (jQuery("#page_template option[value='featured.php']").is(':selected')) {
            box_main.css('display', 'block');
            contacus.css('display', 'none');
        } else if (jQuery("#page_template option[value='contactus.php']").is(':selected')) {
            contacus.css('display', 'block');
            box_main.css('display', 'none');
        } else {
            contacus.css('display', 'none');
            box_main.css('display', 'none');
        }

    });


    if (jQuery("#page_template option[value='featured.php']").is(':selected')) {
        box_main.css('display', 'block');
        contacus.css('display', 'none');
    } else if (jQuery("#page_template option[value='contactus.php']").is(':selected')) {
        contacus.css('display', 'block');
        box_main.css('display', 'none');
    } else {
        contacus.css('display', 'none');
        box_main.css('display', 'none');
    }


});*/
