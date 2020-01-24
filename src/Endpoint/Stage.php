<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Stage
 * @package Sportmonks\Soccer\Endpoint
 */
class Stage extends SoccerClient
{
    /**
     * @param int $stageId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $stageId)
    {
        $url = "stages/{$stageId}";
        return $this->call($url);
    }

    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getBySeasonId(int $seasonId)
    {
        $url = "stages/season/{$seasonId}";
        return $this->call($url);
    }
}
