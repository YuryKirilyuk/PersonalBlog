<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Peronal_Blog
 */

$category = get_the_category();

?>


<article id="post-<?php the_ID(); ?>" class="blog-item<?php
        for ($i = 0; $i < count($category); $i++) {
            echo ' ' . $category[$i]->cat_name;
        }
    ?>
">
	<div class="item-image">
        <?php peronal_blog_post_thumbnail(); ?>
	</div><!-- .item-image -->

    <div class="item-title">
        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
    </div>

    <div class="item-footer">
        <div class="item-category">#<?php the_category(' '); ?></div>
        <div class="item-date"><?php echo get_the_date('n.j.Y'); ?></div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
