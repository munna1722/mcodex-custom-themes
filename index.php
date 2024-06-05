<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="-<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IF=edge">
    <meta name="viewport" contact="width=devuce-width, initial-scale=1.0">
    <?php wp_head() ;?>
    <style>
       .header_area{
         Background: <?php echo get_theme_mod('header_bg', '#fff'); ?>
       }
    </style>
    
</head>    
<body <?php body_class();?>>
   <div id="header_area" class="header_area <?php echo get_theme_mod('header_bg', '#fff')?>">
     <div class="container">
        <div class="row">
           <div class="col-md-3">
              <a href="#"><img src="<?php echo get_theme_mod( 'mcodex_logo' );?>"></a>
           </div>
           <div class="col-md-9">
              <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') ); ?>
           </div>
        </div>
     </div>
   </div>
 <?php wp_footer(  ) ;?>
</body>
</html> 