composer create-project drupal-composer/drupal-project:8.x-dev some-dir --stability dev --no-interaction

drupal site:install  standard  \
--langcode="ru"  \
--db-type="mysql"  \
--db-host="127.0.0.1"  \
--db-name="db_dev84"  \
--db-user="db"  \
--db-pass="dbdbdb"  \
--db-port="3306"  \
--site-name="Drupal 8"  \
--site-mail="info@domain.by"  \
--account-name="mail"  \
--account-mail="mail@cyberlex404.com"  \
--account-pass="__pass__"
