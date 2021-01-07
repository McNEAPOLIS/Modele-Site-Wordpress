<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp-02-202885' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l8.{uySlu!JJYv0#]VEJk4Rk]9C*Xvh9mC>=pq#Kt]OZoRQ>*Ktqn_%/z9& c2:_' );
define( 'SECURE_AUTH_KEY',  '8Ow]J#f0T/(]qk94:{du;moj8c9;h+(_:~U,%}9sUDseBNCWC~x{Fp20h^QF&a@p' );
define( 'LOGGED_IN_KEY',    'gk#]&e$$5MVVe?f{PTL>&2|;_G!jC0z3?CAUJQ/JJ4zuRtw$ o$f_}>-z<c*|~:4' );
define( 'NONCE_KEY',        ' ?1SIkv(CzZweD=Dvni80%AT;;K6>M980/EbF{054_M%bMF.;YabU%N7J&u$hToD' );
define( 'AUTH_SALT',        '!zb/o~7GJ)4fU*9!9L-_+1e0=cLSSEUW.jZ#QK%<x,0H-?K/V![B`Q,m& `o:e r' );
define( 'SECURE_AUTH_SALT', 'Umo(1hKn~|}+J$v{?9L-EwHTI/]M[a2bXaP]nos3 +@^edSm5PrnFzAsTlRIa!Tl' );
define( 'LOGGED_IN_SALT',   'y1O>wf8omPaWXF# CdJ; Ia. :kFeCBO/FGK0!WvHu<Tqr;mHs~C8wF2:bSU:O{6' );
define( 'NONCE_SALT',       '$7-f;gI#6rb|q^cKPLg>vkAq4Y^M[:M-@WHo1h~&UQStk`2{{DxA+TttFW[tTVTM' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
