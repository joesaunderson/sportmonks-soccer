<?php

declare(strict_types=1);

namespace Tests\Endpoint;

use PHPUnit\Framework\TestCase;
use Sportmonks\Soccer\SoccerClient;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

class EndpointTestCase extends TestCase
{
    /** @var SoccerClient|null */
    protected $instance;

    protected function setUp(): void
    {
        if (!$this->instance || !($this->instance instanceof SoccerClient)) {
            throw new \Exception('Instance should be an instance of SoccerClient class');
        }

        $reflectionProperty = new \ReflectionProperty(SoccerClient::class, 'client');
        $reflectionProperty->setAccessible(true);

        $reflectionProperty->setValue($this->instance, $this->getHttpClientMock());
    }

    public function getHttpClientMock(): MockHttpClient
    {
        $baseUri = 'https://soccer.sportmonks.com/api/v2.0/';

        $callback = function ($method, $url, $options) use ($baseUri) {
            $file = str_replace($baseUri, '', $url);
            $file = str_replace('?api_token=test', '', $file);

            $file = __DIR__ . "/../mocks/$file.json";

            if (file_exists($file)) {
                return new MockResponse(file_get_contents($file));
            }

            return new MockResponse('', ['http_code' => 404]);
        };

        return new MockHttpClient($callback, $baseUri);
    }
}
