<?php function juanteam() {

    wp_enqueue_style('juanteam',get_template_directory_uri().'/style.css');

}

add_action ('wp_enqueue_scripts','juanteam');

dd
