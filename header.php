<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AqGoEs | Web Developer Full Stack</title>
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

    