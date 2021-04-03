# MVC-Skeleton-PHP
---
A simple Skeleton for PHP MVC projects.

## Includes:
- Autoloader
- Session Configuration
- Cookie Configuration
- Environment Variables
- SQL basics (very simple)
- Database Configuration
- A MasterController to kick of the application

*The rest is up to you! Have fun making your MVC-application.*

## Quick Start:
```
git clone https://github.com/ulricaskarin/MVC-Skeleton-PHP.git
```
## Before launch:
Be sure to provide your database configuration in **app/_config/_db_config.php**

```php
define('DB_HOST', 'localhost');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', 'MyPreciousDatabase');
```

## To Notice:
All Class files must be named with the **dot class dot php** in order for Autoloader to work:
```php
MyClass.class.php
```
