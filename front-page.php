
    <?php get_header(); ?>
    <div id="entete" class="global">
        <section class="entete__header">
            <h1><?php echo get_bloginfo("name") ?></h1>
            <h2><?php echo get_bloginfo("description") ?></h2>
            <h3>TIM-Collège de Maisonneuve</h3>
            <button class="bouton">Événements</button>
        </section>

<?php
//  $image_url = wp_get_attachment_image_url( $image_id, 'full' );
?>

    <?php get_template_part("gabarits/vague"); ?>
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>Accueil (h2)</h2>
            <div class="destinations">
            <?php if (have_posts()):
                while(have_posts()): the_post(); ?>
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
               <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </section>
    </div>
    <div id="evenement" class="global diagonal">
        <section>
            <h2>Événement (h2)</h2>
            <?php echo do_shortcode('[em_destination]'); ?>
        </section>
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>Les destinations par catégorie</h2>  
            <article class="flexbox">
            <?php
             $categories = get_categories();
             foreach ($categories as $elm_categorie){
                $nom = $elm_categorie->name; 
                $description = wp_trim_words($elm_categorie->description, 10); 
                $nombre_destination = $elm_categorie->count;
                $categorie_url = get_category_link($elm_categorie->term_id);
                ?>
                <div class="carte">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <h3><?php echo $nom; ?></h3>
                    <p><?php echo $description; ?></p>
                    <p>Nombre de destination : <?php echo  $nombre_destination; ?></p>
                    <a href="<?php echo  $categorie_url ?>"> Voir la destination ... </a>
                </div> 
             <?php } ?>
             </article>
        </section>
  <?php  get_template_part('gabarits/vague'); ?>
    </div>
<?php get_footer(); ?>