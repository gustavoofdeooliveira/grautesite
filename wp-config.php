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
define( 'DB_NAME', 'grautesite' );

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
define( 'AUTH_KEY',         '8 e,a9i0zqmu+SoH~Mo#V}%OoM+,sA-;<i.K@xq{lZG=H=#va&=yPc]Y11_q%?}c' );
define( 'SECURE_AUTH_KEY',  ')(k3]<= (A.y~iQ!Rc.;#b1&Jm.3vBUq_%-=pH*H>Pp-+IM1d3=}U_?83*cbYE]`' );
define( 'LOGGED_IN_KEY',    'eZ/an3I<8&L>ZXM%4Pvb#7I>c^ck^o`<o^%{,`2.f$wJFyq5<L0Yzt-bg+A=R#xF' );
define( 'NONCE_KEY',        '<B~Xu7@F>OEC&8~ib$Bag0/u0)N7P?>Bm}G`NV1a<Gf$HY+nLekx3nl/`<t}[y_v' );
define( 'AUTH_SALT',        'J95Gn68Ftd~d=wk l:OO<~3g/bH_u1(D;:bb#N&QbZk2oL[a5DNk/@lk)_G[S4$B' );
define( 'SECURE_AUTH_SALT', 'm*1hj (K!VRy1H@=)*xJR:4x,~,_Ee/2gLdp%R=T,[)R+>SVhC%Mg[?Y/JKR!P6N' );
define( 'LOGGED_IN_SALT',   '^b;Yp J6$bSLruqnhe$+|WAFbP-O8mAt}@M%EXT^,%onS~J4R6 7DGZ8Y?**XX:M' );
define( 'NONCE_SALT',       '3/zy4s+_b5;%xh]csh[jR::Xp&DAT3Pl(JO2jym!O}] e93ype8UR`#]:o[dpHDm' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'TG_';

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
