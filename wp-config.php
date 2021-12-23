<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ephad_fresnay' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:8888' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p-WvRI)LVPX(X9#Au.mEo_}&0V k,_xZqOI!7(RSEN.Kq@.VBPw5XfowkW{0OQY|' );
define( 'SECURE_AUTH_KEY',  'K&0w{&c9P,u.Ka?=AJsG+I/%@RE{^xi?YeHoMlvZsrBx&)WZ33C%cP}J!Gbln ze' );
define( 'LOGGED_IN_KEY',    '.@4quD<8^vr@Kb|.8D~n{=i/.zp.2Lq8Vm]oa}KuA`,OdK?z,1e+z9sdDF8@El0q' );
define( 'NONCE_KEY',        ';d}CBvHO9 73$^;/r7PEzfn;]`13Tu~q^KF($XoFQY<zfg2Lxq>6Yr5dG/<1Oii(' );
define( 'AUTH_SALT',        'k9d5W}p?nOB?VD-Pj8up`)3t~6@jv6OCDO9+h%g&=YuiFi}a@eO)/c#E@enV_^H=' );
define( 'SECURE_AUTH_SALT', 'aj~Y<T5kQ13NeWRf+Qh&OeIex^fqUP6#^-E0a1Ib=z^q6@.vu;xCI  1.kO/}+gj' );
define( 'LOGGED_IN_SALT',   ']ilHk6j:nX`U(Z uEO2=f#L(3#q+IGR]w-7`j.$,,f8MA|i^.EzI.wR*ZSkg$$g?' );
define( 'NONCE_SALT',       'kD+tI3PM`[Q^y$6lY:+RLe_QK.:3$>]vBqC/M+TIHko#iyVL4Lk_:j ympY]5DTI' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
