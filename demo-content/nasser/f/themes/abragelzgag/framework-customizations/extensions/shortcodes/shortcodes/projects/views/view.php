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

                    <div class="projects">
                        <div class="row row-rtl">


							<?php

							global $paged;
							if ( empty( $paged ) ) {
								$paged = 1;
							}

							$args       = array(
								'post_type'      => 'portfolio',
								'posts_per_page' => - 1,
								'paged'          => $paged,
								'tax_query'      => array(
									'relation' => 'AND',
									array(
										'taxonomy'         => 'portfolio_type',
										'terms'            => array( $get_term->term_id ),
										'include_children' => true,
										'operator'         => 'IN'
									)
								),
							);
							$query      = new WP_Query( $args );
							$count_post = $query->post_count;


							$args  = array(
								'post_type' => 'portfolio',
								'paged'     => $paged,
								'tax_query' => array(
									'relation' => 'AND',
									array(
										'taxonomy'         => 'portfolio_type',
										'terms'            => array( $get_term->term_id ),
										'include_children' => true,
										'operator'         => 'IN'
									)
								),
							);
							$query = new WP_Query( $args );

							if ( $query->have_posts() ):
								?>
								<?php while ( $query->have_posts() ):$query->the_post(); ?>


                                <div class="col-md-4">
                                    <div class="project">
                                        <div class="image-project">
											<?php the_post_thumbnail( 'kr-img-350x302' ) ?>
                                        </div>
                                        <div class="content-project bg-color">
                                            <div class="table-content">
                                                <div class="table-content-cell">
                                                    <a href="<?php the_permalink() ?>" class="icon shadow bg-color">
                                                        <i class="kr-show"></i>
                                                    </a>
                                                    <div class="title">
                                                        <h5><?php the_title() ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- End One Screen -->

							<?php endwhile; ?>

								<?php
								wp_reset_postdata();
							endif;
							wp_reset_query();
							?>


                        </div>
                    </div>


                </div>
				<?php
				$count ++;
			endforeach;
			?>

            <div class=" ">
	            <?php law_firm_prepare_pagination( $count_post, get_option( 'posts_per_page' ) ); ?>
            </div>

        </div>


    </div>

</section>


