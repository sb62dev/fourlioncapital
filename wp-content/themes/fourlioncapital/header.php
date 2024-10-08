<?php
/**
 * The header for our theme 
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="iK5X7oc4EP7cKw7s4jhSc081cqBJWSibFdFptJH7LCk" />
<meta property="og:image" content="<?php echo get_home_url(); ?>/wp-content/uploads/2024/08/fourlioncapital-logo.png" />
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.png" />
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/slick-theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ).'/assets/css/custom.css?v='.time(); ?>">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ).'/assets/css/responsive.css?v='.time(); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.min.js"></script>


</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?> 

    <header class="header sticky-header">
        <div class="container">
            <div class="header_main">
                <div class="d-flex">
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="logo" width="140"></a>
                    </div>
                    <div class="main-navigation">
                        <nav class="navbar navbar-expand-lg">
                            <!-- Brand -->
                            <a class="navbar-brand" href="#"> </a>

                            <!-- Toggler/collapsibe Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon-new"></span>
                                <span class="navbar-toggler-icon-new"></span>
                                <span class="navbar-toggler-icon-new"></span>
                            </button>

                            <!-- Navbar links -->
                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <div class="main_nav_top">
                                    <ul>
                                        <li> <a href="#home"> Home </a></li>
                                        <li> <a href="#about"> About </a></li>
                                        <li> <a href="#philosophy"> INVESTMENT Philosophy </a></li>
                                        <li> <a href="#principles"> PRINCIPLES </a></li>
                                        <li> <a href="#contact"> INVESTOR PORTAL </a></li>
                                        <li> <a href="#contact"> CONTACT </a></li>
                                    </ul>
                                </div>
                                <div class="fixdNav">
                                    <div class="fixdNav-head">
                                        <div class="d-flex">
                                            <div class="logo">
                                                <a href="<?php echo get_home_url(); ?>"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="logo" width="140"></a>
                                            </div>
                                            <div class="closeBtn">
                                                <a href="javascript:void(0);" data-target="#collapsibleNavbar" aria-expanded="true" data-toggle="collapse"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/closeMenu.svg" alt="close"> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fixdNav-mid">
                                        <ul>
                                            <li> <a href="#home"> Home </a></li>
                                            <li> <a href="#about"> About </a></li>
                                            <li> <a href="#philosophy"> INVESTMENT Philosophy </a></li>
                                            <li> <a href="#principles"> PRINCIPLES </a></li>
                                            <li> <a href="#contact"> INVESTOR PORTAL </a></li>
                                            <li> <a href="#contact"> CONTACT </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
