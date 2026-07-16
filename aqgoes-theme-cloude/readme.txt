=== AQGoes Portfolio ===
Tema WordPress convertido do site estático aqgoes.com (Tailwind CSS + dark mode).

== Como instalar ==
1. No WordPress, vá em Aparência > Temas > Adicionar novo > Enviar tema.
2. Selecione o arquivo aqgoes-theme.zip e clique em "Instalar agora".
3. Ative o tema.

== Como configurar ==
1. Aparência > Personalizar > "Seção Hero (Sobre)"
   - Edite a chamada, título, descrição e localização exibidos na página inicial.
2. Aparência > Personalizar > "Contato"
   - Configure o número de WhatsApp (formato: 5561999999999, sem espaços ou símbolos).
3. Aparência > Menus
   - Crie um menu com os itens Sobre (#sobre), Trajetória (#trajetoria) e
     Tecnologias (#tecnologias), e atribua-o ao local "Menu Principal".
   - Se nenhum menu for criado, o tema exibe automaticamente os 3 links padrão.
4. Aparência > Personalizar > Identidade do Site
   - Defina o título do site (usado no rodapé e no topo, caso não haja logo)
     e, se quiser, envie uma logo (aparecerá no lugar do texto "AQGoes").

== Estrutura de arquivos ==
- style.css         -> metadados do tema + CSS customizado (cores, gradientes)
- functions.php      -> setup do tema, menus, Customizer, widgets
- header.php         -> <head>, Tailwind CDN, cabeçalho com menu
- front-page.php     -> página inicial (hero, trajetória, tecnologias)
- index.php          -> listagem padrão de posts (fallback obrigatório)
- page.php           -> template para páginas internas
- single.php         -> template para posts de blog individuais
- footer.php         -> rodapé

== Observações técnicas ==
- O Tailwind é carregado via CDN (como no HTML original). Para produção em
  larga escala, o ideal é migrar para uma build local do Tailwind (arquivo
  CSS compilado), o que reduz tempo de carregamento e elimina o aviso do
  Tailwind sobre uso do CDN em ambientes de produção.
- Todos os textos estão prontos para tradução (text domain "aqgoes").
- O tema é "clássico" (PHP + Customizer), compatível com qualquer versão
  recente do WordPress, e não depende de plugins adicionais.
