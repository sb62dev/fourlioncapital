<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<footer class="footer">
    <div class="container">
        <div class="ftrMain">
            <div class="row">
                <div class="col-md-3">
                    <div class="ftr-logo">
                        <a href="/"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo_white.svg" alt="logo" width="200"> </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="ftrLinks ftrMenu-list">
                        <div class="row">
                            <div class="col-md-4">
                                <ul>
                                    <li> <a href="#home"> Home </a></li>
                                    <li> <a href="#about"> About </a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li> <a href="#philosophy"> INVESTMENT Philosophy </a></li>
                                    <li> <a href="#principles"> PRINCIPLES </a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li> <a href="#contact"> INVESTOR PORTAL </a></li>
                                    <li> <a href="#contact"> CONTACT </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ftrBtmCopyright">
            <p class="mb-0"> All rights owned by FourLion Capital Limited </p>
        </div>
    </div>
</footer>
<!--- End of footer --->

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/wow.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/aos.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/slick.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ).'/assets/js/custom.js?v='.time(); ?>"></script>

<?php wp_footer(); ?>

</body>

</html>
