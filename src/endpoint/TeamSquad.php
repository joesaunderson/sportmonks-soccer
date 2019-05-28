<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class TeamSquad
 * @package Sportmonks\Soccer\Endpoint
 */
class TeamSquad extends SoccerClient
{
    /**
     * @param int $teamId
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByTeamAndSeason(int $teamId, int $seasonId)
    {
        $url = "squad/season/{$seasonId}/team/{$teamId}";
        return $this->call($url);
    }
}
