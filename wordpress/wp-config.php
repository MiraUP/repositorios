<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'modelo_wpp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:8080' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[N=yA@ (uYcMH#_0bSiV$gw0OwowP+.l#*}<Jsa?re_SK-,<ku`(0fb8j8_2w9: ' );
define( 'SECURE_AUTH_KEY',  'IL+dFmE2E)t8(/L5X*ZveXXWlta-}Zs XG0r{}`72M!Csww|E~=Y)y:EKd5hG@B+' );
define( 'LOGGED_IN_KEY',    '2S=DWJ&K>,E{x{FWQ@$/6^}QFnSaO3MZve;1:[Yvm<ekF,III}OTSd!N;T/1PeJ.' );
define( 'NONCE_KEY',        '-;P{+Mv21 )?*!Pu_]9ieCe&o~9TOiMRm-l rcRLB54/[:rr-u+jz4},logx)oVp' );
define( 'AUTH_SALT',        '{r*-X`Ii586I>>A(8IGl.6KSE)#85C?za.5a>A4>2G||]>dmxB@hg<fsN7E~k[-H' );
define( 'SECURE_AUTH_SALT', 'e}86}ua8~EO.-4nLtpm!<z6%8k&[e^c~3]cHvlo<TM4fmN$]5;aB@]5Y]c[:.ZNn' );
define( 'LOGGED_IN_SALT',   'x Ol*@URg0OZ@j-e_bTO-@fhJ=EZ,KE2eW@j1O(g<670/S;is~g~6e)nf+;L)[LG' );
define( 'NONCE_SALT',       '1-E}y#N@MEUs_p&DV/a:b)oUv}swQe9]y/,m]`=U=>LzI3UdK]iRv[ofA7p_n@2V' );
define('FS_METHOD', 'direct');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
