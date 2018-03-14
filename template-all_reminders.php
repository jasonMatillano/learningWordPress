<?php

/**
*Template Name: All Reminders
*
*/



     get_header();
     
     while(have_posts()){
       the_post(); ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("/images/bus.jpg")?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title()?></h1>
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
     <!--display the content of the page--->
    <?php 
    $servername = "localhost";
    $username = "jason";
    $password = "jas4uuuu";
    $dbname = "matillano";
    

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    // (line for testing conn)echo "Connected successfully<br>";
    

   $sql = 
    "SELECT * 
    FROM wp_posts 
    WHERE post_type 
    IN ('post') 
    ORDER BY post_date DESC
    ";//end of sql
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if ($row["post_status"]=='trash'){
        echo"<h3>Post Title: ".$row["post_title"]."</h3>".
            "<h6>Date: ".$row["post_date"]."</h6>".
            "<br>Post type: ".$row["post_type"].
            "<br>Post status: ".$row["post_status"]. 
            "<br>Content: ".$row["post_content"]."<hr><br><br>";
        } else{}
    }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>  <!--display the content of the page--->
    </div>

  </div>	


       <?php
     }//end of whilw(have_post)
get_footer();



?>