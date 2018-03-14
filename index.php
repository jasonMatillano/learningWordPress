<?php
get_header();
?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/library-hero.jpg')?>);"></div>
    <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <!--h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
      <!--h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3-->
        <h5 class="headline headline--small">This site is for personal use only</h5>
        <!--a href="#" class="btn btn--large btn--blue">Find Your Major</a-->
    </div>
</div>

<div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Recent Posts</h2>
            <?php while(have_posts()){
			the_post(); 
			?>
            <hr>
            <div class="event-summary">
                <a class="event-summary__date t-center" href="#">
				<?php $pfx_date = get_the_date( $format , $post_id );
				 $mon_posted = substr($pfx_date,0,2);
				 $day_posted = substr($pfx_date,3,2);
				?>
                    <span class="event-summary__month"><?php echo display_mon($mon_posted);?></span>
                    <span class="event-summary__day"><?php echo $day_posted?></span>
                </a>

                <div class="event-summary__content">

                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink()?>"><strong><?php the_title()?></strong></a></h5>
                    <?php the_content()?>

                </div>
            </div>
            <?php } 
            ?>

            <!--
        <div class="event-summary">
          <a class="event-summary__date t-center" href="#">
            <span class="event-summary__month">Apr</span>
            <span class="event-summary__day">02</span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>
            <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="nu gray">Learn more</a></p>
          </div>
        </div>
        -->
            <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Posts</a></p>


        </div>
    </div>



    <div class="full-width-split__two">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Important Reminders</h2>
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
    ORDER BY post_date DESC; 
    ";//end of sql
    $result = mysqli_query($conn, $sql);    
        if (mysqli_num_rows($result) > 0) {
        // output data of each ro   w
        while($row = mysqli_fetch_assoc($result)) {
            if ($row["post_status"]=='trash'){    
    ?>
            <hr>
            <div class="event-summary">
                <a class="event-summary__date event-summary__date--beige t-center" href="#">
                    <?php
                    $pfx_date = $row["post_date"];
                    $mon_posted = substr($pfx_date,5,2);
			        $day_posted = substr($pfx_date,8,2);
                    ?>
                        <span class="event-summary__month"><?php echo display_mon($mon_posted);?></span>
                        <span class="event-summary__day"><?php echo $day_posted?></span>
                </a>

                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny">
                        <a href="#">
                            <?php echo $row["post_title"]?>
                        </a>
                    </h5>
                    <p>
                        <!--display the content of the page-->
                        <?php echo $row["post_content"]?>
                    </p>
                    <!--content-->
                </div>
            </div>

            <?php
            }
    }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>


                <!--for refrence <div class="event-summary">

                <a class="event-summary__date event-summary__date--beige t-center" href="#">
            <span class="event-summary__month">Feb</span>
            <span class="event-summary__day">04</span>  
          </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="#">Professors in the National Spotlight</a></h5>
                    <p>Two of our professors have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
                </div>
            </div> -->


                <p class="t-center no-margin"><a href="<?php echo site_url('/index.php/all-posts')?>" class="btn btn--yellow">View All Reminders</a></p>
        </div>
    </div>
</div>

<div class="hero-slider">
    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bus.jpg')?>);">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Transportation</h2>
                <p class="t-center">All students have free unlimited bus fare.</p>
                <!--p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p-->
            </div>
        </div>
    </div>
    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/apples.jpg')?>);">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                <p class="t-center">Our dentistry program recommends eating apples.</p>
                <!--p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p-->
            </div>
        </div>
    </div>
    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bread.jpg')?>);">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Food</h2>
                <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                <!--p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p-->
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
?>