<?php
/*
  Template Name: Blog Page
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
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '10', 'orderby' => 'post_id', 'order' => 'DESC' ) ); ?>

                <?php if ($loop->have_posts()) : while( $loop->have_posts() ) : $loop->the_post();

                    get_template_part( 'template-parts/content', 'blog' );

                endwhile; wp_reset_query(); endif; ?>



            </div><!-- //.blog-list -->

            <div class="pagination__next"><?php next_posts_link( 'NEXT &raquo;', $loop->max_num_pages) ?></div>


        </div><!-- //.wrapper -->

        <div class="load-more">
            <button class="btn">Load more</button>
        </div>

    </section><!-- //.section-hero -->



<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery-3.0.0.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/components/isotope.pkgd.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/components/infinite-scroll.pkgd.min.js"></script>

<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/custom.js" ></script>

<?php