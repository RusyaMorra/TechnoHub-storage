<?php
global $post;
?>

<header class="entry-header lqd-lp-header mb-3">

    <div class="lqd-lp-meta text-uppercase ltr-sp-1 font-weight-bold">
        <?php $this->entry_tags('lqd-lp-cat reset-ul inline-nav pos-rel z-index-2'); ?>
    </div>

    <?php $this->entry_title('mt-2 mb-3 h5'); ?>

    <div class="lqd-lp-meta lqd-lp-meta-dot-between text-uppercase">
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
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php $this->entry_thumbnail(); ?>
    </a>
</div>
<?php endif; ?>

<?php $this->entry_content('entry-summary lqd-lp-excerpt mt-3 mb-3'); ?>
