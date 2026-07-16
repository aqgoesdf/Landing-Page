<?php
/**
 * AQGoes Portfolio - funções do tema
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Setup básico do tema
 */
function aqgoes_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 80,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'responsive-embeds' );

    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'aqgoes' ),
    ) );

    load_theme_textdomain( 'aqgoes', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'aqgoes_setup' );

/**
 * Enfileira estilos do tema (o Tailwind CDN é carregado diretamente no header.php)
 */
function aqgoes_scripts() {
    wp_enqueue_style( 'aqgoes-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'aqgoes_scripts' );

/**
 * Menu de fallback (caso nenhum menu tenha sido criado em Aparência > Menus)
 */
function aqgoes_default_menu() {
    echo '<a href="#sobre" class="hover:text-white transition-colors">' . esc_html__( 'Sobre', 'aqgoes' ) . '</a>';
    echo '<a href="#trajetoria" class="hover:text-white transition-colors">' . esc_html__( 'Trajetória', 'aqgoes' ) . '</a>';
    echo '<a href="#tecnologias" class="hover:text-white transition-colors">' . esc_html__( 'Tecnologias', 'aqgoes' ) . '</a>';
}

/**
 * Adiciona classes Tailwind aos links do menu de navegação principal
 */
function aqgoes_nav_menu_link_attributes( $atts, $item, $args ) {
    if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
        $atts['class'] = 'hover:text-white transition-colors';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'aqgoes_nav_menu_link_attributes', 10, 3 );

/**
 * Customizer: textos editáveis sem precisar mexer em código
 */
function aqgoes_customize_register( $wp_customize ) {

    // Seção: Hero
    $wp_customize->add_section( 'aqgoes_hero_section', array(
        'title'    => __( 'Seção Hero (Sobre)', 'aqgoes' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'aqgoes_hero_kicker', array(
        'default'           => 'Desenvolvedor Web Full Stack',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'aqgoes_hero_kicker', array(
        'label'   => __( 'Chamada acima do título', 'aqgoes' ),
        'section' => 'aqgoes_hero_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'aqgoes_hero_title', array(
        'default'           => 'Construindo soluções web robustas e modernas.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'aqgoes_hero_title', array(
        'label'   => __( 'Título principal', 'aqgoes' ),
        'section' => 'aqgoes_hero_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'aqgoes_hero_description', array(
        'default'           => 'Olá! Sou o especialista por trás da AQGoes. Sou desenvolvedor Full Stack focado em criar aplicações modernas, funcionais e otimizadas. Unindo uma sólida experiência em suporte e análise técnica no setor público com o estudo constante das tecnologias mais demandadas do mercado, transformo ideias em código de alto desempenho.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'aqgoes_hero_description', array(
        'label'   => __( 'Descrição', 'aqgoes' ),
        'section' => 'aqgoes_hero_section',
        'type'    => 'textarea',
    ) );

    $wp_customize->add_setting( 'aqgoes_hero_location', array(
        'default'           => 'Brasília - DF',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'aqgoes_hero_location', array(
        'label'   => __( 'Localização exibida no avatar', 'aqgoes' ),
        'section' => 'aqgoes_hero_section',
        'type'    => 'text',
    ) );

    // Seção: Contato
    $wp_customize->add_section( 'aqgoes_contact_section', array(
        'title'    => __( 'Contato', 'aqgoes' ),
        'priority' => 40,
    ) );

    $wp_customize->add_setting( 'aqgoes_whatsapp', array(
        'default'           => '5561999999999',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'aqgoes_whatsapp', array(
        'label'       => __( 'Número do WhatsApp (só números, com DDI+DDD)', 'aqgoes' ),
        'description' => __( 'Ex: 5561999999999', 'aqgoes' ),
        'section'     => 'aqgoes_contact_section',
        'type'        => 'text',
    ) );
}
add_action( 'customize_register', 'aqgoes_customize_register' );

/**
 * Widgets da lateral (não usados na home, mas registrados para uso em outras páginas/posts)
 */
function aqgoes_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Barra Lateral', 'aqgoes' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="bg-bg-card p-6 rounded-xl border border-custom mb-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-lg font-bold mb-3 text-text-primary">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'aqgoes_widgets_init' );
