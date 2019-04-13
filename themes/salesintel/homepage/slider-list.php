

  <div id="sir_logo">

    <?php get_template_part('svg/logo', 'sir');?>

  </div>

  <div id="sir_text">
    <h3 class="focuspicks">Latest Intelligence</h3>
    <hr>

    <?php
      $args = array( 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
      $postslist = get_posts( $args );


      foreach ($postslist as $post){
        setup_postdata($post);
      ?>
        <div class="latest_intel">
          <a class="mainlink" href="<?php the_permalink(); ?>"><?php the_title();?></a>
          <br>
          <a href="<?php the_permalink(); ?>" class="sublink small"><?php echo get_author_name(); ?></a>
        </div>
      <?php
      }

    ?>

  </div>
