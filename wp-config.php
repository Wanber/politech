<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'bd_politech');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>lB[LL2[xjz1L0s[$|6jHLH(@.vIrjq7g[l]>n8%ySeDbd/G*YY=h3bD;{@kS6a}');
define('SECURE_AUTH_KEY',  '1^;ddHI1fmbNfGAlil2h2!~c;mRItgz,!RhF5N.ib^fu._Zi71nIR;HugBvsn(Pi');
define('LOGGED_IN_KEY',    'N%J,Ak?7im2p}i}x+r{J:H5eC^w<>O {^<J<-u$%lW<uE~Vweq5<4Cf`l~LNMWQf');
define('NONCE_KEY',        '^r0< jp{aT@?Gt+sPzL nB%An3RB3HI0J`TYil5t`pOH$=Y&$@L01b}nkG?:N2V3');
define('AUTH_SALT',        'O>W^R*{7q,Utj+Gr?%tIRWe1jF^~<-|s97QZfZZ}{7$k^7;VEUOg1IQvjIutL$VK');
define('SECURE_AUTH_SALT', 'I)8WV-ntO*+`zfJLHTIW^(5U:{UWhMQ7+G,=hQn5x5_0ZaTy*ED sH$f!*M@K^i;');
define('LOGGED_IN_SALT',   '8A2F:Xi)(aKA$wsiHmrh_!=0gs.U*F}<}6{6gi:K%am< *w{FvVXP[S7(]?)T^vV');
define('NONCE_SALT',       'o]od;@m}f^3U4pP_:dcF,USt*:0 y{Er=[w3LOimrg%.YHTd+u::vkYt;XA=F[i!');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'plt_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
