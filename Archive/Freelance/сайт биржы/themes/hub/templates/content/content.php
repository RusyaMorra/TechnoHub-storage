<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 */

global $post;

?>

<article <?php liquid_helper()->attr('post', array('class' => 'lqd-lp lqd-lp-style-22 lqd-lp-title-34 pos-rel')) ?>>

    <?php if (is_singular()) : ?>

        <?php if ('' !== get_the_post_thumbnail()) : ?>
            <figure class="post-image hmedia lqd-lp-img overflow-hidden border-radius-5 mb-5 d-inline-flex w-auto">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </figure>
        <?php endif; ?>

        <header class="entry-header">

            <?php the_title('<h1 ' . liquid_helper()->get_attr('entry-title') . '>', '</h1>'); ?>

            <?php get_template_part('templates/entry', 'meta') ?>

        </header>

        <div <?php liquid_helper()->attr('entry-content') ?>>
            <?php
            the_content(sprintf(
                esc_html__('Continue reading %s', 'hub'),
                the_title('<span class="screen-reader-text">', '</span>', false)
            ));

            wp_link_pages(array(
                'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'hub') . '</span>',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>',
                'pagelink' => '<span class="screen-reader-text">' . esc_html__('Page', 'hub') . ' </span>%',
                'separator' => '<span class="screen-reader-text">, </span>',
            ));
            ?>
        </div>

        <footer class="entry-footer lqd-lp-footer d-flex flex-wrap">
            <?php liquid_post_terms(array('taxonomy' => 'category', 'text' => esc_html__('Posted in: %s', 'hub'), 'solid' => true)); ?>
            <?php liquid_post_terms(array('taxonomy' => 'post_tag', 'text' => esc_html__('Tagged: %s', 'hub'), 'before' => ' | ', 'solid' => true)); ?>
        </footer>

    <?php else: ?>

        <header class="entry-header lqd-lp-header mb-3">

            <div class="lqd-lp-meta text-uppercase ltr-sp-1 font-weight-bold">
                <?php liquid_post_terms(array('taxonomy' => 'category', 'text' => esc_html__('%s', 'hub'), 'solid' => true)); ?>
            </div>

            <?php the_title(sprintf('<h2 class="lqd-lp-title mt-2 mb-3 h5 lh-125"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

            <div class="lqd-lp-meta lqd-lp-meta-dot-between d-flex flex-wrap align-items-center">
                <?php liquid_post_terms(array('taxonomy' => 'post_tag', 'text' => esc_html__('%s', 'hub'), 'solid' => false)); ?>
                <div class="lqd-lp-author pos-rel z-index-2">
                    <div class="lqd-lp-author-info">
                        <h3 class="my-0"><?php the_author_posts_link(); ?></h3>
                    </div>
                </div>
                <span class="lqd-lp-date pos-rel z-index-2">
                    <a href="<?php the_permalink() ?>"><?php echo get_the_date(get_option('date_time')); ?></a>
                </span>
            </div>

        </header>

        <?php if ('' !== get_the_post_thumbnail()) : ?>
            <div class="lqd-lp-img overflow-hidden border-radius-5 mt-4 mb-5">
                <figure>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($size = 'post-thumbnail'); ?></a>
                </figure>
            </div>
        <?php endif; ?>

        <div <?php liquid_helper()->attr( 'entry-summary' ) ?>>
            <?php

            $page_content = apply_filters('the_content', $post->post_content);
            if (strpos($post->post_content, '<!--more-->')) :
                echo substr($page_content, 0, strpos($page_content, "<!--more-->"));

                ?>
            <?php else: ?>

                <?php the_excerpt() ?>

            <?php endif; ?>

        </div>

    <?php endif; ?>

    <?php
    // Author bio.
    if (is_single() && get_the_author_meta('description')) :
        get_template_part('templates/author', 'bio');
    endif;
    ?>

</article>