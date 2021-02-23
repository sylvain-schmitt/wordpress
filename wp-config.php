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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'olu]1@4fB[lmUjwhng;A:.c $kR=Mr%Io_{6Hj;;|>Jy]O9g:B%+ (7T_/yJ2lp=' );
define( 'SECURE_AUTH_KEY',  ' ]X2]/,X*jWalhU#9Yd>367<X9wDl^($r[]@_T?%F}7V#`&Z[%7i`NV6uZ#D;5==' );
define( 'LOGGED_IN_KEY',    'X>q,43$fspJ7EyOVKs~gp7Mj,V!oeEf_{VL*2prW3:V]K7fb@M:7qkh{wtTl/nS}' );
define( 'NONCE_KEY',        '9UrjYV#4F$uPIvjNtq(&(cRIT>rJ3k -?J/k41x.~Wxam071{QcoZNv=X=p=7|%A' );
define( 'AUTH_SALT',        'Nc<#h+D*rvR-!`$0B nkW#*rc~#?(,TxTjH:3IS4Nl&6J[Po~<^!6^(d;+`H[Ixq' );
define( 'SECURE_AUTH_SALT', '-^#x{I5{:]/;M?l)vjpl}^x<Btn.G#tdKk=|{d%^px^RHmG[5h$]L|@p[ftem>``' );
define( 'LOGGED_IN_SALT',   ':xD755hgB/<eP?gv<y{+*#3>0(Ha^M$o_nI|mq?su*bA_{@ePZ&FA)y8Y>ZCtg$*' );
define( 'NONCE_SALT',       '@&l{ei%t4Gz8L*;*pGx+qF&65ZX:hLg,h#%v+~`]Q.3;)+v:PdBJgX.O-X*f/BDK' );
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
