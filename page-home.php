<?php
/*
  Template Name: Home Page
*/


$hero_image   = get_field('hero_image');
$hero_title   = get_field('hero_title');

$about_text   = get_field('about_text');
$about_video  = get_field('video');

$subscribe_text  = get_field('subscribe_text');



get_header();
?>


<section class="section-hero">
    <div class="wrapper">
        <img alt="" src="<?php echo $hero_image; ?>" />
        <div class="hero-right">
            <h2 class="section-title"><?php echo $hero_title; ?></h2>
            <p>Do you wanna more custumers?</p>
            <a href="#" class="btn">Get Free Consultation</a>
        </div>

    </div>
</section><!-- //.section-hero -->



<section class="section-features">
    <div class="wrapper">
        <h2 class="section-title">WHAT YOU WILL RECIEVE READING MY BLOG?</h2>
        <div class="feature-list">
            <ul>

                <?php
                // check if the repeater field has rows of data
                if( have_rows('features') ):
                    // loop through the rows of data
                    while ( have_rows('features') ) : the_row(); ?>

                    <li>
                        <div class="feature-icon"><img src="<?php the_sub_field('feature_image');?>" alt=""></div>
                        <div class="feature-description"><?php the_sub_field('feature_text');?></div>
                    </li>

                <?php endwhile; endif; ?>

            </ul>
        </div>
    </div>
</section><!-- //.section-features -->



<section class="section-about">
    <div class="wrapper">
        <div class="text">
            <h2 class="section-title"> About me</h2>
            <?php echo $about_text; ?>
        </div>
        <div class="video">
            <div class="video-container">
                <div class="btn-play"></div>
            </div>
            <div class="socials">
                <a href="facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="tweeter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</section><!-- //.section-about -->



<section class="section-articles">
    <div class="wrapper">
        <h2 class="section-title">POPULAR ARTICLES</h2>
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
                                <img src="<?php echo get_the_post_thumbnail_url($recent_post_single); ?>" alt="">
                            </div>
                        </li>

                    <?php   endforeach;
                ?>

            </ul>
        </div>
        <a href="<?php echo get_site_url(); ?>/blog/" class="btn">Go to blog</a>
    </div>
</section><!-- //.section-articles -->


<section class="section-subscribe">
    <div class="wrapper">
        <h3 class="section-title">Yo subscribe this blog!</h3>
        <div class="person-image">
            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/person.png" alt="Person Name">
        </div>
        <div class="section-right">
            <div class="section-text">
                <?php echo $subscribe_text; ?>
            </div>
            <form>
                <input type="email" placeholder="Your email adress" />
                <input type="submit" value="subscribe" />
            </form>
        </div>
    </div>
</section><!-- //.section-subscribe -->



<?php
get_footer();
