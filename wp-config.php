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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\Blog-Fofoca\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'blog_fofoca' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ' x2YyG{je<p1h{ItHf^z@kDM:l^AT,RfB-~XP1;ytdM_SfMyIa<RR}`{7$s_Ll*[' );
define( 'SECURE_AUTH_KEY',  ' @&-z+mo+yBMA{+k5z6@XC:EQ!5;Y4fj-4]0_h:jc]6@n5]9Y9HW8_,?Wz^wIO<M' );
define( 'LOGGED_IN_KEY',    '*/Qy&yExf 99tL&5O)HG#PTJ$yvPRHw|on<zzj_`#Y_e22RH^=-=:meo1#^D[$;6' );
define( 'NONCE_KEY',        'Q$?+>cd#l1}S%6bp=y(fmD@_=l{BpO4e?bg1+G-mJ5Ok;{W</1J{f(+{o;!1XD.(' );
define( 'AUTH_SALT',        'nK)^<jH2n:rdGDNrD~lR4iFLe^]a^{W>/ FnGn?I >=?=q%fKShZieLD||)jz~Y5' );
define( 'SECURE_AUTH_SALT', 'm(E<;|lBrpoWlX/Dl7G%*HZ9W..X6~Zhe1Bh8vvpbkp||WE0 JxfE(Y5%>VL{}jk' );
define( 'LOGGED_IN_SALT',   '-2=:Fv>c3U[ApSo}0u8gd1[i!81>dnkch!eeL(<|Y9=vv|5nxjeH^c;V~K1tO>dy' );
define( 'NONCE_SALT',       'K`DP3v`10`-D_C5u<c-;#b5 @/;UQ5!`L+;|Rl4w9RN8X>d~e}b&mr]e@!o;9L^b' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
