<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class League
 * @package Sportmonks\Soccer\Endpoint
 */
class League extends SoccerClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "leagues";
        return $this->call($url);
    }

    /**
     * @param int $leagueId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $leagueId)
    {
        $url = "leagues/{$leagueId}";
        return $this->call($url);
    }
}
