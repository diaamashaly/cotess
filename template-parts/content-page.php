    <!--============================== Start of Hero Area ==============================-->
    <!-- Hero Section -->
    <section id="home" class="hero-section">
      <!-- 3D Floating Shapes -->
      <div class="floating-shapes">
        <div class="floating-shape"></div>
        <div class="floating-shape"></div>
        <div class="floating-shape"></div>
        <div class="floating-shape"></div>
        <div class="floating-shape"></div>
        <div class="floating-shape"></div>
      </div>
      <div class="container">
        <div class="row align-items-center min-vh-100">
          <div class="col-lg-6">
            <div class="hero-content">
              <h1><?php the_kr_options( 'hero-title' ); ?></h1>
              <p class="lead">
              <?php the_kr_options( 'hero-desc' ); ?>
              </p>
              <div class="hero-buttons">
                <a href="#services" class="btn btn-primary btn-lg"
                  >Our Services</a
                >
                <a href="#contact" class="btn btn-outline-light btn-lg"
                  >Get Started</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-mockup-container">
              <div class="mockup-device">
                <div class="device-frame">
                  <div class="device-screen">
                    <img
                      src="<?php the_kr_options( 'hero-img', 'url' ) ?>"
                      alt="Costess Tech Hero Image"
                      class="mockup-image"
                    />
                  </div>
                  <div class="device-shadow"></div>
                </div>

                <!-- Floating Elements -->

                <div class="floating-elements">

                    <?php $feat = fw_get_db_settings_option('hero_tech_info'); ?>
                    <?php foreach ($feat as $index=>$item) : ?>
                        <div class="floating-card card-<?php echo $index+1 ?>">
                            <div class="card-icon">
                            <i class="<?php echo $item['icon'] ?>"></i>
                            </div>
                            <div class="card-text"><?php echo $item['title'] ?></div>
                        </div>                
                    <?php endforeach; ?>
                </div>

                <!-- Background Elements -->
                <div class="mockup-background">
                  <div class="bg-circle circle-1"></div>
                  <div class="bg-circle circle-2"></div>
                  <div class="bg-circle circle-3"></div>
                  <div class="bg-gradient"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- About Section -->
    <section id="about" class="section about-section">
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                <div class="">
                <h2 class="section-title">  <?php the_kr_options( 'about_title' ); ?></h2>
                <p class="lead">
                <?php the_kr_options( 'hero_desc' ); ?>
                </p>

                <!-- Our Advantages -->
                <div class="mt-5">
                    <div class="row">
                      <?php $feat = fw_get_db_settings_option('facts_records'); ?>
                      <?php foreach ($feat as $index=>$item) : ?>
                      <div class="col-md-3 col-sm-6 mb-4">
                          <div class="stat-item stagger-<?php echo $index+1 ?>">
                          <h3 class="text-primary"><?php echo $item['fact_record_number'] ?></h3>
                          <p><?php echo $item['fact_record_title'] ?></p>
                          </div>
                      </div>
                    <?php endforeach; ?>
                    <!-- <div class="col-md-3 col-sm-6 mb-4">
                        <div class="stat-item stagger-2">
                        <h3 class="text-primary">75+</h3>
                        <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="stat-item stagger-3">
                        <h3 class="text-primary">8+</h3>
                        <p>Years Experience</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="stat-item stagger-4">
                        <h3 class="text-primary">24/7</h3>
                        <p>Support Available</p>
                        </div>
                    </div> -->
                    </div>
                </div>

                <!-- Our Features -->
                <div class="mt-5">
                    <h4 class="mb-4 text-center section-subtitle">
                    Our Features
                    </h4>
                    <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="company-value stagger-1">
                        <i class="fas fa-rocket text-primary mb-3"></i>
                        <h5>Innovation First</h5>
                        <p>
                            We leverage the latest technologies and methodologies to
                            deliver cutting-edge solutions that give you a
                            competitive advantage.
                        </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="company-value stagger-2">
                        <i class="fas fa-shield-alt text-primary mb-3"></i>
                        <h5>Quality Assurance</h5>
                        <p>
                            Our rigorous testing processes and quality control
                            measures ensure that every project meets the highest
                            standards of excellence.
                        </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="company-value stagger-3">
                        <i class="fas fa-handshake text-primary mb-3"></i>
                        <h5>Client Partnership</h5>
                        <p>
                            We build long-term relationships with our clients,
                            providing ongoing support and continuous improvement of
                            their digital solutions.
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>


        <!-- Portfolio Section -->
        <section id="portfolio" class="section portfolio-section">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="section-title">Our Portfolio</h2>
          <p class="section-subtitle stagger-1">
            Some of our recent successful projects
          </p>
        </div>

        <!-- Portfolio Tabs -->
        <div class="portfolio-tabs-container">
          <div class="portfolio-tabs stagger-1">
          <?php

            $all_terms = get_terms('portfolio_type', array(

                'hide_empty'    => false
            ));

            foreach ($all_terms as $i => $single_term) { 
                ?>
            <button class="portfolio-tab-btn <?php echo $i === 0 ? 'active' : '' ?>" data-tab="<?php echo $single_term->slug ?>">
              <i class="fas fa-code"></i>
              <span><?php echo $single_term->name ?></span>
            </button>
            <?php
            }
          ?>
            <!-- <button class="portfolio-tab-btn active" data-tab="web-development">
              <i class="fas fa-code"></i>
              <span>Web Development</span>
            </button>
            <button class="portfolio-tab-btn" data-tab="mobile-apps">
              <i class="fas fa-mobile-alt"></i>
              <span>Mobile Apps</span>
            </button>
            <button class="portfolio-tab-btn" data-tab="digital-marketing">
              <i class="fas fa-chart-line"></i>
              <span>Digital Marketing</span>
            </button> -->
          </div>
        </div>

        <!-- Web Development Tab Content -->
        <?php
			$count = 1;
			foreach ( get_terms( 'portfolio_type', array(
                'hide_empty'    => false
            ) ) as $i => $get_term ) :
				?>
            <div class="portfolio-tab-content <?php echo $i === 0 ? 'active' : '' ?>" id="<?php echo $get_term->slug; ?>">
                <div class="container">
                    <div class="row">
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
                            <div class="col-lg-6 col-md-12 mb-4">
                              <div class="portfolio-card stagger-1">
                                <div class="portfolio-image">
                                  <img
                                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                                    alt="<?php the_title(); ?>"
                                  />
                                </div>
                                <div class="portfolio-content">
                                  <div class="portfolio-header">
                                    <h4><?php the_title(); ?></h4>
                                  </div>
                                  <p>
                                    <?php the_content(); ?>
                                  </p>
                                  <div class="portfolio-tech-stack">
                                    <?php
                                    $tech_stack = get_kr_meta_option(get_the_ID(), 'portfolio_tech_stack');
                                        foreach ($tech_stack as $index=>$item) {
                                            ?>
                                            <span class="tech-tag"><?php echo $item['portfolio_tech_stack_title'];?></span>
                                            <?php
                                        }
                                    ?>
                                  </div>
                                </div>
                              </div>
                            </div>
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

    <!-- Blog Section -->
    <section id="blog" class="section blog-section">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="section-title fade-in-on-scroll">Our Blog</h2>
          <p class="section-subtitle fade-in-on-scroll stagger-1">
            Stay updated with the latest trends in technology and digital
            innovation
          </p>
        </div>

        <div class="row">
          <!-- Blog Post 1 -->

          <?php

$values = array('post_type' => 'post', 'order' => 'ASC');
$query = new wp_query($values);

        if ($query -> have_posts()) {
        
        while ($query -> have_posts()) {
            
            $query -> the_post(); ?>

          <div class="col-lg-4 col-md-6 mb-4">
            <article class="blog-card fade-in-scale stagger-2">
              <div class="blog-image">
                <img
                  src="<?php echo get_the_post_thumbnail_url(); ?>"
                  alt="<?php the_title(); ?>"
                />
                <div class="blog-category"> <?php echo get_the_term_list(get_the_ID(), 'category', '', ', ', ''); ?></div>
                <div class="blog-date"><?php echo get_the_date( 'F j, Y' ); ?></div>
              </div>
              <div class="blog-content">
                <h3><?php the_title(); ?></h3>
                <p>
                  <?php the_excerpt(); ?>
                </p>
                <div class="blog-meta">
                  <div class="blog-read-time"><?php echo get_the_date( 'F j, Y' ); ?> </div>
                  <a class='blog-read-more' href='<?php the_permalink(); ?>'>
                    Read More <i class="fas fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </article>
          </div>

          <?php
          }
        }

        wp_reset_postdata();

        ?>
        </div>

        <div class="text-center mt-5">
          <a class='btn btn-outline-primary btn-lg fade-in-on-scroll stagger-5' href='<?php echo get_post_type_archive_link('post'); ?>'>
            View All Articles <i class="fas fa-external-link-alt ms-2"></i>
          </a>
        </div>
      </div>
    </section>
      </div>
    </section>

<!-- <?php
/**
 *
 * Theme Home Page
 *
 * @package   Abrag Elzgag
 * @author    abragelzgag
 * @link      http://abragelzgag.com/
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

?> -->
