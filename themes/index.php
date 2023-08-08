<?php wp_head() ?>

<?php 

if (have_posts()) {
?>
    <div class='juandevis'> 
<?php
    while(have_posts()) { ?>
        <div class='juandevis2'> 
            <?php
        the_post();
       ?>  <h2 class=total> <?php  the_title(); ?> </h2> <?php
        the_post_thumbnail();
        the_content();
        'hola'

        ?>
          <?php do_action('juan_devis_hook'); ?>
        </div>
      
        <?php
    }



?>

</div>
<?php
} 
else {

    echo 'no hay nada';

}    

 wp_footer() ?>
