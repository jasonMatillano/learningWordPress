<?php

//Add css and java script
//===============================================================================
function my_files(){
  wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.0',true);
  wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awsome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('my_name_styles',get_stylesheet_uri());
  wp_enqueue_style('my_grades_style',get_template_directory_uri() . '/style2.css');
}
add_action('wp_enqueue_scripts','my_files');

//Add Titele tag
//==============================================================================
function university_features(){
	add_theme_support('title-tag');
}
add_action('after_setup_theme','university_features');


//Activate Menu 
//=============================================================================
function university_menu_setup(){
    add_theme_support('menus');
    register_nav_menu('primary','Primary Header Navigation');
    register_nav_menu('secondary','Main Footer Navigation');
}
add_action('init','university_menu_setup');

//get date function
//==============================================================================
function display_mon($mon_posts){ 
    if ($mon_posts == '01'){ return "JAN";}
    else if ($mon_posts == '02'){ return "FEB";}
    else if ($mon_posts == '03'){ return "MAR";}
    else if ($mon_posts == '04'){ return "APR";}
    else if ($mon_posts == '05'){ return "MAY";}
    else if ($mon_posts == '06'){ return "JUN";}
    else if ($mon_posts == '07'){ return "JUL";}
    else if ($mon_posts == '08'){ return "AUG";}
    else if ($mon_posts == '09'){ return "SEP";}
    else if ($mon_posts == '10'){ return "OCT";}
    else if ($mon_posts == '11'){ return "NOV";}
    else if ($mon_posts == '12'){ return "DEC";}
    else {}
}
