<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Head2Head
 * @package Sportmonks\Soccer\Endpoint
 */
class Head2Head extends SoccerClient
{
    /**
     * @param int $team1Id
     * @param int $team2Id
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByTeamIds(int $team1Id, int $team2Id)
    {
        $url = "head2head/{$team1Id}/{$team2Id}";
        return $this->call($url);
    }
}
