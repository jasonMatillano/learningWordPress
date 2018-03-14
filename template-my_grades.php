<?php

/**
*Template Name: My Grades
*
*/

     get_header();
     
     while(have_posts()){
       the_post(); ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri(" /images/bus.jpg ")?>);"></div>
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

        <div class="generic-content" style="overflow-x:auto;">
            <!--display the content of the page-->

            <table id='grades' style='width:100%' ;>

                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>School</th>
                    <th>Subject</th>
                    <th>Class</th>
                    <th>Prelim</th>
                    <th>Midterm</th>
                    <th>Endterm</th>
                </tr>
                <tr>
                    <td>asdfsafs</td>
                    <td>asdfsafs</td>
                    <td>asdfsafs</td>
                    <td>asdfsafs</td>
                    <td>asdfsafs</td>
                    <td>asdfsafs</td>
                    <td>asdfsafs</td>
                    <td>asdfsafs</td>
                    <td>asdfsafs</td>
                </tr>

            </table>


            <!--display the content of the page-->



        </div>

    </div>


    <?php
     }//end of whilw(have_post)
get_footer();



?>