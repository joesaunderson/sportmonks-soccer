<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Commentary
 * @package Sportmonks\Soccer\Endpoint
 */
class Commentary extends SoccerClient
{
    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByFixtureId(int $fixtureId)
    {
        $url = "commentaries/fixture/{$fixtureId}";
        return $this->call($url);
    }
}
