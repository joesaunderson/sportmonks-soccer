<?php

namespace Sportmonks\Test;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerApi;

class SetupTest extends TestCase
{
    /**
     * @test
     */
    public function testEmptyApiToken()
    {
        $_ENV['SPORTMONKS_API_TOKEN'] = "";
        $this->expectException(InvalidArgumentException::class);
        SoccerApi::bookmakers()->getAll();
    }

    /**
     * @test
     */
    public function testInvalidApiToken()
    {
        $_ENV['SPORTMONKS_API_TOKEN'] = 'INVALID';
        $this->expectException(ApiRequestException::class);
        SoccerApi::bookmakers()->getAll();
    }
}