<?php



 function ju_enqueue()
{
    $uri = get_theme_file_uri();


    /* finding all style sheet*/
     wp_register_style('ju_google_fonts','https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i'); 
     wp_register_style('ju_bootstrap', $uri.'/assets/css/bootstrap.css'); 
     wp_register_style('ju_style', $uri.'/assets/css/style.css'); 
     wp_register_style('ju_dark', $uri.'/assets/css/dark.css'); 
     wp_register_style('ju_font-icons', $uri.'/assets/css/font-icons.css'); 
     wp_register_style('ju_animate', $uri.'/assets/css/animate.css'); 
     wp_register_style('ju_magnific-popup', $uri.'/assets/css/magnific-popup.css'); 
     wp_register_style('ju_responsive', $uri.'/assets/css/responsive.css'); 
     wp_register_style('ju_custom', $uri.'/assets/css/custom.css'); 

     /* ask to give output all style sheet*/
     wp_enqueue_style('ju_google_fonts','https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i');
     wp_enqueue_style('ju_bootstrap', $uri.'/assets/css/bootstrap.css'); 
     wp_enqueue_style('ju_style', $uri.'/assets/css/style.css'); 
     wp_enqueue_style('ju_dark', $uri.'/assets/css/dark.css'); 
     wp_enqueue_style('ju_font-icons', $uri.'/assets/css/font-icons.css'); 
     wp_enqueue_style('ju_animate', $uri.'/assets/css/animate.css'); 
     wp_enqueue_style('ju_magnific-popup', $uri.'/assets/css/magnific-popup.css'); 
     wp_enqueue_style('ju_responsive', $uri.'/assets/css/responsive.css'); 
     wp_enqueue_style('ju_custom', $uri.'/assets/css/custom.css'); 
        
 /* finding all js*/
     wp_register_script('ju_plugins', $uri.'/assets/js/plugin.js',[],false,true);
     wp_register_script('ju_functions', $uri.'/assets/js/functions.js',[],false,true);

     wp_enqueue_script('jquery'); 
     wp_enqueue_script('ju_plugins', $uri.'/assets/js/plugin.js'); 
     wp_enqueue_script('ju_functions', $uri.'/assets/js/functions.js'); 

}

?>