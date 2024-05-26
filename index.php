
    <?php get_header(); ?>
    <h1>INDEX.PHP</h1>
    <div id="entete" class="global">
        <section class="entete__header">
            <h1>Thème du groupe #1 (h1)</h1>
            <h2>4W4-Conception d'interface <span> et développement Web</span></h2>
            <h3>TIM-Collège de Maisonneuve</h3>
            <button>Événements</button>
        </section>
    <?php get_template_part("gabarits/vague"); ?>
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>Accueil (h2)</h2>
            <div class="cours">
            <?php
            /*
                if (have_posts()){
                    while(have_posts()){
                        the_post();
                        the_title('<h3>','</h3>');
                        echo wp_trim_words(get_the_content(),30);

                    }
                }
            */
            if (have_posts()):

                while(have_posts()): the_post();
                 $titre = get_the_title();

                
                
                ?>
                <div class="carte">

                    <h3><?php echo $titre; ?></h3>  
                    <p><?php the_content(); ?> </p>
          
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
    <div id="footer" class="global">

        <footer>
            <h2>Footer (h2)</h2>
            <h3>kkljkjkljkljlk jkl  (h3)</h3>
            <h4>jkkjkjkj gjk gkj (h4)</h4>
            <h5>lkhlkhlkhl (h5)</h5>
            <h6>jkgjkg kgjk (h6)</h6>
        </footer>

    </div>
</body>
</html>