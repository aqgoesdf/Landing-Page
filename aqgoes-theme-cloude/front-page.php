<?php
/**
 * Template da página inicial (one-page portfolio)
 */
get_header();
?>

<style>
    :root {
        --bg: #0a0a0f;
        --bg-2: #12121a;
        --bg-card: #1a1a28;
        --border: rgba(255, 255, 255, 0.08);
        --text: #e8e8f0;
        --text-muted: #888899;
        --grad-primary: linear-gradient(135deg, #6c63ff 0%, #ff6584 50%, #ffa94d 100%);
        --grad-hero: linear-gradient(135deg, #0a0a0f 0%, #1a0a2e 50%, #0a1a1f 100%);
        --grad-html: linear-gradient(135deg, #e34c26, #f06529);
        --grad-css: linear-gradient(135deg, #264de4, #2965f1);
        --grad-js: linear-gradient(135deg, #f7df1e, #ffa500);
        --grad-python: linear-gradient(135deg, #3776ab, #ffd43b);
    }
</style>

<!-- SEÇÃO 1: HERO (SOBRE) -->
<section id="sobre" class="relative py-20 md:py-32 bg-grad-hero">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-12 gap-8 items-center">
        <div class="md:col-span-7 space-y-6">
            <span class="text-gradient font-bold tracking-wider uppercase text-sm block">
                <?php echo esc_html( get_theme_mod( 'aqgoes_hero_kicker', 'Desenvolvedor Web Full Stack' ) ); ?>
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight leading-tight">
                <?php echo esc_html( get_theme_mod( 'aqgoes_hero_title', 'Construindo soluções web robustas e modernas.' ) ); ?>
            </h1>
            <p class="text-text-muted text-lg leading-relaxed">
                <?php echo esc_html( get_theme_mod( 'aqgoes_hero_description', 'Olá! Sou o especialista por trás da AQGoes.' ) ); ?>
            </p>
            <div class="pt-4 flex flex-wrap gap-4">
                <a href="#trajetoria" class="border border-custom hover:border-[#6c63ff] px-6 py-3 rounded-lg font-medium transition-all">
                    <?php esc_html_e( 'Conhecer Trajetória', 'aqgoes' ); ?>
                </a>
            </div>
        </div>
        <div class="md:col-span-5 flex justify-center">
            <div class="w-72 h-72 rounded-full bg-grad-primary p-1 shadow-2xl">
                <div class="w-full h-full bg-bg rounded-full flex flex-col items-center justify-center text-center p-6">
                    <span class="text-5xl mb-2">💻</span>
                    <span class="font-bold text-xl text-text-primary"><?php bloginfo( 'name' ); ?></span>
                    <span class="text-sm text-text-muted"><?php echo esc_html( get_theme_mod( 'aqgoes_hero_location', 'Brasília - DF' ) ); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SEÇÃO 2: TRAJETÓRIA (EXPERIÊNCIA) -->
<section id="trajetoria" class="bg-bg-2 py-20 border-y border-custom">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gradient"><?php esc_html_e( 'Experiência & Trajetória', 'aqgoes' ); ?></h2>
            <p class="text-text-muted mt-2"><?php esc_html_e( 'Sólida carreira construída com suporte e análise de TI no Senado Federal.', 'aqgoes' ); ?></p>
        </div>

        <div class="relative border-l border-custom ml-4 md:ml-6 space-y-10">

            <div class="relative pl-8">
                <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#ff6584] border-4 border-[#12121a]"></div>
                <span class="text-sm text-[#ff6584] font-semibold"><?php esc_html_e( 'Momento Atual', 'aqgoes' ); ?></span>
                <h3 class="text-xl font-bold mt-1 text-text-primary"><?php esc_html_e( 'Analista Técnico Sênior (Terceirizado)', 'aqgoes' ); ?></h3>
                <h4 class="text-text-muted text-sm"><?php esc_html_e( 'Comissões do Senado Federal', 'aqgoes' ); ?></h4>
                <p class="text-text-muted mt-2 text-sm leading-relaxed">
                    <?php esc_html_e( 'Atuação estratégica de suporte e análise técnica diretamente nas comissões do Senado Federal, garantindo estabilidade, segurança e eficiência no fluxo tecnológico de processos legislativos críticos.', 'aqgoes' ); ?>
                </p>
            </div>

            <div class="relative pl-8">
                <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#6c63ff] border-4 border-[#12121a]"></div>
                <span class="text-sm text-[#6c63ff] font-semibold"><?php esc_html_e( 'Etapa Anterior', 'aqgoes' ); ?></span>
                <h3 class="text-xl font-bold mt-1 text-text-primary"><?php esc_html_e( 'Técnico Nível 1 & Nível 2 (Terceirizado)', 'aqgoes' ); ?></h3>
                <h4 class="text-text-muted text-sm"><?php esc_html_e( 'Senado Federal', 'aqgoes' ); ?></h4>
                <p class="text-text-muted mt-2 text-sm leading-relaxed">
                    <?php esc_html_e( 'Atuação na linha de frente do suporte de TI, solucionando incidentes complexos de infraestrutura e sistemas, além de garantir a continuidade operacional das atividades parlamentares.', 'aqgoes' ); ?>
                </p>
            </div>

            <div class="relative pl-8">
                <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#ffa94d] border-4 border-[#12121a]"></div>
                <span class="text-sm text-[#ffa94d] font-semibold"><?php esc_html_e( 'Formação & Autonomia', 'aqgoes' ); ?></span>
                <h3 class="text-xl font-bold mt-1 text-text-primary"><?php esc_html_e( 'Estudos por Conta própria & Ensino Superior', 'aqgoes' ); ?></h3>
                <h4 class="text-text-muted text-sm"><?php esc_html_e( 'Graduação Full Stack', 'aqgoes' ); ?></h4>
                <p class="text-text-muted mt-2 text-sm leading-relaxed">
                    <?php esc_html_e( 'Unindo a disciplina dos estudos autodidatas com uma formação superior estruturada em Desenvolvimento Full Stack. Dedicação diária ao aprendizado prático de arquitetura de software e engenharia web (Python, HTML, CSS, JS e WordPress).', 'aqgoes' ); ?>
                </p>
            </div>

        </div>
    </div>
</section>

<!-- SEÇÃO 3: TECNOLOGIAS & ESTUDOS -->
<section id="tecnologias" class="py-20 max-w-6xl mx-auto px-4">
    <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-gradient"><?php esc_html_e( 'Tecnologias & Especialidades', 'aqgoes' ); ?></h2>
        <p class="text-text-muted mt-2"><?php esc_html_e( 'O conjunto de ferramentas que utilizo para criar soluções completas.', 'aqgoes' ); ?></p>
    </div>

    <div class="grid md:grid-cols-4 gap-6">
        <div class="bg-bg-card p-6 rounded-xl border border-custom hover:scale-[1.02] transition-transform">
            <div class="w-12 h-12 rounded-lg bg-grad-html flex items-center justify-center text-white font-extrabold text-lg mb-4 shadow-lg">HTML</div>
            <h3 class="text-lg font-bold mb-1 text-text-primary"><?php esc_html_e( 'Estrutura Web', 'aqgoes' ); ?></h3>
            <p class="text-text-muted text-xs leading-relaxed"><?php esc_html_e( 'Desenvolvimento de marcação semântica focada em acessibilidade e SEO.', 'aqgoes' ); ?></p>
        </div>

        <div class="bg-bg-card p-6 rounded-xl border border-custom hover:scale-[1.02] transition-transform">
            <div class="w-12 h-12 rounded-lg bg-grad-css flex items-center justify-center text-white font-extrabold text-lg mb-4 shadow-lg">CSS</div>
            <h3 class="text-lg font-bold mb-1 text-text-primary"><?php esc_html_e( 'Estilização', 'aqgoes' ); ?></h3>
            <p class="text-text-muted text-xs leading-relaxed"><?php esc_html_e( 'Layouts responsivos, animações fluidas e design moderno sob medida.', 'aqgoes' ); ?></p>
        </div>

        <div class="bg-bg-card p-6 rounded-xl border border-custom hover:scale-[1.02] transition-transform">
            <div class="w-12 h-12 rounded-lg bg-grad-js flex items-center justify-center text-slate-900 font-extrabold text-lg mb-4 shadow-lg">JS</div>
            <h3 class="text-lg font-bold mb-1 text-text-primary"><?php esc_html_e( 'Interatividade', 'aqgoes' ); ?></h3>
            <p class="text-text-muted text-xs leading-relaxed"><?php esc_html_e( 'Comportamentos dinâmicos, consumo de APIs e lógica client-side.', 'aqgoes' ); ?></p>
        </div>

        <div class="bg-bg-card p-6 rounded-xl border border-custom hover:scale-[1.02] transition-transform">
            <div class="w-12 h-12 rounded-lg bg-grad-python flex items-center justify-center text-slate-900 font-extrabold text-lg mb-4 shadow-lg">PY</div>
            <h3 class="text-lg font-bold mb-1 text-text-primary"><?php esc_html_e( 'Back-End & Lógica', 'aqgoes' ); ?></h3>
            <p class="text-text-muted text-xs leading-relaxed"><?php esc_html_e( 'Desenvolvimento focado em lógica, scripts de automação e APIs robustas.', 'aqgoes' ); ?></p>
        </div>
    </div>

    <div class="mt-12 bg-bg-card border border-custom p-8 rounded-2xl flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <h3 class="text-xl font-bold text-text-primary"><?php esc_html_e( 'Projetos Rápidos & Landing Pages com WordPress', 'aqgoes' ); ?></h3>
            <p class="text-text-muted text-sm mt-1"><?php esc_html_e( 'Criação de sites institucionais inteligentes e editáveis com a potência do WordPress de forma ágil.', 'aqgoes' ); ?></p>
        </div>
        <a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'aqgoes_whatsapp', '5561999999999' ) ); ?>"
           target="_blank" rel="noopener"
           class="bg-grad-primary text-white font-semibold px-6 py-3 rounded-lg hover:opacity-90 transition-opacity whitespace-nowrap">
            <?php esc_html_e( 'Solicitar Orçamento', 'aqgoes' ); ?>
        </a>
    </div>
</section>

<?php get_footer(); ?>
