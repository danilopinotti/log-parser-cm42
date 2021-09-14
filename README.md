#  Log Parser - Quake 3 Arena

The main objective of this project is to build a Log Parser described [here](https://gist.github.com/fabiosammy/5245c7e85796a7831d5f5f81c4103b21).

The chosen programming language was PHP.

## Setup project

This project was built using PHP. To set up the environment, you need to install PHP 8 with json extension and composer.

```shell
# Installing PHP8 with json extension
sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install php8.0 php-json

# Installing Composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php --install-dir=/usr/bin --filename=composer
php -r "unlink('composer-setup.php');"
```

After environment setup, you need to set up the project:
```shell
composer install
```

At last, put the log file in `/data` folder with 'games.log' name.
## Running application
After setup environment and application, you be able to run the application.

```shell
php index.php
```

If you have a log with different name "games.log" you can pass the name as argument, e.g:
```shell
php index.php mylog.txt
```

## Testing
To execute automated tests:
```
composer test
```
