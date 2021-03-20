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
define( 'DB_NAME', 'wp-hemp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '9|:9SU#/C&$m!Mv&*%zEJf!PmJX*hK$*F)cqPw7Px#~.uT}PVWX#RRXE(Y8_*L^7' );
define( 'SECURE_AUTH_KEY',  'c&S-a%Hv|R*Klf%27^6z$ >}LmvXxfj2?kO-5R:n6p?juP;nSx!;+5IlIyAVidfG' );
define( 'LOGGED_IN_KEY',    't}V?Cl.oJe9rD=KTZJwH,m6%UvvJV,,?L4pXgFP,:![uI`,xb!]Qky;ou4`*3Kun' );
define( 'NONCE_KEY',        '?}KCN2k/SH8l9wdVJ *)M<tyR(7MCTrngo{NUzxr`YjJJD`f ZW#MONc<Hh`,DFu' );
define( 'AUTH_SALT',        '_ugfw[$ {s? d>-OU77`]xOY96=Jmz~@[(b01$)*L^V=dj@oJ9c~;GQkou@xsa{Q' );
define( 'SECURE_AUTH_SALT', '8hf/Hc0`v3Z?^21}88LEx}@ftKq7U.rdGp^7J2=5glhkA2}{*C>6a`<IY4}KO23~' );
define( 'LOGGED_IN_SALT',   '57x;?` ,d:nA9EI4yi_,cX5%]L;B)wL|sN!*hw=`l{3}+rP-X(`wj6oR,5npT%Pj' );
define( 'NONCE_SALT',       '%bIuiY2f}[KTO6Q]mI^@J CUXtO|PP>|Ya6>2F cYzaUFa:EW3~aESrRu,IaLy G' );
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
