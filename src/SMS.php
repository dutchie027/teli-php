<?php

/**
 * PHP Wrapper to Interact with Teli API
 *
 * @package Teli
 * @version 2.0
 * @author  https://github.com/dutchie027
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @see     https://github.com/dutche027/teli-php
 * @see     https://packagist.org/packages/dutchie027/teli
 * @see     https://apidocs.teleapi.net/welcome/
 *
 */

namespace dutchie027\Teli;

class SMS
{
    /**
     * Reference to \API object
     *
     * @var object
     */
    protected $api;

    /**
     * __construct
     * Takes reference from \API
     *
     * @param object $api API
     *
     * @return object
     *
     */
    public function __construct(API $api)
    {
        $this->api = $api;
    }

    public function sendSMS($data)
    {
        return $this->api->makeAPICall('POST', $this->api::SEND_SMS_URL, $data);
    }
}
