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
define( 'DB_NAME', 'petshop3' );

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
define( 'AUTH_KEY',         ':xLOZWkl+U_9N,o?_uWU]F];y+xmTzb]sgf{`r5Gv8v!H3Jzh`F87HEx[~`F~OTg' );
define( 'SECURE_AUTH_KEY',  'f@a!4m^z#KPT3-OL3UwiFt+C8peI1tZI;C[Q.!Xb).3I^)L#6&~U^K5@TPFjKcMX' );
define( 'LOGGED_IN_KEY',    ' wn@<OIKTtE6b#Qo Jal-zk$l9>qz~GD[Kd<!2GKq%|Xc?^eB,v=$4.S KlLpRIb' );
define( 'NONCE_KEY',        'wgY#M4%`1-w4[+Sor$y.Qt1<RTYRH%l|7YY<Lfby%7epbHY8R9/lX7rx2^xe-y6|' );
define( 'AUTH_SALT',        'c(qsFq*t9>O0ilAyyE|KSK(t7NP2_)4YrLhl+2g/[iuK{2&mzWVIk(i-iZym#w+s' );
define( 'SECURE_AUTH_SALT', 'nrX#nj0z4^RBGH~J8;6{ly1SzFKO9n| 4]9RL|JLq78I27`]/4IE~mVI1pnWdihH' );
define( 'LOGGED_IN_SALT',   ' $~49h|y{?acG<qqV5/V;HnQlN8dN5+aDm:]#{O|cy[`|cV%PzVenP-MB8mAR0F^' );
define( 'NONCE_SALT',       'q{x{UEC(3uEE)eQs(4or#fcChtRIxI:C*J`7Js7fE;fy.uL3c#}:n-dU/qyqSsY%' );

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
