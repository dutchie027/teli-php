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

## Future

- The functions are stubbed out for full feature set of Teli's API, but my main focus ATM is SMS/MMS and Account Management


## Contributing

If you're having problems, spot a bug, or have a feature suggestion, [file an issue](https://github.com/dutchie027/teli-php/issues). If you want, feel free to fork the package and make a pull request. This is a work in progresss as I get more info and further test the API.

