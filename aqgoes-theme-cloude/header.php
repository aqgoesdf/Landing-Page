<!DOCTYPE html>
<html lang="pt-BR" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        bg: '#0a0a0f',
                        'bg-2': '#12121a',
                        'bg-card': '#1a1a28',
                        'text-primary': '#e8e8f0',
                        'text-muted': '#888899',
                    },
                    backgroundImage: {
                        'grad-primary': 'linear-gradient(135deg, #6c63ff 0%, #ff6584 50%, #ffa94d 100%)',
                        'grad-hero': 'linear-gradient(135deg, #0a0a0f 0%, #1a0a2e 50%, #0a1a1f 100%)',
                        'grad-html': 'linear-gradient(135deg, #e34c26, #f06529)',
                        'grad-css': 'linear-gradient(135deg, #264de4, #2965f1)',
                        'grad-js': 'linear-gradient(135deg, #f7df1e, #ffa500)',
                        'grad-python': 'linear-gradient(135deg, #3776ab, #ffd43b)',
                    }
                }
            }
        }
    </script>

    <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-bg text-text-primary font-sans antialiased scroll-smooth' ); ?>>
<?php wp_body_open(); ?>

<header class="sticky top-0 z-50 bg-[#0a0a0f]/90 backdrop-blur-md border-b border-custom">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-2xl font-bold tracking-wider text-gradient">
            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                bloginfo( 'name' );
            }
            ?>
        </a>

        <nav class="hidden md:flex space-x-8">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'items_wrap'     => '%3$s',
                'fallback_cb'    => 'aqgoes_default_menu',
                'link_before'    => '',
                'link_after'     => '',
                'depth'          => 1,
            ) );
            ?>
        </nav>

        <a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'aqgoes_whatsapp', '5561999999999' ) ); ?>"
           target="_blank" rel="noopener"
           class="bg-grad-primary text-white font-semibold px-4 py-2 rounded-lg hover:opacity-90 transition-opacity">
            <?php esc_html_e( 'Fale Comigo', 'aqgoes' ); ?>
        </a>
    </div>
</header>
