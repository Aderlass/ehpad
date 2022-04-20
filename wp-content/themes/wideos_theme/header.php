
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <!--[if lte IE 8]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]--> 
        <title><?php
				/*
				 * Print the <title> tag based on what is being viewed.
				 */
				global $page, $paged;

				wp_title( '|', true, 'right' );

				// Add the blog name.
				bloginfo( 'name' );

				// Add the blog description for the home/front page.
				$site_description = get_bloginfo( 'description', 'display' );
				if ( $site_description && ( is_home() || is_front_page() ) )
					echo " | $site_description";

				// Add a page number if necessary:
				if ( $paged >= 2 || $page >= 2 )
					echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

				?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    
    
    
	<body>
	<div class="bg-body">
        
			<header>
				<div class="entete">
                <hgroup>
					<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><h1><div class="titre_site"><?php bloginfo('name'); ?></div></h1></a> <?php // Affichage du titre du site ?>
				</hgroup>
                <div class="newsletter"><a href="<?php bloginfo('url'); ?>/download/newsletter.pdf" title="Télécharger la newsletter"><div class="btn"></div></a></div><!-- fin div .newsletter -->
                <!-- <div class="plaquette"><a href="<?php bloginfo('url'); ?>/download/plaquette.pdf"><div class="btn">Télécharger plaquette</div></a></div> --><!-- fin div .plaquette -->
                </div><!-- fin div .entete -->
				
				<nav>
					<?php wp_nav_menu(); // Pour gérer le menu depuis l'administration de Wordpress, on rajoute la fonction adequat dans le fichier functions.php ?>
				</nav>
			</header>

<div id="contenu">
<div class="taille-texte"><a href="javascript:void(0);" onclick="resizeText(1)" id="plustext"><div class="text-bigger" title="Agrandir le texte" ></div></a><a href="javascript:void(0);" onclick="resizeText(-1)" id="minustext"><div class="text-smaller" title="Réduire le texte" ></div></a></div>


			
