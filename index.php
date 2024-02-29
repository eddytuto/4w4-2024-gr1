<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème du groupe #1</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div id="entete" class="global">
        <header class="entete__header">
            <h1>Thème du groupe #1 (h1)</h1>
            <h2>4W4-Conception d'interface <span> et développement Web</span></h2>
            <h3>TIM-Collège de Maisonneuve</h3>
            <button>Événements</button>
        </header>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-accueil);"></path>
            </svg>
        </div>
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
                while(have_posts()): the_post(); ?>
                <div class="carte">
                    <h3><?php the_title(); ?></h3>  
                    <p><?php echo wp_trim_words(get_the_content(),20); ?> </p>
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
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-footer);"></path>
            </svg>
        </div>
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