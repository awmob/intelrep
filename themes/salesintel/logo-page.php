

  <section id="toplogo">

    <div class="row">
        <div class="col-lg-5 logomain"><a href="<?php echo get_home_url() ?>" title="<?php bloginfo('name'); ?>"><?php get_template_part('svg/image', 'logo'); ?></a></div>
        <div class="col-lg-7 text-right right-side">
          <?php get_search_form() ?>

          <span data-feather="youtube" class="top-feather-icons"></span>
          <span data-feather="twitter" class="top-feather-icons"></span>
          <span data-feather="instagram" class="top-feather-icons"></span>
          <span data-feather="user" class="top-feather-icons"></span>
        </div>
    </div>

  </section>




  <?php get_template_part('top', 'navbar'); ?>

  <!--<div id="show"></div>

  <script>
    let mydiv = document.getElementById("show");
    window.addEventListener("resize", () => {
      mydiv.innerText = window.innerWidth;

    });
  </script>-->
