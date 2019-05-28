<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Venue
 * @package Sportmonks\Soccer\Endpoint
 */
class Venue extends SoccerClient
{
    /**
     * @param int $venueId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $venueId)
    {
        $url = "venues/{$venueId}";
        return $this->call($url);
    }

    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getBySeasonId(int $seasonId)
    {
        $url = "venues/season/{$seasonId}";
        return $this->call($url);
    }
}
