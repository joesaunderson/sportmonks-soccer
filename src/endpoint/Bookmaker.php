<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Bookmaker
 * @package Sportmonks\Soccer\Endpoint
 */
class Bookmaker extends SoccerClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "bookmakers";
        return $this->call($url);
    }

    /**
     * @param int $bookmakerId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $bookmakerId)
    {
        $url = "bookmakers/{$bookmakerId}";
        return $this->call($url);
    }
}
