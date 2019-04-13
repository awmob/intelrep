<?php get_header();?>


<title><?php bloginfo('name'); ?> | <?php echo ucwords($pagename); ?></title>
</head>

<body>

  <?php get_template_part('logo', 'page'); ?>

  <div class="container standard_page"><div class="row">

    <div class="col-lg-2"></div>

    <div class="col-lg-8 m-3">
        <?php
        while(have_posts()){
            the_post();
            ?>


              <h1 class="postmain"><?php the_title()?></h1>
              <p><?php the_content()?></p>

            <?php

        }
        ?>
    </div>

    <div class="col-lg-2"></div>

  </div></div>

<?php
get_footer();
?>
