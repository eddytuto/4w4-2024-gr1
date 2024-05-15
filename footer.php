<?php
/**
* Template footer.php
* Ce gabarit est appelé à la fin de chacun des modèle de thème
*
*/
?>

<div id="footer" class="global">
<footer class="flexbox">
    <section class="flexbox__elm">
         <?php
            wp_nav_menu(array(
                    "menu" => "footer",
                    "container" => "nav")); ?>
    </section>
    <section class="flexbox__elm">
        Autres liens
    </section>
    <section class="flexbox__elm">
        Texte
    </section>

</footer>

</div>
<?php wp_footer() ?>
</body>
</html>