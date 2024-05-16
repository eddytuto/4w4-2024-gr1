<?php
/**
*    template-part ou gabarit pour créer une carte
*/
?>
<div class="carte">
    <?php
    // permet d'afficher l'image de l'article qui a été mis en avant 
    the_post_thumbnail('thumbnail'); ?>
    <h3><?php the_title(); ?></h3>  
    <p><?php echo wp_trim_words(get_the_content(),10); ?> </p>
    <?php the_category(); ?>
    <!-- ajoute un lien vers l'article   -->
    <a href="<?php  the_permalink(); ?>">Suite</a>
</div> 