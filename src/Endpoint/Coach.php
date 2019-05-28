<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Coach
 * @package Sportmonks\Soccer\Endpoint
 */
class Coach extends SoccerClient
{
    /**
     * @param int $coachId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $coachId)
    {
        $url = "coaches/{$coachId}";
        return $this->call($url);
    }
}
