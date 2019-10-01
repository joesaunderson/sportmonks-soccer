<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Prediction
 * @package Sportmonks\Soccer\Endpoint
 */
class Prediction extends SoccerClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getLeagues()
    {
        $url = "predictions/leagues";
        return $this->call($url);
    }

    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getProbabilities()
    {
        $url = "predictions/probabilities/next";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getProbabilitiesByFixtureId(int $fixtureId)
    {
        $url = "predictions/probabilities/fixture/{$fixtureId}";
        return $this->call($url);
    }

    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getValueBets()
    {
        $url = "predictions/valuebets/next";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getValueBetsByFixtureId(int $fixtureId)
    {
        $url = "predictions/valuebets/fixture/{$fixtureId}";
        return $this->call($url);
    }
}
