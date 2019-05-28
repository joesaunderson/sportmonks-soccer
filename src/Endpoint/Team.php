<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Team
 * @package Sportmonks\Soccer\Endpoint
 */
class Team extends SoccerClient
{
    /**
     * @param int $teamId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $teamId)
    {
        $url = "teams/{$teamId}";
        return $this->call($url);
    }

    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getBySeasonId(int $seasonId)
    {
        $url = "teams/season/{$seasonId}";
        return $this->call($url);
    }
}
