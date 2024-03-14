
    <?php get_header(); ?>
    <div id="entete" class="global">
        <section class="entete__header">
            <h1><?php echo get_bloginfo("name") ?></h1>
            <h2><?php echo get_bloginfo("description") ?></h2>
            <h3>TIM-Collège de Maisonneuve</h3>
            <button>Événements</button>
        </section>
    <?php get_template_part("gabarits/vague"); ?>
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>Accueil (h2)</h2>
            <div class="cours">
            <?php if (have_posts()):
                while(have_posts()): the_post(); ?>
                <div class="carte">
                    <h3><?php the_title(); ?></h3>  
                    <p><?php echo wp_trim_words(get_the_content(),10); ?> </p>
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
        </section>
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>Galerie (h2)</h2>
        </section>
  <?php  get_template_part('gabarits/vague'); ?>
    </div>
<?php get_footer(); ?>