<?php
get_header();
$id_page = get_kr_options( 'page-portfolio' );
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

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>

        <section id="works" class="section">

            <div class="container">

                <div class="title-home style text-center">
                    <h2><?php the_title(); ?></h2>
                </div>

                <div class="main_drag main-drag">
                    <div class="apps-screenshots  animation" data-animation-delay=".4" data-animation-name="zoomIn">
                        <!-- Start Swiper Container -->
                        <div class="swiper-wrapper">
							<?php
							$images = get_kr_meta_option( get_the_ID(), 'gallery' );
							foreach ( $images as $image ) :
								?>
                                <!-- Start One Screen -->
								<?php if ( $image ): ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $image['url'] ?>" class="img-responsive">
                                </div>
							<?php endif; ?>
                                <!-- End One Screen -->
							<?php endforeach; ?>
                        </div>
                        <!-- Start Swiper Slider Controls -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <!-- End Swiper Slider Controls -->
                    </div>
                </div>

                <div class="btns-share">
                    <ul>
                        <li><a href="#" target="_blank"><i class="kr-unlinkunlink"></i></a></li>
                        <li>
                            <a class="btn-share" href="javascript:void(0)"><i class="kr-share"></i></a>
                            <!-- AddToAny BEGIN -->
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                <a class="a2a_dd" href="https://www.addtoany.com/share"
                                   style="opacity: 0; margin-top: -50px;"></a>
                            </div>
                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                            <!-- AddToAny END -->
                        </li>
                    </ul>
                </div>

                <div class="project-details text-center">

                    <div class="title">
                        <h4>نبذه عن التطبيق</h4>
                    </div>

                    <div class="description">
                        <p><?php echo strip_tags( get_the_content() ); ?></p>
                    </div>

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

		<?php
	}
}
get_footer();
