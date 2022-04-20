<?php get_header(); ?>


    <section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //La fameuse boucle WordPress qui permet d'afficher les contenus du CMS (cf. : http://codex.wordpress.org/The_Loop)?>
        <article>
        <a href="<?php echo get_permalink(); ?>"><div class="titre_article"><h2><?php the_title(); ?></h2></div></a> <?php // fonction d'affichage du titre ?>
        <a href="<?php echo get_permalink(); ?>"><?php the_date(); ?></a> <?php  // fonction d'affichage de la date ?>
        </article> 
    <?php endwhile; else: ?>
    <p><?php _e('<article>Sorry, no posts matched your criteria.</article>'); ?></p>
    <?php endif; ?>
    </section>

		
<?php get_footer(); ?>
