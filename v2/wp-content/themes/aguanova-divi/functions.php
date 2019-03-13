<?php
function aguanova_enqueue_tema_hijo_css() {
	wp_enqueue_style( 'aguanova-temaPadre-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'aguanova_enqueue_tema_hijo_css' );
?>

