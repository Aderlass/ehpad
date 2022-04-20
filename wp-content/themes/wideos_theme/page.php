<?php get_header(); ?>

    <section>
    
        <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); //La fameuse boucle WordPress qui permet d'afficher les contenus du CMS
            echo '<article>';
            the_content(); // fonction d'affichage du contenu
            echo '</article>';
        endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        
        <?php edit_post_link('Modifier cette page', '<p>', '</p>'); // Donne la possibilité de modifier l'article en cliquant simplement sur ce lien. Ce dernier ne s'affiche que si on est déjà connecté à l'administration du site ?> 
        <?php
            if ( is_user_logged_in() ) { 
             ?><p><?php wp_loginout(); ?></p><?php ; // bouton de déconnexion immédiate qui n'apparait que si on s'est connecté à l'interface admin du site
            } 
            else {}
        ?>
    
    </section>

		
<?php get_footer(); ?>
