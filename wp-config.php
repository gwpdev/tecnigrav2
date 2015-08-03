<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'tecnigrav2');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'tecnigrav');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'tecnigrav2015');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A[wsh,@7Y LqC`?|#%dr[L)Ow8S(0xOSM31O^MA*~Snb:$l{C$aj-oA-st94T(|]');
define('SECURE_AUTH_KEY',  'y+HhMD^:-FG14 r||mLf);cC#=v`gV Z$Z`] wfuxfT}J,&%[4RS3?~gMRi1]B;2');
define('LOGGED_IN_KEY',    '0*EB,?s>y ^[LyRT$FnnXN$Ym8m+c>uo<SFAY+b8)/8nFI<j]h<lOd{Aiu.biGJ0');
define('NONCE_KEY',        '-aq!+_a)WBu,d7j`{Z+VPadJYTHP||tigcHX1_~ ;S=9k+jSK$Obvgi8$z,i=[#9');
define('AUTH_SALT',        'X-M#4*!?>J .Gie(65g=/ICL{ b~2|{ho/ 7!]$$K9Y,F+G9}V5pj[u({b5&g~WI');
define('SECURE_AUTH_SALT', 'r`#8^|NiM/]$gml+~UW|[qZQsH*7v]Td0/5^)|aDZ]Q|7Jn<,t`+8<$pmiF@RCL$');
define('LOGGED_IN_SALT',   '/<%N~l@<s-z^sCYO4J-Qjs||,}],Aj`m] .X[V%9]yM8L3>.#>QKffD7~h{*S&vF');
define('NONCE_SALT',       '8PSZ9_-@Cdk/c>?Whdu6d|$o]r}f~f4R5|T!;^7zFk.tE;C+/m|iIjv6JT[)4Szl');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
