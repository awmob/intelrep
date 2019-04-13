<div id="article_main">
  <div>
    <?php
    while(have_posts()){
      the_post();

      if (has_post_thumbnail()) {
        ?>
        <div class="article_thumb_div text-center"><img  class="article_thumb" src="<?php echo get_the_post_thumbnail_url(); ?>" class="post_thumb" alt="<?php the_title() ?>"></div>
      <?php
      }

    ?>
        <div class="col-md-12 mt-5">
          <h1 class="postmain"><?php the_title(); ?></h1>
          <h5 class="authorname"><?php echo get_author_name(); ?></h5>

          <?php echo get_the_date( 'd M, 2019' ) ?>
          <hr>
          <div class="the_content"><?php the_content()?></div>
        </div>
    <?php
    }
    ?>
  </div>

</div>
