 # Документация по drupal Console
 https://docs.drupalconsole.com/ru/about/where-do-i-find-the-project.html


Flight Pattern

Flight Stop
composer create-project drupal-composer/drupal-project:8.2.1 billing2.braslavskie.ru --stability dev --no-interaction

composer create-project drupal/drupal billing2.braslavskie.ru --stability stable

composer create-project drupal/drupal billing23.braslavskie.ru 8.2.1

http://niklan.net/blog/125

### Post install load config
$config_installer = \Drupal::service('config.installer');
$config_installer->installDefaultConfig('module', 'gallery');
