<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="-<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IF=edge">
    <meta name="viewport" contact="width=devuce-width, initial-scale=1.0">
    <?php wp_head() ;?>
    
</head>    
<body <?php body_class();?>>
   <div class="header_area">
     <div class="container">
        <div class="row">
           <div class="col-md-3">
              <a href="#"><img src="<?php echo get_theme_mod( 'mcodex_logo' );?>"></a>
           </div>
        </div>
     </div>
   </div>
 <?php wp_footer(  ) ;?>
</body>
</html> 