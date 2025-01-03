<?php
// ** MySQL settings ** //
define('DB_NAME', 'aenzbi_wpdb');
define('DB_USER', 'aenzbi_wpuser');
define('DB_PASSWORD', 'strongpassword123');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// Authentication Unique Keys and Salts
define('AUTH_KEY',         'keyE&0Ficp/X!U?Mq~+Ludy55Al$Ht)&rakY|C11<SFl*EI*od^ 4}*VF]}b{nCr');
define('SECURE_AUTH_KEY',  '8aKRqLi-d68kq*eHC1WBQ~r&Un`Kq~_]biwH*/Jo.Y/X?pU+pe>|-o&+L[L0->a6');
define('LOGGED_IN_KEY',    '8T<%Qw)P5z4@|JC{%8%uWSL&b4DFY+*[IH=>OUh:pg_nF>q_96C@dLIyMo^BY2@f');
define('NONCE_KEY',        'S8jG-uup0|%vVm7z-O{Vy+>;LQN,|=;}a o-)|dAxszKkM: $D}=dM-RD~~|(gUH');
define('AUTH_SALT',        'oEs;)lMD(=RBro+PjjY#F(||//*w<Ue[sGfygX7,+4Qg+XP1rIST8P2<]O|g*N!%');
define('SECURE_AUTH_SALT', '`R|gs4tn&.qEiL{M.m2Gj$T/]d})b;Y{Ne{ljCWlK~Cj _/~GAZA$TEt+*@C.vO_');
define('LOGGED_IN_SALT',   'N7UvFPBqAS/nsXHo2ORi4PWdWSjIgW*(W|fCsfDb#r=z{l7|Ij+:FTQ =`6|/T__');
define('NONCE_SALT',       '<!~rEc<iHJwX~au|g^K`AH4`dDr<VG|p=32IE7Pw,R#/e^x^930D3YrWUP%]I8fo');

// WordPress Database Table prefix
$table_prefix = 'wp_';

// Debugging mode
define('WP_DEBUG', false);

// Absolute path to WordPress directory
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

// Sets up WordPress vars and included files
require_once ABSPATH . 'wp-settings.php';
