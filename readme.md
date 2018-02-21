# Twitter search with laravel

## Installation

We need composer to install all packages.
Here the complete instruction to install composer https://getcomposer.org/doc/00-intro.md

Rename configuration file
```
.env.example to .env
```

Let's install all packages, by running this command from Terminal

```
composer install
```

And run the web server

```
php artisan serve
```

Add the following parameters to .env and use your own credentials

```
TWITTER_CONSUMER_KEY=
TWITTER_CONSUMER_SECRET=
TWITTER_ACCESS_TOKEN=
TWITTER_ACCESS_TOKEN_SECRET=
```


Capture

![alt text](https://i.gyazo.com/6b44a596d3d9fc565785f4b119f02b8c.png)


Now, visit http://localhost:8000.

## Notes

Defautl query search is "American Food"