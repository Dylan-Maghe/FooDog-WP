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
define('DB_NAME', 'fooword');

/** Utilisateur de la base de données MySQL. */
<<<<<<< HEAD
define('DB_USER', 'dylan');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'user');
=======
define('DB_USER', 'gary');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'User_pw15');
>>>>>>> gary

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
define('AUTH_KEY',         'BP[e3%vB)xyze4n5GJ=9}7Qv,I!,Eun3WE.);/@eo{YPG^8pwck0@h1tBK7)Y1AW');
define('SECURE_AUTH_KEY',  ' d&m/?v.igK8;U (>EVG#~+p.$>EQ_H/E66sU5k4XJ {TxEV>0X9oRv&YRlysK4)');
define('LOGGED_IN_KEY',    '}0o@}+N5V+[^Q2E%1U4W%X7(q>{y|xBQiMQ)P~TXlw x^5SrR1wcvyCgN}t#sg(;');
define('NONCE_KEY',        'FU1{IRRq/oI{b{fA*Emvc.EnGkUi=qdawURl*pBr1bn|HM%Gf2$<lJ[X^;#G BkG');
define('AUTH_SALT',        'tiDSb=J$,kcs_n{ek)/@2aSsjd:}cM-{u3>U5O]2<[]IpdPW/BqB7j8fZm@*BGy:');
define('SECURE_AUTH_SALT', 'jCCR9QZG- )gv{+ozs<nfNGjMFl3U,)Y{gWqU8_M7eH#FTcgxB;wG=5ggH!CHm|$');
define('LOGGED_IN_SALT',   'C:qq6h.(5j]kj|I}[&xt.Rz+AJXv$hAOf7!xn]E&0D|9>Y(E*.RumW*aJ=L#Y*>3');
define('NONCE_SALT',       'bBj?]~TLRi<cq z`_3Z,/.z^0XL$mA(WQzsd@tA/FpwMgV#Q[,bt!A }VL0$GS5z');
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

