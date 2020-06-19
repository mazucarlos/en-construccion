add_action( 'get_header', 'jp_quitar_titulo' );
function jp_quitar_titulo() {
    if ( is_home() ) {
        remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    }
}
