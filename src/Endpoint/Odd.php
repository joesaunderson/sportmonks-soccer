<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Odd
 * @package Sportmonks\Soccer\Endpoint
 */
class Odd extends SoccerClient
{
    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByFixtureId(int $fixtureId)
    {
        $url = "odds/fixture/{$fixtureId}";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getInPlayByFixtureId(int $fixtureId)
    {
        $url = "odds/inplay/fixture/{$fixtureId}";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @param int $bookmakerId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByFixtureAndBookmaker(int $fixtureId, int $bookmakerId)
    {
        $url = "odds/fixture/{$fixtureId}/bookmaker/{$bookmakerId}";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @param int $marketId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByFixtureAndMarket(int $fixtureId, int $marketId)
    {
        $url = "odds/fixture/{$fixtureId}/market/{$marketId}";
        return $this->call($url);
    }
}
