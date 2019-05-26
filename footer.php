<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Peronal_Blog
 */

?>

</main>


<footer class="site-footer">

    <div class="wrapper">

        <?php
        wp_nav_menu(array(
            'theme_location'  => 'primary',
            'container'       => 'nav',
            'container_class' => 'footer-nav',
            'menu_class'      => 'menu'
        ));
        ?>

        <div class="lang">
            <p>Language</p>
            <div>
                <a href="#"class="active">English</a>
                <a href="#">Pshecka</a>
                <a href="#">Espanol</a>
            </div>
        </div>
        <div class="socials">
            <a href="facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</footer>


</div>

<div class="icon-load"></div>

<?php wp_footer(); ?>


<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery-3.0.0.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/components/slick.js"></script>

<!--
<script src="js/components/jquery.fancybox.js" ></script>
<script src="js/components/jquery.formstyler.js" ></script>
<script src="js/components/jquery.mCustomScrollbar.js" ></script>
-->
<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/custom.js" ></script>


</body>
</html>
