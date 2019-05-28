<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Market
 * @package Sportmonks\Soccer\Endpoint
 */
class Market extends SoccerClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "markets";
        return $this->call($url);
    }

    /**
     * @param int $marketId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $marketId)
    {
        $url = "markets/{$marketId}";
        return $this->call($url);
    }
}
