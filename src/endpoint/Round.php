<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Round
 * @package Sportmonks\Soccer\Endpoint
 */
class Round extends SoccerClient
{
    /**
     * @param int $roundId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $roundId)
    {
        $url = "rounds/{$roundId}";
        return $this->call($url);
    }

    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getBySeasonId(int $seasonId)
    {
        $url = "rounds/season/{$seasonId}";
        return $this->call($url);
    }
}
