<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Peronal_Blog
 */

get_header();
?>


    <?php
    while ( have_posts() ) :
        the_post();
    ?>

        <div class="article-hero-image">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
        </div>

        <div class="section-article">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="wrapper">
                    <div class="meta">
                        <div class="article-date"><?php echo get_the_date('l j F Y'); ?></div>
                    </div>
                    <div class="article-title"><?php the_title(); ?></div>

                    <?php the_content(); ?>

                    <div class="article-category">
                        <p>#<?php the_category(', #'); ?></p>
                    </div>

                </div><!-- //.wrapper -->

            </article>
        </div><!-- //.section-article -->






        <section class="section-subscribe">
            <div class="wrapper">
                <h3 class="section-title">Like this post? subscribe this blog!</h3>
                <div class="person-image">
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/person.png" alt="Person Name" />
                </div>
                <div class="section-right">
                    <div class="section-text">
                        orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                    <form>
                        <input type="email" placeholder="Your email adress" />
                        <input type="submit" value="subscribe" />
                    </form>
                </div>
            </div>
        </section><!-- //.section-subscribe -->



        <section class="more-posts">
            <div class="wrapper">
                <h2 class="section-title">You might be interesting in</h2>
                <div class="article-list">
                    <ul>
                        <?php
                        $params = array(
                            'post_type' => 'post',
                            'numberposts' => 3,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'suppress_filters' => true
                        );
                        $recent_posts_array = get_posts($params);

                        foreach( $recent_posts_array as $recent_post_single ) : ?>

                            <li>
                                <div class="article-title">
                                    <a href="<?php echo get_permalink( $recent_post_single ); ?>"><?php echo $recent_post_single->post_title; ?></a>
                                </div>
                                <div class="article-image">
                                    <img src="<?php echo get_the_post_thumbnail_url($recent_post_single); ?>" alt="<?php echo $recent_post_single->post_title; ?>">
                                </div>
                            </li>

                        <?php   endforeach;
                        ?>

                    </ul>
                </div>
            </div>
        </section><!-- //.more-posts -->

        <section class="section-comments">
            <div class="wrapper">
                COMMENTS HERE

            <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>

            </div>
        </section><!-- //.section-comments -->


    <?php endwhile; // End of the loop.?>


<?php
get_footer();
