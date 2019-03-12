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
define('DB_NAME', 'database');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'user');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'pass');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'mysql');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '|!-<s~l@z;Mb1(9aN{fp7ktu!UuW,C|ps=tsLM-n*K/4*X#Y[|9V|}?xq</m^><.');
define('SECURE_AUTH_KEY',  'J-s n`R[7WMQW@g,rhC{QY8[fc|q+:`2:rD-~Z7+}kH2nMprt_JBQPm~F<Xq74p6');
define('LOGGED_IN_KEY',    'L[%mGz7MEg8*ggkd>V0vI!vh?SjWQt^>~L`j}`ws@X=wT^e;0_DsLm8M+i#09WBm');
define('NONCE_KEY',        '.bM/n.LLhNQ+)g<8_!IN8UytvtV6JAkrXWnR-kbr<Kxl5vq+Ve1k6-@iW-8b/[{n');
define('AUTH_SALT',        'k2t.;)WgJlN~MV#?h[/v;;cZk;BY?6{;KoP5p+4|K|~k6_;*{3feDNt:Q^Q%uMod');
define('SECURE_AUTH_SALT', 'Y M5%h+`]DI#+NSyj-bg+%]L7lCIk=9kDqfgny6PN);B_K:~W+]2Gyu6{dgp>rP#');
define('LOGGED_IN_SALT',   'R-4nDhL7({/yqSI|*hqg[[>yQqF16 rCD>FBaIANGPs 9SJnBGj6#O+|m24Ohm`E');
define('NONCE_SALT',       ' wXm-uO%<7^Umt#j+7Y2@_wA#,eJ<h7%fHxMV+6[r5mf7bZd8ZB0ufS/)H+.Fbz%');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'tst_';

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
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
