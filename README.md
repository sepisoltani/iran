# Iran provinces , countries and cities for laravel framework

![alt text](./cover.jpg "sepisoltani/iran")

[![Latest Stable Version](https://poser.pugx.org/sepisoltani/iran/v)](//packagist.org/packages/sepisoltani/iran)
[![Total Downloads](https://poser.pugx.org/sepisoltani/iran/downloads)](//packagist.org/packages/sepisoltani/iran)
[![License](https://poser.pugx.org/sepisoltani/iran/license)](//packagist.org/packages/sepisoltani/iran)
![StyleCI](https://github.styleci.io/repos/301969118/shield)

This Laravel package helps developers to have Iran provinces , countries and cities in their project.

## Requirements

PHP >= 7.4 

Laravel >= 8.0




## Installation

Use the package manager [composer](https://getcomposer.org/) to install this package.

```bash
composer require sepisoltani/iran
```

You can publish config file 

```bash
php artisan vendor:publish --tag=iran-configs
```

You can publish seeders 

```bash
php artisan vendor:publish --tag=iran-seeds
```

Then run artisan command
```bash
php artisan init:iran
```

## Usage

```php
#Province methods

\Sepisoltani\Iran\Facades\Iran::get_provinces() # returns collection of all provinces

\Sepisoltani\Iran\Facades\Iran::get_approved_provinces() # returns collection of approved provinces

\Sepisoltani\Iran\Facades\Iran::find_province($id) # returns province found with the $id 


#Country methods

\Sepisoltani\Iran\Facades\Iran::get_countries() # returns collection of all countries

\Sepisoltani\Iran\Facades\Iran::get_approved_countries() # returns collection of approved countries

\Sepisoltani\Iran\Facades\Iran::find_country($id) # returns country found with the $id 


#City methods

\Sepisoltani\Iran\Facades\Iran::get_cities() # returns collection of all cities

\Sepisoltani\Iran\Facades\Iran::get_approved_cities() # returns collection of approved cities

\Sepisoltani\Iran\Facades\Iran::find_city($id) # returns city found with the $id 

```
## Using cache
If you want to cache queries in redis , publish config file then modify use_cache to true

```php
<?php

return [

    'use_cache' => false, # change this to true if you wants to use cache
    'cache_times' => [
        'provinces' => 86400, # time to purge provinces methods query caches
        'countries' => 86400,  # time to purge countries methods query caches
        'cities' => 86400,  # time to purge cities methods query caches
    ],
    'cache_tags' => [
        'provinces' => 'iran-provinces', # tags of provinces cache
        'countries' => 'iran-countries',  # tags of provinces cache
        'cities' => 'iran-cities',  # tags of provinces cache
    ], 
];
```
## NOTE
If you want to use cache , 
be sure to set CACHE_DRIVER and REDIS_CLIENT in your .env

```
CACHE_DRIVER=redis
REDIS_CLIENT=predis
```


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
