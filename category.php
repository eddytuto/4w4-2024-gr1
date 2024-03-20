
    <?php get_header(); ?>
    
    <div id="accueil" class="global">
        <section>
            <h2>Destination par catégorie</h2>
            <div class="destinations">
            <?php if (have_posts()):
                while(have_posts()): the_post(); ?>
                <div class="carte">
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

    <div id="galerie" class="global">
        <section>
            <h2>Galerie (h2)</h2>
        </section>
  <?php  get_template_part('gabarits/vague'); ?>
    </div>
<?php get_footer(); ?>