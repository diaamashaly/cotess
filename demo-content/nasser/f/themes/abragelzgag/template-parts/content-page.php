<?php
/**
 *
 * Theme Home Page
 *
 * @package   Abrag Elzgag
 * @author    alalmiyalhura
 * @link      http://alalmiyalhura.com/
 * @version 1.0.0
 * @since 1.0.0
 */

if ( have_posts() ) {

	while ( have_posts() ) {

		the_post();

		the_content();

	}

} else {


}

?>
