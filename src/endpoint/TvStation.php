<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class TvStation
 * @package Sportmonks\Soccer\Endpoint
 */
class TvStation extends SoccerClient
{
    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByFixtureId(int $fixtureId)
    {
        $url = "tvstations/fixture/{$fixtureId}";
        return $this->call($url);
    }
}
