<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class VideoHighlight
 * @package Sportmonks\Soccer\Endpoint
 */
class VideoHighlight extends SoccerClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "highlights";
        return $this->call($url);
    }
}
