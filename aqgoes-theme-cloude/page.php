<?php
/**
 * Template para páginas internas
 */
get_header();
?>

<main class="max-w-4xl mx-auto px-4 py-16">
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'bg-bg-card border border-custom rounded-xl p-8' ); ?>>
            <h1 class="text-3xl font-bold text-gradient mb-6"><?php the_title(); ?></h1>
            <div class="text-text-muted leading-relaxed prose prose-invert max-w-none">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
