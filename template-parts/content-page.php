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

            foreach ($all_terms as $single_term) { 
                ?>
            <button class="portfolio-tab-btn active" data-tab="<?php echo $single_term->slug ?>">
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
            ) ) as $get_term ) :
				?>
            <div class="portfolio-tab-content" id="<?php echo $get_term->slug; ?>">
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

        <!-- Mobile Apps Tab Content -->
        <!-- <div id="mobile-apps" class="portfolio-tab-content">
          <div class="row">
            <div class="col-lg-6 col-md-6 mb-4">
              <div class="portfolio-card stagger-1">
                <div class="portfolio-image">
                  <img
                    src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Food Delivery App"
                  />
                </div>
                <div class="portfolio-content">
                  <div class="portfolio-header">
                    <h4>Food Delivery App</h4>
                  </div>
                  <p>
                    Cross-platform mobile app with real-time tracking and
                    payment integration.
                  </p>
                  <div class="portfolio-tech-stack">
                    <span class="tech-tag">React Native</span>
                    <span class="tech-tag">Firebase</span>
                    <span class="tech-tag">Maps API</span>
                    <span class="tech-tag">PayPal</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
              <div class="portfolio-card stagger-2">
                <div class="portfolio-image">
                  <img
                    src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Fitness Tracker"
                  />
                </div>
                <div class="portfolio-content">
                  <div class="portfolio-header">
                    <h4>Fitness Tracker</h4>
                  </div>
                  <p>
                    Health and fitness mobile app with workout plans and
                    progress tracking.
                  </p>
                  <div class="portfolio-tech-stack">
                    <span class="tech-tag">Flutter</span>
                    <span class="tech-tag">Dart</span>
                    <span class="tech-tag">SQLite</span>
                    <span class="tech-tag">HealthKit</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
              <div class="portfolio-card stagger-3">
                <div class="portfolio-image">
                  <img
                    src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Learning Platform"
                  />
                </div>
                <div class="portfolio-content">
                  <div class="portfolio-header">
                    <h4>Learning Platform</h4>
                  </div>
                  <p>
                    Educational mobile app with interactive courses and
                    assessments.
                  </p>
                  <div class="portfolio-tech-stack">
                    <span class="tech-tag">Swift</span>
                    <span class="tech-tag">Kotlin</span>
                    <span class="tech-tag">Firebase</span>
                    <span class="tech-tag">WebRTC</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
              <div class="portfolio-card stagger-4">
                <div class="portfolio-image">
                  <img
                    src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Banking App"
                  />
                </div>
                <div class="portfolio-content">
                  <div class="portfolio-header">
                    <h4>Banking App</h4>
                  </div>
                  <p>
                    Secure mobile banking application with biometric
                    authentication and real-time transaction monitoring.
                  </p>
                  <div class="portfolio-tech-stack">
                    <span class="tech-tag">React Native</span>
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">MongoDB</span>
                    <span class="tech-tag">Biometrics</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <!-- Digital Marketing Tab Content -->
        <!-- <div id="digital-marketing" class="portfolio-tab-content">
          <div class="row">
            <div class="col-lg-6 col-md-6 mb-4">
              <div class="portfolio-card stagger-1">
                <div class="portfolio-image">
                  <img
                    src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Analytics Dashboard"
                  />
                </div>
                <div class="portfolio-content">
                  <div class="portfolio-header">
                    <h4>Analytics Dashboard</h4>
                  </div>
                  <p>
                    Real-time business intelligence and reporting dashboard for
                    marketing campaigns.
                  </p>
                  <div class="portfolio-tech-stack">
                    <span class="tech-tag">Google Analytics</span>
                    <span class="tech-tag">Power BI</span>
                    <span class="tech-tag">Python</span>
                    <span class="tech-tag">SQL</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
              <div class="portfolio-card stagger-2">
                <div class="portfolio-image">
                  <img
                    src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Social Media Campaign"
                  />
                </div>
                <div class="portfolio-content">
                  <div class="portfolio-header">
                    <h4>Social Media Campaign</h4>
                  </div>
                  <p>
                    Comprehensive social media marketing strategy with 300%
                    engagement increase.
                  </p>
                  <div class="portfolio-tech-stack">
                    <span class="tech-tag">Facebook Ads</span>
                    <span class="tech-tag">Instagram</span>
                    <span class="tech-tag">Hootsuite</span>
                    <span class="tech-tag">Canva</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
              <div class="portfolio-card stagger-3">
                <div class="portfolio-image">
                  <img
                    src="https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="SEO Optimization"
                  />
                </div>
                <div class="portfolio-content">
                  <div class="portfolio-header">
                    <h4>SEO Optimization</h4>
                  </div>
                  <p>
                    Complete SEO overhaul resulting in 250% increase in organic
                    traffic.
                  </p>
                  <div class="portfolio-tech-stack">
                    <span class="tech-tag">Google Search</span>
                    <span class="tech-tag">SEMrush</span>
                    <span class="tech-tag">Ahrefs</span>
                    <span class="tech-tag">WordPress</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
              <div class="portfolio-card stagger-4">
                <div class="portfolio-image">
                  <img
                    src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Email Marketing Campaign"
                  />
                </div>
                <div class="portfolio-content">
                  <div class="portfolio-header">
                    <h4>Email Marketing Campaign</h4>
                  </div>
                  <p>
                    Automated email marketing campaign with personalization
                    achieving 45% open rate and 12% CTR.
                  </p>
                  <div class="portfolio-tech-stack">
                    <span class="tech-tag">Mailchimp</span>
                    <span class="tech-tag">Klaviyo</span>
                    <span class="tech-tag">HTML/CSS</span>
                    <span class="tech-tag">A/B Testing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
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
