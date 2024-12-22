# Laravel Email Database Log
A database logger for all outgoing emails sent by your Laravel application.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)


#### Table of contents
- [Requirements](#requirements)
- [Installation Instructions](#installation-instructions)
    - [Publish All Assets](#publish-all-assets)
- [Usage](#usage)
- [File Tree](#file-tree)
- [License](#license)

### Requirements
* [Laravel 5.5, 5.6, 5.7, 5.8, 6.0+, 7.0+, 8.0+, 9.0+, 10.0+, 11.0+](https://laravel.com/docs/installation)

### Installation Instructions
1. From your projects root folder in terminal run:

    ```bash
        composer require Flexadmin/laravel-email-database-log
    ```

2. Register the package

* Laravel 5.5 and up
Uses package auto discovery feature, no need to edit the `config/app.php` file.

* Laravel 5.4 and below
Register the package with laravel in `config/app.php` under `providers` with the following:

```php
    'providers' => [
        // ...
        Flexadmin\LaravelEmailDatabaseLog\LaravelEmailDatabaseLogServiceProvider::class,
    ];
```

3. Publish the packages migration files by running the following from your projects root folder:

```bash
php artisan vendor:publish --tag=laravel-email-database-log-migration
```

4. From your projects root folder in terminal run the migration:

```bash
php artisan migrate
```

### Usage
After installation, any email sent by your application will be logged to `email_log` table in the site's database.

### File Tree
```bash
laravel-email-database-log
├── .all-contributorsrc
├── .github
│ └── workflows
│     └── master.yml
├── .gitignore
├── .styleci.yml
├── LICENSE.md
├── README.md
├── composer.json
├── composer.lock
├── phpunit.xml
└── src
    ├── Database
    │ └── Migrations
    │      └── 2023_02_26_001638_create_email_log.php
    ├── EmailLogger.php
    ├── LaravelEmailDatabaseLogEventServiceProvider.php
    └── LaravelEmailDatabaseLogServiceProvider.php
```

* Tree command can be installed using brew: `brew install tree`
* File tree generated using command `tree -a -I '.git|node_modules|vendor|storage|tests'`

### License
Laravel Email Database Log is licensed under the [MIT license](https://opensource.org/licenses/MIT). Enjoy!
