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
require_once 'vendor/autoload.php';
require_once 'config.php';

//make the connction to the API for use
$api = new dutchie027\Teli\API(TELI_API_KEY, TELE_VOICE_KEY);

// Add custom settings
$api = new dutchie027\Teli\API(TELI_API_KEY, TELE_VOICE_KEY, $settings);
```

### Settings

The default settings are fine, however you might want to override the defaults or use your own.**NOTE: All settings are optional and you don't need to provide any**.

| Field       | Type   | Description                                                                                                                                                                                 | Default Value                                                                          |
| ----------- | ------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `log_dir`   | string | The directory where the log file is stored                                                                                                                                                  | [sys_get_temp_dir()](https://www.php.net/manual/en/function.sys-get-temp-dir.php)      |
| `log_name`  | string | The name of the log file that is created in `log_dir`. If you don't put .log at the end, it will append it                                                                                  | 6 random characters + [time()](https://www.php.net/manual/en/function.time.php) + .log |
| `log_tag`   | string | If you share this log file with other applications, this is the tag used in the log file                                                                                                    | vultr                                                                                  |
| `log_level` | string | The level of logging the application will do. This must be either `debug`, `info`, `notice`, `warning`, `critical` or `error`. If it is not one of those values it will fail to the default | `warning`                                                                              |

## Future

- The functions are stubbed out for full feature set of Teli's API, but my main focus ATM is SMS/MMS and Account Management


## Contributing

If you're having problems, spot a bug, or have a feature suggestion, [file an issue](https://github.com/dutchie027/teli-php/issues). If you want, feel free to fork the package and make a pull request. This is a work in progresss as I get more info and further test the API.

