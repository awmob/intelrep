<?php /* Template Name: SIR Advantage Template */ ?>
<?php get_header();?>


<title><?php bloginfo('name'); ?> | <?php echo ucwords($pagename); ?></title>
</head>

<body>

  <?php get_template_part('logo', 'page'); ?>

  <section class="container standard_page">

    <div class="row">

      <div class="col-lg-2"></div>

      <div class="col-lg-8 m-3 text-center">
          <?php
          while(have_posts()){
              the_post();
              ?>


                <h1 class="postmain"><?php the_title()?></h1>
                <div class="about_logo"><?php get_template_part('svg/logo', 'sir'); ?></div>



                <div class="row mt-3">

                  <div class="col-lg-4 level_one">
                    a
                  </div>
                  <div class="col-lg-4 level_two">
                    a
                  </div>
                  <div class="col-lg-4 level_three">
                    a
                  </div>

                </div>

                <div class="p_content mt-4"><div class="lefter"><?php the_content()?></div></div>

              <?php

          }
          ?>
      </div>

      <div class="col-lg-2"></div>

    </div>  <!-- row -->
  </section> <!--container -->

<?php
get_footer();
?>
