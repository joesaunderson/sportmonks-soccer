<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\Exception\InvalidDateFormatException;
use Sportmonks\Soccer\SoccerApiHelper;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Fixture
 * @package Sportmonks\Soccer\Endpoint
 */
class Fixture extends SoccerClient
{
    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $fixtureId)
    {
        $url = "fixtures/{$fixtureId}";
        return $this->call($url);
    }

    /**
     * @param array $fixtureIds
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByMultipleIds(array $fixtureIds)
    {
        $fixtureIds = implode(",", array_map("trim", array_filter($fixtureIds)));
        $url = "fixtures/multi/{$fixtureIds}";
        return $this->call($url);
    }

    /**
     * @param string $date
     * @return stdClass
     * @throws ApiRequestException
     * @throws InvalidDateFormatException
     */
    public function getByDate(string $date)
    {
        $date = SoccerApiHelper::verifyDate($date);
        var_dump($date);
        $url = "fixtures/date/{$date}";
        return $this->call($url);
    }

    /**
     * @param string $dateFrom
     * @param string $dateTo
     * @return stdClass
     * @throws ApiRequestException
     * @throws InvalidDateFormatException
     */
    public function getByDateRange(string $dateFrom, string $dateTo)
    {
        $dateFrom = SoccerApiHelper::verifyDate($dateFrom);
        $dateTo = SoccerApiHelper::verifyDate($dateTo);
        $url = "fixtures/between/{$dateFrom}/{$dateTo}";
        return $this->call($url);
    }

    /**
     * @param string $dateFrom
     * @param string $dateTo
     * @param int $teamId
     * @return stdClass
     * @throws ApiRequestException
     * @throws InvalidDateFormatException
     */
    public function getByDateRangeForTeam(string $dateFrom, string $dateTo, int $teamId)
    {
        $dateFrom = SoccerApiHelper::verifyDate($dateFrom);
        $dateTo = SoccerApiHelper::verifyDate($dateTo);
        $url = "fixtures/between/{$dateFrom}/{$dateTo}/{$teamId}";
        return $this->call($url);
    }
}
