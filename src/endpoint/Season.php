<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Season
 * @package Sportmonks\Soccer\Endpoint
 */
class Season extends SoccerClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "seasons";
        return $this->call($url);
    }

    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $seasonId)
    {
        $url = "seasons/{$seasonId}";
        return $this->call($url);
    }
}
