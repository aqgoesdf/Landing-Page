<?php 

function aqgoes_enqueue_scripts() {
  // enqueue estilos aqgoes
  wp_enqueue_style('aqgoes-estilos', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'aqgoes_enqueue_scripts');



