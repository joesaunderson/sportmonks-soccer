<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class LiveScore
 * @package Sportmonks\Soccer\Endpoint
 */
class LiveScore extends SoccerClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "livescores";
        return $this->call($url);
    }

    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAllInPlay()
    {
        $url = "livescores/now";
        return $this->call($url);
    }
}
