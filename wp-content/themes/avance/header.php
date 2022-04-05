<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css">
    <title>Document</title>
</head>

<body>
    <div id="page" class="site"
        style="background:url('https://www.avanceliving.com/wp-content/uploads/2016/07/lakehouse-body-texture-1.jpg') repeat;">
        <header id="masthead" class="site-header" role="banner">
            <div class="site-inner">
                <div class="site-header-main">
                    <div class="site-branding">

                        <h1 class="site-title"><a href="" title="Avance" rel="home">
                                <img class="brand"
                                    src="https://www.avanceliving.com/wp-content/themes/aliento/images/avance-logo.png"
                                    alt="Avance Logo"></a></h1>
                    </div><!-- .site-branding -->


                    <button id="menu-toggle" class="menu-toggle" aria-expanded="false" aria-controls="site-navigation social-navigation">Menu</button>
                    <div id="site-header-menu" class="site-header-menu">
                        <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Menu">
                            <?php wp_nav_menu(array(
    'theme_location'=>'primary_menu'
    ,'menu_class'=>'menu-new-main-menu-container',
    'orderby' => 'menu_order' 
                            ));
                           
                            global $latest_route_controller;    
                            // echo  $latest_route_controller;                       
 $latest_route_controller = new Latest_route_Controller('custom/v1','header',"custom_api_callback_function");
?>
                        </nav><!-- .main-navigation -->


                    </div><!-- .site-header-menu -->
                    <div class="clear"></div>
                </div><!-- .site-header-main -->


            </div>
        </header>