<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/fc7261c9f1.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>

<body <?php body_class(); ?>>

    <header class="mainHeader">
        <div class="headerRowTop">
            <div class="container">
                <span><i class="fa fa-map-marker"></i> Silver Market, RNT Road, Indore</span>
                <span><i class="fas fa-phone-alt"></i> 93035-58009 </span>
                <span><i class="fa fa-envelope"></i> <a href="mailto:info@asatiinfotech.com">info@asatiinfotech.com</a></span>
                <span><i class="fab fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=+91-9303558009&text=hi">Whatsapp Chat</a></span>

            </div>
        </div>
        <div class="container">

            <div class="headerRow">
                <div class="headerCol logo">
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></a>
                </div>
                <div class="headerCol menubox">
                    <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
                    <div class="menuToggle"><i class="fas fa-bars"></i></div>
                </div>
            </div>
        </div>
    </header>
    <div id="wrapper" class="hfeed">