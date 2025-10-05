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
                    <style>
                        .title-home {
                            margin-bottom: 30px;
                        }
                        .main-drag {
                            margin-top: 0;
                        }
                       #works img {
                           width: 100%;
                           display: block;
                        }
                    </style>
                    <?php the_post_thumbnail() ?>
                </div>
                <br>
                <div class="project-details text-center">

                    <div class="description">
                        <p><?php the_content(); ?></p>
                    </div>

                </div>
                <br>
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
