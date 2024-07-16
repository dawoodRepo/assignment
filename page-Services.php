<?php get_header(); ?>

<body class="sub_page">

<section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container">
          <h2>
            Our <span>Services</span>
          </h2>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
          </p>
        </div>
        <div class="row">

          <!-- displaying service posts -->

          <?php
          $post_query = new WP_Query(array(
            'post_type' => 'post',
            'category_name' => 'Services'
          ));
          if ( $post_query->have_posts() ){
          while($post_query->have_posts()){
            $post_query->the_post(); ?>
            <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
              </div>
              <div class="detail-box">
                <h5>
                  <?php the_title(); ?>
                </h5>
                <p>
                <?php the_content(); ?>
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <?php 
          }}
          else {
            echo 'No Services found';
          }
          wp_reset_postdata();
          ?>
          
          <!-- ---------------------------------------- -->
          
        </div>
      </div>
    </div>
  </section>

</body>

<?php get_footer(); ?>