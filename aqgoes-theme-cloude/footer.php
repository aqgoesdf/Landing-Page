    <footer class="bg-bg-2 border-t border-custom py-8">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-text-muted">
            <div>
                <p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'Todos os direitos reservados.', 'aqgoes' ); ?></p>
                <p class="text-xs mt-1"><?php esc_html_e( 'Desenvolvido por', 'aqgoes' ); ?> <?php bloginfo( 'name' ); ?></p>
            </div>
            <div class="flex space-x-6">
                <a href="#sobre" class="hover:text-white transition-colors"><?php esc_html_e( 'Voltar ao topo', 'aqgoes' ); ?></a>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>
