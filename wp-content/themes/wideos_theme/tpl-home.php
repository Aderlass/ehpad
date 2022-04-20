<?php
/*
Template Name: Page imbriquées
*/
?>

<?php get_header(); ?>

    <section>
        <?php
			$the_query = new WP_query(array('post_type'=>'page','post_parent'=>get_the_ID(),'order' => 'ASC'));
			while ( $the_query->have_posts() ) : $the_query->the_post(); global $post;
		?>
        	<article>
                <div class="titre_article"><h2><?php the_title(); ?></h2></div>
                <?php the_content(); ?>
                <div style="clear: both;"></div>
            </article> 
            <?php edit_post_link('Modifier cette page', '<p>', '</p>'); // Donne la possibilité de modifier l'article en cliquant simplement sur ce lien. Ce dernier ne s'affiche que si on est déjà connecté à l'administration du site ?> 
        <?php
            if ( is_user_logged_in() ) { 
             ?><p><?php wp_loginout(); ?></p><?php ; // bouton de déconnexion immédiate qui n'apparait que si on s'est connecté à l'interface admin du site
            } 
            else {}
        ?>
        <?php endwhile; ?>
    
    </section>

		
<?php get_footer(); ?>
