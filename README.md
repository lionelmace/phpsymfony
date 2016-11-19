Symfony Standard Edition
========================

Welcome to the Symfony Standard Edition - a fully-functional Symfony
application that you can use as the skeleton for your new applications.

For details on how to download and get started with Symfony, see the
[Installation][1] chapter of the Symfony Documentation.


## Scenario

1. Create Project

  ```
  composer create-project symfony/framework-standard-edition:^3.0 phpsymfony
  ```

  Note: When being asked the database parameters, keep the default.
  
1. Test locally

  ```
  php bin/console server:run
  ```

1. Open the URL in the browser. You should see Welcome to Symphony 3.1.6

1. Update the PHP version used in two place in the composer.json

  ```
  "require": {
    "php": ">=7.0.12”,
    "symfony/symfony": "3.1.*",
  }
  "config": {
    "platform": {
      "php": "7.0.12"
    }
  },
  ```

1. Add manifest.yml

  ```
  ---
  applications:
  - name: phpsymfony
    host: phpsymfony
    memory: 256M
    instances: 1
    env:
      BP_DEBUG: true
      SYMFONY_ENV: prod
  ````

1. Add options.json in folder .bp-config

  ```
  {
    "PHP_VERSION": "{PHP_70_LATEST}",
    "WEBDIR": "web",
    "COMPOSER_VENDOR_DIR": "vendor"
  }
  ```

1. Add .user.ini file in root directory

  ```
  # Display PHP errors in the web page when failing
  display_errors = On
  error_reporting = E_ALL
  ```

1. Added file .cfignore

  ```
  vendor/
  web/bundles
  ````

## Resources

[1]:  https://symfony.com/doc/3.0/book/installation.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/3.0/book/doctrine.html
[8]:  https://symfony.com/doc/3.0/book/templating.html
[9]:  https://symfony.com/doc/3.0/book/security.html
[10]: https://symfony.com/doc/3.0/cookbook/email.html
[11]: https://symfony.com/doc/3.0/cookbook/logging/monolog.html
[13]: https://symfony.com/doc/3.0/bundles/SensioGeneratorBundle/index.html
