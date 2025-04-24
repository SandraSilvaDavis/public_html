<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?> Axonp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/styles.min.css">
    <link rel="icon" href="/wp-content/favicon.ico">

     <!-- Swiper Sheet Link Here -->
     <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;500&display=swap" rel="stylesheet">

</head>

<body>
    <div id="headerWrapper">
        <header>
            <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo1x.png" alt="site logo" width="50" height="50"
                    srcset="<?php echo get_template_directory_uri(); ?>/images/logo1x.png 1x, <?php echo get_template_directory_uri(); ?>/images/logo2x.png 2x, <?php echo get_template_directory_uri(); ?>/images/logo3x.png 3x"></a>
                    <button id="theButton"></button>

            <span>APOX</span>
        </header>
    </div><!-- end header wrapper -->



    <div id="navWrapper">

        <nav>
        <?php wp_nav_menu(array('menu_id' => 'theNav')); ?>
          
        </nav>
    </div> <!-- end nav wrapper -->
    

    <div id="mainWrapper">
        <main>


