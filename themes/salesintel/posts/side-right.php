<div id="article_text">

  <div id="sir_logo">
    <?php get_template_part('svg/logo', 'sir');?>

  </div>

  <div>
    <h3 class="focuspicks">Latest Intelligence</h3>
    <hr>
  </div>

  <div class="clearfix"></div>


  <?php
    $prev = get_previous_post();
    $next = get_next_post();

    if($next){


      ?>

       <a class="sublink" href="<?php the_permalink($next->ID) ?>">Up Next >></a>
       <br>

      <a class="mainlink" href="<?php the_permalink($next->ID) ?>"><?php echo $next->post_title; ?></a>

      <?php

        $thumb_next = get_the_post_thumbnail_url($next->ID);

      ?>
        <p><a class="mainlink" href="<?php the_permalink($next->ID) ?>">
          <img class="next_prev_img" src="<?php echo $thumb_next; ?>">
        </a></p>

        <hr>
      <?php



    }

    if($prev){

      ?>

       <a class="sublink" href="<?php the_permalink($prev->ID) ?>"><< Prev</a>
       <br>
        <a class="mainlink" href="<?php the_permalink($prev->ID) ?>"><?php echo $prev->post_title;?></a>

      <?php

      $thumb_prev = get_the_post_thumbnail_url($prev->ID);

      ?>
        <p><a class="mainlink" href="<?php the_permalink($prev->ID) ?>">
          <img class="next_prev_img" src="<?php echo $thumb_prev; ?>">
        </a></p>
      <?php

    }

  ?>
</div>
