<?php /* Template Name: Members Area Template */ ?>
<?php get_header();?>


<title><?php bloginfo('name'); ?> | <?php echo ucwords($pagename); ?></title>
</head>

<body>

  <?php get_template_part('logo', 'page'); ?>

  <section class="container standard_page">

    <div class="row centric">
      <div class="col-md-2">

        <div class="small_logo_main"><?php get_template_part('svg/logo', 'sir'); ?></div>

        <?php

        global $current_user;
        wp_get_current_user();

        ?>

        <div class="welcome_user">Welcome back: <?php echo $current_user->display_name ?></div>


    </div> <!-- end md 2 -->


      <div class="col-md-10">  <h1 class="postmain"><?php the_title()?></h1>

        <hr>







      </div> <!-- end md 10 -->



    </div>

    <div class="row">

    </div>  <!-- row -->


  </section> <!--container -->

<?php
get_footer();
?>
