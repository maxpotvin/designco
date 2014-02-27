<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'design');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'designer');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'designerpass');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vLU|bNYK^F<_|zOTZB(MD]Qg22-5sUEfON>Ac 9}hV;(FM&*V:hag`+`z,2XP={j');
define('SECURE_AUTH_KEY',  '|?-Ti}<2SpAYj.T-3t-]Z;=CGD#GqH|{?-P% jxpE:w};UtFp$C2.-#v-/ZNlKM[');
define('LOGGED_IN_KEY',    'd+f`KQle(=*dsr% H410(LckPbQF<qp`1a|d*|2[AppNMy8`WZFGNS6AG-LVc2+V');
define('NONCE_KEY',        'SK2F5u|/>KB]=jJG0bQicv4E+0x8hV#P<}7&,G5hO`DUJDp1Og>0iILcDruv[_-=');
define('AUTH_SALT',        '2)604---P+Wv>z|m)t<Dx-QvRA7l,@l%XNz+76T0dJzABd]vS*LSLlIj7#ddu+tD');
define('SECURE_AUTH_SALT', 'JpK!1.7t+tcg[lKnL(tNiU>xTCi?-t@!Asvn-yyV.mg}.G(/_/VJ1vktV{dnP`# ');
define('LOGGED_IN_SALT',   '~|ZrG+fAd5$n2qRiqY.1d}0Ie|6|6-XFI.zOFPpSAx;_8hU98YUjR0:5>F#H|b.W');
define('NONCE_SALT',       'Z!i@X=i]L(BH#q?OL7DDs;1,ieQzbp66KAo)0+(K5k&Lngf9LM(Fr-{+c#i^: 7x');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wpdes_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');