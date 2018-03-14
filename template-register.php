<?php

/**
*Template Name: Register
*
*/



     get_header();
     
     while(have_posts()){
       the_post(); ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("/images/bus.jpg ")?>);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title">
                <?php the_title()?>
            </h1>
            <div class="page-banner__intro">
                <p>Replace Later</p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">

        <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main">Our History</span></p>
        </div>

        <!--
    <div class="page-links">
      <h2 class="page-links__title"><a href="#">About Us</a></h2>
      <ul class="min-list">
        <li class="current_page_item"><a href="#">Our History</a></li>
        <li><a href="#">Our Goals</a></li>
      </ul>
    </div>
  -->

        <div class="generic-content">
            <div id="register_form">
                <form action="/action_page.php">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name.." size=20>

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="country">Country</label>
                    <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    </select>

                    <input id="submit_register" type="submit" value="Submit">
                </form>
            </div>
        </div>

    </div>


    <?php
     }//end of whilw(have_post)
get_footer();



?>