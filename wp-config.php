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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ovos' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'rootadmin' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '2W]fa (w1[tW+<HAKbdhRxYqY+@+Z;2?ov>S;BVdaH`0}eo9%^|Qzq@i#-e*m;MF' );
define( 'SECURE_AUTH_KEY',  'L{t4)RI9&8_eLWy`AG+=P{717I,u`@0PtxX/q~]q4NoXVgh`+XYnpHz*#Y=Y2FVc' );
define( 'LOGGED_IN_KEY',    '3tvOAo.<5Thyi^jQD}-;1$-`a?O3/IB]kH8XA/sTZO>0_y1e(Z~d)M.W3`S/HNc:' );
define( 'NONCE_KEY',        '>I@e&yJGmAkg:neUOi4)j[%b SVE=H9X.fR]TyEi.a`E~MK#:a*0SX-qlbv#M~o%' );
define( 'AUTH_SALT',        'x38IuQA4&#DL:19+2dRWx|GoNT:(: Bj)bA(der4*Ri@2 q0^@myZRz`+=BmW$ A' );
define( 'SECURE_AUTH_SALT', ' (-9+}K/QuR` VVP8]iu,F+9%q2>u_wF.jx!Ks e4MFd[HfMlu(p@DVs$wwt~qab' );
define( 'LOGGED_IN_SALT',   'XP!ndtL5<p[>UYng#81}4qKZi<oBzRl?x=ZV6fvSLlJo_IqyOZmjx93|B3r`8lA%' );
define( 'NONCE_SALT',       '&0puP+p^hjq[/CYzGG5Sz%@:}&o9x$bLfMB(8z6Hd9c7)$!Io9p-,F4diae3lnx-' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');