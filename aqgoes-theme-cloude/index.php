<?php
/**
 * Template padrão (fallback obrigatório do WordPress)
 */
get_header();
?>

<main class="max-w-4xl mx-auto px-4 py-16">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'bg-bg-card border border-custom rounded-xl p-8 mb-8' ); ?>>
                <h2 class="text-2xl font-bold text-text-primary mb-2">
                    <a href="<?php the_permalink(); ?>" class="hover:text-gradient"><?php the_title(); ?></a>
                </h2>
                <div class="text-text-muted text-sm mb-4"><?php echo esc_html( get_the_date() ); ?></div>
                <div class="text-text-muted leading-relaxed">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>

        <div class="flex justify-between mt-8">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else : ?>
        <p class="text-text-muted"><?php esc_html_e( 'Nenhum conteúdo encontrado.', 'aqgoes' ); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
