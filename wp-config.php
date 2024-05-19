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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'estoqueloja' );

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
define( 'AUTH_KEY',         'idQvL(*a2K-yQGgM,JR^6K;ab$Ck`o>[k.+3c4w&Qg}bTB44@pm|^4kxS@e+FylM' );
define( 'SECURE_AUTH_KEY',  'v^#%y#p6|.L[Z;3PK;{tuLN]Evs25|U3}P6hj+jKt_*x/W$g5V*Vj&/Rqx>$>A-x' );
define( 'LOGGED_IN_KEY',    'w1qq&T>XMe%DlSOA*,vlPJXg??&(I;(;s/#<SZSMFRM@oQgwDUl:-f+6??)UW+O3' );
define( 'NONCE_KEY',        '}]N(SjRTAk^%&Wv~uE:?Fh+C)LCO%fd]+K?zL::;_|UJZm8c]_pg7QcEzsIW}}UQ' );
define( 'AUTH_SALT',        'xN!iXS=~.%*vkObdA]6:j)7}hN(_uCp2~,OS=n2{Nu[BDxMn*,6sFpg@}Or{<zeA' );
define( 'SECURE_AUTH_SALT', 'F.i&<O<a#_&=!vh7UaCQx)}^KDM$iPKsfrFVX54mLIr C3sV,2CJXar/^B.<)FA.' );
define( 'LOGGED_IN_SALT',   'A:YyR56#$b1?Z>@aOnn_T7CJsf7Y6w%Wx*`Dw`=]nIr:eQiGsjWl-?]`zZi@Qa+]' );
define( 'NONCE_SALT',       '=y2Q^C0WB<`)e}=0QaV,x*_i,TEJR]+V(pj~_dY^h[[o#i)Zi8ts>C>3L6]gm&iU' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
