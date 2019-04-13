<section id="navbar">

  <div  class="container text-center">

    <div id="smallsearch">
			<?php get_search_form() ?>
		</div>

    <div id="navelements">

       <span class="menusep"><a class="menulink" href="<?php echo get_permalink(get_post(40)->ID); ?>"><?php echo get_post(40)->post_title ?></a></span>
       <span class="menusep"><a class="menulink" href="<?php echo get_permalink(get_post(67)->ID); ?>"><?php echo get_post(67)->post_title ?></a></span>



         <?php
          if(is_user_logged_in()){
              ?>
                <span class="menusep"><a class="menulink" href="<?php echo get_permalink(get_post(107)->ID); ?>">Member's Area</a></span>
                <span class="menusep"><a class="menulink" href="<?php echo wp_logout_url(); ?>">Log Out</a></span>
              <?php
          }
          else{
         ?>
              <span class="menusep"><a class="menulink" href="<?php echo wp_login_url(); ?>">Log In</a></span>
              <span class="menusep"><a class="menulink" href="<?php echo get_permalink(get_post(91)->ID); ?>">Register for the SiR Advantage</a></span>
        <?php
          }
        ?>





     </div>
  </div>

  <span class="fa fa-bars" id="hamburgers"></span>
</section>
<?php
//var_dump($_SESSION);
get_user_info();
?>
