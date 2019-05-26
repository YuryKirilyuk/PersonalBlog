<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Peronal_Blog
 */

get_header();

$categories = get_categories();

?>

    <section class="section-tags">
        <div class="wrapper">
            <ul class="tags-list">

                <li class="tag active"><button data-filter="*">All</button></li>
                <?php
                    if( $categories ){
                        foreach( $categories as $cat ){ ?>

                        <li class="tag"><button data-filter=".<?php echo $cat->name; ?>"><?php echo $cat->name; ?></button></li>

                <?php   }
                    }
                ?>


            </ul>
        </div>
    </section><!-- //.section-tags -->

    <section class="section-blog">
        <div class="wrapper">
            <div class="blog-list">

                <?php
                if ( have_posts() ) :

                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();

                        /*
                         * Include the Post-Type-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', 'blog' );

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>
            </div>
        </div><!-- //.wrapper -->

        <div class="load-more">
            <button class="btn">Load more</button>
        </div>

    </section><!-- //.section-hero -->



<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery-3.0.0.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/components/isotope.pkgd.min.js"></script>

<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/custom.js" ></script>

<?php