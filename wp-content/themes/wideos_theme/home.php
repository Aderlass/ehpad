<?php
/*
Template Name: Page home
*/
?>


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
    
    <div class="intro_video">
<object width="852" height="550"> <param name="movie" value="http://fpdownload.adobe.com/strobe/FlashMediaPlayback_101.swf"></param><param name="flashvars" value="src=http%3A%2F%2Fwww.leprieuredelafensch.fr%2Fvideo%2FSite_Fensch_Intro_avec_bandeau_3Mo.mp4&controlBarMode=none&poster=http%3A%2F%2Fosmf.org%2Fimages%2Fposter_cathy_fmp.jpg&loop=true&autoPlay=true"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://fpdownload.adobe.com/strobe/FlashMediaPlayback_101.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="852" height="550" flashvars="src=http%3A%2F%2Fwww.leprieuredelafensch.fr%2Fvideo%2FSite_Fensch_Intro_avec_bandeau_3Mo.mp4&controlBarMode=none&poster=http%3A%2F%2Fosmf.org%2Fimages%2Fposter_cathy_fmp.jpg&loop=true&autoPlay=true"></embed></object>
    <div style="font-size: 1.25em;"><a href="<?php bloginfo('url'); ?>/bienvenue">Accéder au site</a></div>
    </div><!-- fin div .intro_video -->
	
    </div><!-- fin div .bg-body -->
    </body>
    
</html>
