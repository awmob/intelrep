

<?php get_header();?>


<title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
</head>

<body>

  <?php get_template_part('logo', 'page'); ?>



  <div id="article_container" class="custom_container">
    <div class="row" id="articlemargins">

        <?php get_template_part('posts/post', 'main');?>

        <div class="clearfix"></div>

        <?php get_template_part('posts/side', 'right');?>

        <div class="clearfix"></div>

        <?php get_template_part('posts/side', 'bottom');?>


    </div>





  </div>


<?php

get_footer();
?>
