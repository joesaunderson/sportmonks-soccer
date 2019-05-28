<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Player
 * @package Sportmonks\Soccer\Endpoint
 */
class Player extends SoccerClient
{
    /**
     * @param int $playerId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $playerId)
    {
        $url = "players/{$playerId}";
        return $this->call($url);
    }
}
