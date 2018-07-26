<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="UTF-8">
    
    

	<?php wp_head(); ?>		
	
	</head>
<body <?php body_class(); ?>	>
    
     <header class="header clearfix">
        <a href="" class="header__logo"></a>
        <a href="" class="header__icon-bar">
        <span></span>
        <span></span>
        <span></span>
        </a>
        
        
		
		<?php /* Main Navigation */
        wp_nav_menu( array(
          'theme_location' => 'header',
          'depth' => 2,
          'container' => false,
          'menu_class' => 'header__menu'
          )
        );
      ?>
        

		
    </header>
    