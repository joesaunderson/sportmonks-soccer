<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Sportmonks\Soccer\Exception\InvalidDateFormatException;
use Sportmonks\Soccer\SoccerApiHelper;

class SoccerApiHelperTest extends TestCase
{
    public function testVerifyDateThrowsInvalidDateFormatException(): void
    {
        $this->expectException(InvalidDateFormatException::class);

        SoccerApiHelper::verifyDate('foo');
    }

    public function testVerifyDateReturnsValidDateTime(): void
    {
        $this->assertEquals('2019-01-01', SoccerApiHelper::verifyDate('2019-01-01'));
    }
}
