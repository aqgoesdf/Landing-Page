<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AqGoes | Web Developer Full Stack</title>
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
    <style>
        /* Variáveis de cores mapeadas para CSS Custom Properties */
        :root {
            --bg: #0a0a0f;
            --bg-2: #12121a;
            --bg-card: #1a1a28;
            --border: rgba(255,255,255,0.08);
            --text: #e8e8f0;
            --text-muted: #888899;
            --grad-primary: linear-gradient(135deg, #6c63ff 0%, #ff6584 50%, #ffa94d 100%);
            --grad-hero: linear-gradient(135deg, #0a0a0f 0%, #1a0a2e 50%, #0a1a1f 100%);
            --grad-html: linear-gradient(135deg, #e34c26, #f06529);
            --grad-css: linear-gradient(135deg, #264de4, #2965f1);
            --grad-js: linear-gradient(135deg, #f7df1e, #ffa500);
            --grad-python: linear-gradient(135deg, #3776ab, #ffd43b);
        }

        .border-custom {
            border-color: var(--border);
        }

        .text-gradient {
            background: var(--grad-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-bg text-text-primary font-sans antialiased scroll-smooth">

    <!-- HEADER -->
    <header class="sticky top-0 z-50 bg-[#0a0a0f]/90 backdrop-blur-md border-b border-custom">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold tracking-wider text-gradient">AqGoEs</a>
            <nav class="hidden md:flex space-x-8">
                <a href="#sobre" class="hover:text-white transition-colors">Sobre</a>
                <a href="#trajetoria" class="hover:text-white transition-colors">Trajetória</a>
                <a href="#tecnologias" class="hover:text-white transition-colors">Tecnologias</a>
            </nav>
            <a href="https://wa.me/seunumerodetelefone" target="_blank" class="bg-grad-primary text-white font-semibold px-4 py-2 rounded-lg hover:opacity-90 transition-opacity">
                Fale Comigo
            </a>
        </div>
    </header>

    <!-- SEÇÃO 1: HERO (SOBRE) com background grad-hero -->
    <section id="sobre" class="relative py-20 md:py-32 bg-grad-hero">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-12 gap-8 items-center">
            <div class="md:col-span-7 space-y-6">
                <span class="text-gradient font-bold tracking-wider uppercase text-sm block">Desenvolvedor Web Full Stack</span>
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight leading-tight">
                    Construindo soluções web <br><span class="text-gradient">robustas e modernas</span>.
                </h1>
                <p class="text-text-muted text-lg leading-relaxed">
                    Olá! Sou o especialista por trás da <strong>AQGoes</strong>. Sou desenvolvedor Full Stack focado em criar aplicações modernas, funcionais e otimizadas. Unindo uma sólida experiência em suporte e análise técnica no setor público com o estudo constante das tecnologias mais demandadas do mercado, transformo ideias em código de alto desempenho.
                </p>
                <div class="pt-4 flex flex-wrap gap-4">
                    <a href="#trajetoria" class="border border-custom hover:border-[#6c63ff] px-6 py-3 rounded-lg font-medium transition-all">
                        Conhecer Trajetória
                    </a>
                </div>
            </div>
            <div class="md:col-span-5 flex justify-center">
                <!-- Avatar / Ilustração decorativa com gradiente principal -->
                <div class="w-72 h-72 rounded-full bg-grad-primary p-1 shadow-2xl">
                    <div class="w-full h-full bg-bg rounded-full flex flex-col items-center justify-center text-center p-6">
                        <span class="text-5xl mb-2">💻</span>
                        <span class="font-bold text-xl text-text-primary">AQGoes</span>
                        <span class="text-sm text-text-muted">Brasília - DF</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEÇÃO 2: TRAJETÓRIA (EXPERIÊNCIA) em bg-2 -->
    <section id="trajetoria" class="bg-bg-2 py-20 border-y border-custom">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gradient">Experiência &amp; Trajetória</h2>
                <p class="text-text-muted mt-2">Sólida carreira construída com suporte e análise de TI no Senado Federal.</p>
            </div>

            <!-- TIMELINE -->
            <div class="relative border-l border-custom ml-4 md:ml-6 space-y-10">
                
                <!-- Evento 1 -->
                <div class="relative pl-8">
                    <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#ff6584] border-4 border-[#12121a]"></div>
                    <span class="text-sm text-[#ff6584] font-semibold">Momento Atual</span>
                    <h3 class="text-xl font-bold mt-1 text-text-primary">Analista Técnico Sênior (Terceirizado)</h3>
                    <h4 class="text-text-muted text-sm">Comissões do Senado Federal</h4>
                    <p class="text-text-muted mt-2 text-sm leading-relaxed">
                        Atuação estratégica de suporte e análise técnica diretamente nas comissões do Senado Federal, garantindo estabilidade, segurança e eficiência no fluxo tecnológico de processos legislativos críticos.
                    </p>
                </div>

                <!-- Evento 2 -->
                <div class="relative pl-8">
                    <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#6c63ff] border-4 border-[#12121a]"></div>
                    <span class="text-sm text-[#6c63ff] font-semibold">Etapa Anterior</span>
                    <h3 class="text-xl font-bold mt-1 text-text-primary">Técnico Nível 1 &amp; Nível 2 (Terceirizado)</h3>
                    <h4 class="text-text-muted text-sm">Senado Federal</h4>
                    <p class="text-text-muted mt-2 text-sm leading-relaxed">
                        Atuação na linha de frente do suporte de TI, solucionando incidentes complexos de infraestrutura e sistemas, além de garantir a continuidade operacional das atividades parlamentares.
                    </p>
                </div>

                <!-- Evento 3 -->
                <div class="relative pl-8">
                    <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#ffa94d] border-4 border-[#12121a]"></div>
                    <span class="text-sm text-[#ffa94d] font-semibold">Formação &amp; Autonomia</span>
                    <h3 class="text-xl font-bold mt-1 text-text-primary">Estudos por Conta própria &amp; Ensino Superior</h3>
                    <h4 class="text-text-muted text-sm">Graduação Full Stack</h4>
                    <p class="text-text-muted mt-2 text-sm leading-relaxed">
                        Unindo a disciplina dos estudos autodidatas com uma formação superior estruturada em Desenvolvimento Full Stack. Dedicação diária ao aprendizado prático de arquitetura de software e engenharia web (Python, HTML, CSS, JS e WordPress).
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- SEÇÃO 3: TECNOLOGIAS & ESTUDOS em bg-1 -->
    <section id="tecnologias" class="py-20 max-w-6xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gradient">Tecnologias &amp; Especialidades</h2>
            <p class="text-text-muted mt-2">O conjunto de ferramentas que utilizo para criar soluções completas.</p>
        </div>

        <div class="grid md:grid-cols-4 gap-6">
            <!-- Card HTML -->
            <div class="bg-bg-card p-6 rounded-xl border border-custom hover:scale-[1.02] transition-transform">
                <div class="w-12 h-12 rounded-lg bg-grad-html flex items-center justify-center text-white font-extrabold text-lg mb-4 shadow-lg">HTML</div>
                <h3 class="text-lg font-bold mb-1 text-text-primary">Estrutura Web</h3>
                <p class="text-text-muted text-xs leading-relaxed">Desenvolvimento de marcação semântica focada em acessibilidade e SEO.</p>
            </div>

            <!-- Card CSS -->
            <div class="bg-bg-card p-6 rounded-xl border border-custom hover:scale-[1.02] transition-transform">
                <div class="w-12 h-12 rounded-lg bg-grad-css flex items-center justify-center text-white font-extrabold text-lg mb-4 shadow-lg">CSS</div>
                <h3 class="text-lg font-bold mb-1 text-text-primary">Estilização</h3>
                <p class="text-text-muted text-xs leading-relaxed">Layouts responsivos, animações fluidas e design moderno sob medida.</p>
            </div>

            <!-- Card JS -->
            <div class="bg-bg-card p-6 rounded-xl border border-custom hover:scale-[1.02] transition-transform">
                <div class="w-12 h-12 rounded-lg bg-grad-js flex items-center justify-center text-slate-900 font-extrabold text-lg mb-4 shadow-lg">JS</div>
                <h3 class="text-lg font-bold mb-1 text-text-primary">Interatividade</h3>
                <p class="text-text-muted text-xs leading-relaxed">Comportamentos dinâmicos, consumo de APIs e lógica client-side.</p>
            </div>

            <!-- Card Python -->
            <div class="bg-bg-card p-6 rounded-xl border border-custom hover:scale-[1.02] transition-transform">
                <div class="w-12 h-12 rounded-lg bg-grad-python flex items-center justify-center text-slate-900 font-extrabold text-lg mb-4 shadow-lg">PY</div>
                <h3 class="text-lg font-bold mb-1 text-text-primary">Back-End &amp; Lógica</h3>
                <p class="text-text-muted text-xs leading-relaxed">Desenvolvimento focado em lógica, scripts de automação e APIs robustas.</p>
            </div>
        </div>

        <!-- WordPress Callout -->
        <div class="mt-12 bg-bg-card border border-custom p-8 rounded-2xl flex flex-col md:flex-row items-center justify-between gap-6">
            <div>
                <h3 class="text-xl font-bold text-text-primary">Projetos Rápidos &amp; Landing Pages com WordPress</h3>
                <p class="text-text-muted text-sm mt-1">Criação de sites institucionais inteligentes e editáveis com a potência do WordPress de forma ágil.</p>
            </div>
            <a href="https://wa.me/seunumerodetelefone" target="_blank" class="bg-grad-primary text-white font-semibold px-6 py-3 rounded-lg hover:opacity-90 transition-opacity whitespace-nowrap">
                Solicitar Orçamento
            </a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-bg-2 border-t border-custom py-8">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-text-muted">
            <div>
                <p>&copy; 2026 aqgoes.com. Todos os direitos reservados.</p>
                <p class="text-xs mt-1">Desenvolvido por AQGoes</p>
            </div>
            <div class="flex space-x-6">
                <a href="#sobre" class="hover:text-white transition-colors">Voltar ao topo</a>
            </div>
        </div>
    </footer>

</body>
</html>