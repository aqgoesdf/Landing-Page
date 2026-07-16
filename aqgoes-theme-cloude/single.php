<?php
/**
 * Template para posts individuais
 */
get_header();
?>

<main class="max-w-4xl mx-auto px-4 py-16">
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'bg-bg-card border border-custom rounded-xl p-8' ); ?>>
            <span class="text-gradient font-semibold uppercase text-xs tracking-wider"><?php echo esc_html( get_the_date() ); ?></span>
            <h1 class="text-3xl font-bold text-text-primary mt-2 mb-6"><?php the_title(); ?></h1>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="mb-6 rounded-lg overflow-hidden">
                    <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto' ) ); ?>
                </div>
            <?php endif; ?>
            <div class="text-text-muted leading-relaxed prose prose-invert max-w-none">
                <?php the_content(); ?>
            </div>
        </article>

        <?php if ( comments_open() || get_comments_number() ) : ?>
            <div class="mt-8 bg-bg-card border border-custom rounded-xl p-8">
                <?php comments_template(); ?>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
