<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 */
?>

<article <?php liquid_helper()->attr( 'post', array('class' => 'lqd-lp lqd-lp-style-22 lqd-lp-title-34 pos-rel') ) ?>>

    <header class="entry-header lqd-lp-header mb-3">

        <div class="lqd-lp-meta text-uppercase ltr-sp-1 font-weight-bold">
            <?php liquid_post_terms(array('taxonomy' => 'post_tag', 'text' => esc_html__('%s', 'hub'), 'solid' => true)); ?>
        </div>

        <?php the_title(sprintf('<h2 class="lqd-lp-title mt-2 mb-3 h5 lh-125"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

        <div class="lqd-lp-meta lqd-lp-meta-dot-between d-flex flex-wrap align-items-center">
            <?php liquid_post_terms(array('taxonomy' => 'category', 'text' => esc_html__('%s', 'hub'), 'solid' => false)); ?>
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
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($size = 'post-thumbnail', ['class' => 'w-100']); ?></a>
            </figure>
        </div>
    <?php endif; ?>

    <div <?php liquid_helper()->attr( 'entry-summary' ) ?>>
        <?php the_excerpt() ?>
    </div>

</article>