<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Basic Example

## **Requirements**

[Docker](https://docs.docker.com/get-docker/) needs to be installed

## **Environment setup**

- Run the following command inside the uncompressed directory to build and up the docker containers

    ```php
    ./vendor/bin/sail up -d
    ```

- Access to the following url in order to check the installation:

    ```php
    http://127.0.0.1:8001
    ```


## **Data migration**

In order to migrate necessary aplication data, run the following commands on a terminal:

```php
./vendor/bin/sail artisan migrate:install
./vendor/bin/sail artisan migrate:fresh
./vendor/bin/sail artisan db:seed ExampleSeed
```

## **Run the Application**

To access to the application use your browser to go to:

```php
http://127.0.0.1:8001/example/index
```

## **Test the Application**
To run the application tests execute the command:

```php
./vendor/bin/sail artisan test
```

## Uninstall

If you want to uninstall and clean the environment you can run

```php
./vendor/bin/sail down -v
```
