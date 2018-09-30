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
define('DB_NAME', 'wp_malura');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '0000');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'ahq~j3<*^T_,9FJ>Dp3,6v`(@/J`5B}+IS99*swF.BS+n<5+%B_(OzNAT^A7DKC`');
define('SECURE_AUTH_KEY',  'hmZH?ZwDx?FmOM!T2Ve{U1:[uBl;>gm](&4Zfz!#`uj ?eJdKw_iN_4r&XU>.^Qj');
define('LOGGED_IN_KEY',    'YB;]sk!BUbHV<f%6dz=oM[+j_*~oK37p#b31x%^,;+)@B^xU)~zNqAU~#l-[}({/');
define('NONCE_KEY',        ' n{$Vc_g!5A$8}}Z$|(?g`b&[zfsd67G.>2VALW{LbT@Ou*OPYnr{{W4uxGm~6> ');
define('AUTH_SALT',        'm]IGP/fa&&(m.1MIwL@Zq|]#kkK]kiN`cHOJVe3n4M}.raA3CbKbFPD3vQJcLb&.');
define('SECURE_AUTH_SALT', '=f@PC<QG3UcUcj$mQ-86JHos.?Yn-*{RlLt(3;,SG:AJ1}CFk-Q^ `$5O<?[y:YM');
define('LOGGED_IN_SALT',   'pg*J2xw&ViF79gK_[wf4jop;B v#Pri-DEMu<3oSLd`Fa>3.eb&l0:D:^ru0C~J;');
define('NONCE_SALT',       'rff>c& i:qqK_Pc ws/z5OJ|F4Rw[U%q-d)FVC4sT%=m99tB;xI)J^w4y/g[QL J');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
