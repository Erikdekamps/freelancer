<?php

/**
 * Salt for one-time login links, cancel links, form tokens etc.
 */
$settings['hash_salt'] = 'Cv4De46lW5i2-HLFTNa5ARkFgb2Q_yFd_6z3jooMnviKt0TtYtZxwR0MOLFTmeLS-XYC8RZgtw';

/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = FALSE;

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['install_profile'] = 'standard';
$config_directories['sync'] = 'config/sync';

/**
 * Load local development override configuration, if available.
 * Keep this code block at the end of this file to take full effect.
 *
 * Place the following in the settings.local.php file.
 *
 * $databases['default']['default'] = array (
 *   'database' => 'DATABASE',
 *   'username' => 'USER',
 *   'password' => 'PASS',
 *   'prefix' => '',
 *   'host' => 'HOST',
 *   'port' => '',
 *   'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
 *   'driver' => 'mysql',
 * );
 */
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
