<?php get_header();?>


<?php

  if(trim(get_search_query()) == ""){
    $results_search = "All";
  }
  else{
    $results_search = get_search_query();
  }

?>

<title><?php echo bloginfo('name') . " | Search Results for $results_search"; ?></title>
</head>

<body>





    <?php get_template_part('logo', 'page'); ?>

      <div class="container custom_container mt-3">

        <div class="row">
          <div class="col-md-3 centric textlink"></div>
          <div class="col-md-6 centric textlink">

            <h1 class="postmain">'<?php echo $results_search; ?>' Search Results</h1>

            <p>  <?php echo $wp_query->found_posts; ?> Results Found!</p>
            <hr>
          </div>
          <div class="col-md-3 centric textlink"></div>
        </div>


          <?php


                if ( have_posts() ) {
                  //foreach($wp_query->posts  as $post){
                  while (have_posts()){

                    the_post();

                        ?>

                        <div class="row">

                          <div class="col-md-3 centric textlink"></div>

                          <div class="col-md-6 centric textlink">

                              <a href="<?php the_permalink();?>" class="mainlink">
                                <h1 class="postthumb"><?php the_title(); ?></h1>
                              </a>
                              <br>
                              <a class="sublink" href="<?php the_permalink(); ?>"><?php echo get_author_name();?></a><br><br>
                              <a class="mainlink" href="<?php the_permalink(); ?>"><?php  the_excerpt();  ?></a>
                              <hr>

                          </div>

                          <div class="col-md-3 centric textlink"></div>

                        </div>

                        <?php
                      }
                    }
                      ?>

                      <div class="row mb-5">
                        <div class="col-md-3 centric"></div>
                        <div class="col-md-6 text-center">

                          <?php echo paginate_links(); ?>

                        </div>
                        <div class="col-md-3 centric"></div>
                      </div>

              </div>
          </div>
      </div>



<?php get_footer(); ?>
