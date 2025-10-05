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
    <br><br><br><br><br>
<h1  class="text-center">4 0 4</h1>

    <br><br><br><br><br>

    <section id="waves" class="section">
        <div class="waves waves-2">
            <div class="wave-1"></div>
            <div class="wave-2"></div>
            <div class="wave-3"></div>
            <div class="wave-4"></div>
        </div>
    </section>
<?php get_footer(); ?>