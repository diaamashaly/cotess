<?php
get_header();
$id_page = get_kr_options( 'page-search');
$args    = array(
	'post_type'      => 'page',
	'posts_per_page' => 1,
	'page_id'        => $id_page[0],
);
$about   = new WP_Query( $args );
if ( $about->have_posts() ):
	while ( $about->have_posts() ):$about->the_post();

		the_content();

	endwhile;
	wp_reset_postdata();
endif;
wp_reset_query();
?>
    <section id="search" class="section">
        <div class="container">

            <div class="title-home style text-center">
                <h2><?php single_cat_title(); ?></h2>
            </div>

            <!-- <div class="result-search">
                <div class="row row-rtl boxs-about">


					<?php


					global $paged;
					if ( empty( $paged ) ) {
						$paged = 1;
					}

					$args       = array(
						'post_type'      => 'post',
						'posts_per_page' => - 1,
						'paged'          => $paged,
					);
					$query      = new WP_Query( $args );
					$count_post = $query->post_count;

					$args  = array(
						'post_type' => 'post',
						'paged'          => $paged,
					);
					$query = new WP_Query( $args );
					if ( $query->have_posts() ):
						while ( $query->have_posts() ):$query->the_post();
							?>
                            <div class="col-md-4">
                                <a href="<?php the_permalink() ?>" class="bg-color-hover box-about text-center animation"
                                   data-animation-delay=".25" data-animation-name="fadeInUp">
                                    <div class="box-icon">
                                        <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                    </div>
                                    <div class="box-title">
                                        <h4><?php the_title() ?></h4>
                                    </div>
                                    <div class="box-text">
                                        <p><?php echo mb_substr(strip_tags(get_the_content()) , 0 , 100); ?></p>
                                    </div>
                                </a>
                            </div>
						<?php endwhile;
						wp_reset_postdata();
					else:
						echo "<p class='text-center' style='width: 100%;'>قد تقصد معنى اخر من فضلك حاول مرة أخرى :)</p>";
					endif;
					?>

                </div>
            </div> -->


            <div class=" ">
				<?php law_firm_prepare_pagination( $count_post, get_option( 'posts_per_page' ) ); ?>
            </div>


        </div>
    </section>


    <section id="waves" class="section">
        <div class="waves waves-2">
            <div class="wave-1"></div>
            <div class="wave-2"></div>
            <div class="wave-3"></div>
            <div class="wave-4"></div>
        </div>
    </section>

<?php get_footer(); ?>