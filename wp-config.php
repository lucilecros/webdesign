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
define('DB_NAME', 'cycland');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '3J`yc#N9PEp|;^u=87 f3U7%Pl9ag<5pvB/1lk=8|G7s4H)23@T1@;3RP^y_AW>M');
define('SECURE_AUTH_KEY',  'GN-CqXP+J:hC*8l43.cZ%+.8RP4Os(WFaF4%Y<<}-bd/^`GG fcK7OT|Qltt{E= ');
define('LOGGED_IN_KEY',    '6a[cRr0TskcGd--hksT_8&V.o:I%C5!m|U-n0>!4APINB!;u5b7`}6lMi6$Zy)A/');
define('NONCE_KEY',        'Dor<SSaKHPu&mObul$~VWeu6^};2sn=tRkF/R~7Ex2}.{mhr}9EnndXkCm+,uw[{');
define('AUTH_SALT',        'kmwM52pf-m|?]ppL/17;-b{5G)vd]asP+rXPhc1H*i#t<+;JZDMyDtQi#&fGvdSy');
define('SECURE_AUTH_SALT', '%?100D[+D33d==3_S~7~j~r4L)?^|SB}kmf!9Tf%FnGD&+wW2-8LXUohBcUtM0Om');
define('LOGGED_IN_SALT',   'V4i<,nQ1!Of3|k{w3<`I@}P?xE>3,OQrYn5q8;l[U]0D$#.T$TvjFh!O6pU_}C&m');
define('NONCE_SALT',       '8d_%S]F`VNavCT?]%K:8G;f$gQ?uN$rIBA.rpT]C}wKR&al=cZXcOAO^G9#2j_Hd');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');