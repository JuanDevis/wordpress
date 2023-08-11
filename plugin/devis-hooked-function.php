<?php

/* plugin name: devis-hooked-function
author: juan devis
description: hook a plugin
plugin uri: https://2ffactor.com
author uri: https://juandevis.com
version: 1.0
*/

?>

<?php 

function mi_nueva_funcion() {

  ?>  <a href="<?php the_permalink()?>" class="button">KNOW MORE</a> <?php
;
}

add_action ('juan_devis_hook','mi_nueva_funcion');
