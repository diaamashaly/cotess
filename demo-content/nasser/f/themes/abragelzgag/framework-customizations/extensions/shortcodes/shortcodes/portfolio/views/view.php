<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var $atts
 */
?>


<section id="works" class="section">

    <div class="container">

        <div class="title-home style text-center">
            <h2><?php echo $atts['title_portfolio'] ?></h2>
        </div>

        <select id="select" class="bg-color">


	        <?php
	        $count = 1;
	        foreach ( get_terms( 'portfolio_type' ) as $get_term ) :
		        ?>
                <option value="<?php echo $count; ?>"><?php echo $get_term->name; ?></option>
		        <?php
		        $count ++;
	        endforeach;
	        ?>
        </select>


        <ul class="nav nav-tabs nav-works">

			<?php
			$count = 1;
			foreach ( get_terms( 'portfolio_type' ) as $get_term ) :
				?>
                <li>
                    <a href="#works_<?php echo $count; ?>"
                       class="bg-color-hover <?php echo ( $count == 1 ) ? 'active' : ''; ?>" data-toggle="pill">
                        <span><?php echo $get_term->name; ?></span>
                    </a>
                </li>
				<?php
				$count ++;
			endforeach;
			?>
        </ul>

        <div class="tab-content animation" data-animation-delay=".4" data-animation-name="zoomIn" id="myTabContent">

			<?php
			$count = 1;
			foreach ( get_terms( 'portfolio_type' ) as $get_term ) :
				?>
                <div class="tab-pane fade  <?php echo ( $count == 1 ) ? 'show active' : ''; ?>"
                     id="works_<?php echo $count; ?>">

                    <div class="main_drag">
                        <div class="apps-screenshots">
                            <!-- Start Swiper Container -->
                            <div class="swiper-wrapper">


								<?php
								$args  = array(
									'post_type'      => 'portfolio',
									'posts_per_page' => 5,
									'tax_query'      => array(
										'relation' => 'AND',
										array(
											'taxonomy' => 'portfolio_type',
											'terms' => array( $get_term->term_id ),
											'include_children' => true,
											'operator'         => 'IN'
										)
									),
								);
								$query = new WP_Query( $args );
								if ( $query->have_posts() ):
									?>
									<?php while ( $query->have_posts() ):$query->the_post(); ?>


                                    <!-- Start One Screen -->
                                    <div class="swiper-slide">
                                        <?php
                                        $image = get_kr_meta_option(get_the_ID(), 'image_home_page');
                                        echo wp_get_attachment_image( $image['attachment_id'], 'full' )
                                        ?>
                                    </div>
                                    <!-- End One Screen -->

								<?php endwhile; ?>

									<?php
									wp_reset_postdata();
								endif;
								wp_reset_query();
								?>
                            </div>
                            <!-- Start Swiper Slider Controls -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <!-- End Swiper Slider Controls -->
                        </div>
                    </div>

                </div>
				<?php
				$count ++;
			endforeach;
			?>

        </div>

        <div class="link-hero">
            <a href="<?php echo get_page_link($atts['portfolio_url'][0]) ?>" class="link-about shadow bg-color">المزيد</a>
        </div>

    </div>

</section>


