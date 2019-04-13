<div class="container custom_container">

  <?php



  $tracker = 0;
  $setend = false;


  if(have_posts()){

    while (have_posts()){

      the_post();


      //do first post set to special

      if(!$paged){
        //hidden first post when big - only on first page
        if($tracker <= 2){
          if($tracker == 0){
            ?>
            <div class="row" id="top_post">
            <?php
          }//end if 0
        ?>

        <div class="col-md-4 centric textlink">

        <?php

              if (has_post_thumbnail()) {
                ?>
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="post_thumb" alt="<?php the_title() ?>">
                </a>
              <?php
              }
              ?>

            <div class="textlink">
              <a href="<?php the_permalink();?>" class="mainlink">
                <h1 class="postthumb"><?php the_title(); ?></h1>
              </a>
              <br>
              <a class="sublink" href="<?php the_permalink(); ?>"><?php echo get_author_name();?></a><br><br>
              <a class="mainlink" href="<?php the_permalink(); ?>"><?php  the_excerpt();  ?></a>
              <hr class="hrsmallshow">
            </div>


          </div>


        <?php
        if($tracker == 2){

        ?>
          </div>
          <div class="hrbigshow"><hr></div>
       <?php } //end if paged ?>

      <?php
      ++$tracker;
      continue;

    } //end if trcker


      }


      //end first 3 posts



        if($tracker % 3 === 0){
          ?>
            <div class="row">
          <?php
        }


        ?>

        <div class="col-md-4 centric textlink">

        <?php

              if (has_post_thumbnail()) {
                ?>
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="post_thumb" alt="<?php the_title() ?>">
                </a>
              <?php
              }
              ?>

            <div class="textlink">
              <a href="<?php the_permalink();?>" class="mainlink">
                <h1 class="postthumb"><?php the_title(); ?></h1>
              </a>
              <br>
              <a class="sublink" href="<?php the_permalink(); ?>"><?php echo get_author_name();?></a><br><br>
              <a class="mainlink" href="<?php the_permalink(); ?>"><?php  the_excerpt();  ?></a>
              <hr class="hrsmallshow">
            </div>


          </div>

        <?php

        if($tracker % 3 === 2){
          $setend = true;
          ?>
            </div>
            <div class="hrbigshow"><hr></div>
          <?php
        }

        ++$tracker;

    }//end while





    if(!$setend){
      ?>
        </div>





      <?php
    }

    ?>
</div>
    <div class="row mb-5">
      <div class="col-md-3 centric"></div>
      <div class="col-md-6 text-center">

        <?php echo paginate_links(); ?>

      </div>
      <div class="col-md-3 centric"></div>
    </div>

    <?php

  }//end if
