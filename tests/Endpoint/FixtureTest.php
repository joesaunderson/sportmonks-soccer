<?php

declare(strict_types=1);

namespace Tests\Endpoint;

use Sportmonks\Soccer\Endpoint\Fixture;
use Sportmonks\Soccer\Exception\ApiRequestException;

class FixtureTest extends EndpointTestCase
{
    protected function setUp(): void
    {
        $this->instance = new Fixture();
        parent::setUp();
    }

    public function testGetByIdReturnsValidResponse(): void
    {
        $result = $this->instance->getById(10333026);

        $this->assertEquals(10333026, $result->data->id);
    }

    public function testGetByIdReturns404Response(): void
    {
        $this->expectException(ApiRequestException::class);

        $this->instance->getById(1);
    }
}
