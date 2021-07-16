# teli-php

[![Latest Stable Version](https://poser.pugx.org/dutchie027/teli/v)](//packagist.org/packages/dutchie027/teli)
[![Total Downloads](https://poser.pugx.org/dutchie027/teli/downloads)](//packagist.org/packages/dutchie027/teli)
[![License](https://poser.pugx.org/dutchie027/teli/license)](//packagist.org/packages/dutchie027/teli)
[![CodeFactor](https://www.codefactor.io/repository/github/dutchie027/teli-php/badge)](https://www.codefactor.io/repository/github/dutchie027/teli-php)

PHP Library Intended to Interact with [Teli's API](https://apidocs.teleapi.net/welcome/)

## Installation

```php
composer require dutchie027/teli
```

## Overview

Why did I create this API versus using the one Teli provides natively? A few reasons:

* In my opinion guzzle is WAY more powerful than using the cURL library
* Most of the Teli calls are GET calls
* Teli's library exposes the API key in the URI 95% of the time. Sure it's https calls, but that's still asking for trouble

## Usage

```php
// require the composer library
require_once ('vendor/autoload.php');

//make the connction to the API for use
$api = new dutchie027\Teli\API(TELI_API_KEY);
```
