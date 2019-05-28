<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Continent
 * @package Sportmonks\Soccer\Endpoint
 */
class Continent extends SoccerClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "continents";
        return $this->call($url);
    }

    /**
     * @param int $continentId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $continentId)
    {
        $url = "continents/{$continentId}";
        return $this->call($url);
    }
}
