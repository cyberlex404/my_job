# my_job

## SEARCH AND BEYOND WITH ELASTICSEARCH 
+ https://events.drupal.org/dublin2016/sessions/search-and-beyond-elasticsearch
## Модальные окна

+ http://www.jover.be/2016/03/09/drupal-8-modal/
+ http://www.grisendo.com/en/modal-dialogs-drupal-8

## Building modules with Drupal 8
[Building modules with Drupal 8 Menu](https://docs.acquia.com/articles/building-drupal-8-modules)
+ Lesson 1 - Examples module, Symfony, Controllers, and the Menu
+ Lesson 2 - Blocks, Configuration, and Forms
+ Lesson 3 - Configuration forms and management
+ Lesson 4 - Entities, Content Entities, and Configuration Entities
+ Lesson 5 - Fields for entities
+ Lesson 6 - Entity queries and loading entities
 + [Queries](https://docs.acquia.com/articles/drupal-8-entity-queries-and-loading-entities)
 + [Loading](https://docs.acquia.com/articles/drupal-8-loading-entities)
 + [Lab](https://docs.acquia.com/articles/drupal-8-load-and-query-entities-lab)
+ Lesson 7 - Loading and editing fields
+ Lesson 8 - Services, dependency injection, and service containers
+ Lesson 9 - Creating Elements, Theming Elements, and Managing Front-end Libraries
+ Lesson 10 - Unit and Functional Testing
+ Lesson 11 - Review of Dependency Injection


## Super Link
 + [Injecting Dependencies into Drupal 8 plugins](https://www.previousnext.com.au/blog/injecting-dependencies-drupal-8-plugins)
 + http://blog.openlucius.com/en/blog/dependency-injection-drupal-8-introduction
 + https://ffwagency.com/blog/drupal-8-services-dependency-injection-and-decoupling-your-code


## nginx
+ https://www.howtoforge.com/tutorial/how-to-install-drupal-with-nginx-and-ssl-on-ubuntu/#step-install-nginx-and-phpfpm


- static : \Drupal::entityTypeManager()->getStorage('node')->load($nid);
- dependency injection : $container->get('entity_type.manager')->getStorage('node')->load($nid);
