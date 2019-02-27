
<!DOCTYPE html>
<html <?php language_attributes();?> > 
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="description" content='Plantilla WPCustom'/>

    <title><?php bloginfo('name')?> <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"  />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/bootstrap/bootstrap.min.css"  />

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/misestilos.css"  />

    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/imgs/favicon.ico"  />
    <?php wp_head(); ?>
</head>

<body>

  
<header>
<nav class="navbar bg-info fixed-top" style="padding-top:30px";>
      <div class="container col-md-3">
         <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      </div>
      <div class="nav-menu col-md-9">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </div>
            
</nav>

</header>	




