<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class TopScorer
 * @package Sportmonks\Soccer\Endpoint
 */
class TopScorer extends SoccerClient
{
    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getBySeasonId(int $seasonId)
    {
        $url = "topscorers/season/{$seasonId}";
        return $this->call($url);
    }

    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAggregatedBySeasonId(int $seasonId)
    {
        $url = "topscorers/season/{$seasonId}/aggregated";
        return $this->call($url);
    }
}
