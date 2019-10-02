<?php

declare(strict_types=1);

namespace Sportmonks\Test;

use PHPUnit\Framework\TestCase;
use Sportmonks\Soccer\Endpoint\Bookmaker;
use Sportmonks\Soccer\Endpoint\Coach;
use Sportmonks\Soccer\Endpoint\Commentary;
use Sportmonks\Soccer\Endpoint\Continent;
use Sportmonks\Soccer\Endpoint\Country;
use Sportmonks\Soccer\Endpoint\Fixture;
use Sportmonks\Soccer\Endpoint\Head2Head;
use Sportmonks\Soccer\Endpoint\League;
use Sportmonks\Soccer\Endpoint\LiveScore;
use Sportmonks\Soccer\Endpoint\Market;
use Sportmonks\Soccer\Endpoint\Odd;
use Sportmonks\Soccer\Endpoint\Player;
use Sportmonks\Soccer\Endpoint\Prediction;
use Sportmonks\Soccer\Endpoint\Round;
use Sportmonks\Soccer\Endpoint\Season;
use Sportmonks\Soccer\Endpoint\Stage;
use Sportmonks\Soccer\Endpoint\Standing;
use Sportmonks\Soccer\Endpoint\Team;
use Sportmonks\Soccer\Endpoint\TeamSquad;
use Sportmonks\Soccer\Endpoint\TopScorer;
use Sportmonks\Soccer\Endpoint\TvStation;
use Sportmonks\Soccer\Endpoint\Venue;
use Sportmonks\Soccer\Endpoint\VideoHighlight;
use Sportmonks\Soccer\SoccerApi;

class SoccerApiTest extends TestCase
{
    protected function setUp(): void
    {
        $_ENV['SPORTMONKS_API_TOKEN'] = 'test';
    }

    public function testBookmakers(): void
    {
        $this->assertInstanceOf(Bookmaker::class, SoccerApi::bookmakers());
    }

    public function testCoaches(): void
    {
        $this->assertInstanceOf(Coach::class, SoccerApi::coaches());
    }

    public function testCommentaries(): void
    {
        $this->assertInstanceOf(Commentary::class, SoccerApi::commentaries());
    }

    public function testContinents(): void
    {
        $this->assertInstanceOf(Continent::class, SoccerApi::continents());
    }

    public function testCountries(): void
    {
        $this->assertInstanceOf(Country::class, SoccerApi::countries());
    }

    public function testFixtures(): void
    {
        $this->assertInstanceOf(Fixture::class, SoccerApi::fixtures());
    }

    public function testHead2Head(): void
    {
        $this->assertInstanceOf(Head2Head::class, SoccerApi::head2head());
    }

    public function testLeagues(): void
    {
        $this->assertInstanceOf(League::class, SoccerApi::leagues());
    }

    public function testLiveScores(): void
    {
        $this->assertInstanceOf(LiveScore::class, SoccerApi::liveScores());
    }

    public function testMarkets(): void
    {
        $this->assertInstanceOf(Market::class, SoccerApi::markets());
    }

    public function testOdds(): void
    {
        $this->assertInstanceOf(Odd::class, SoccerApi::odds());
    }

    public function testPlayers(): void
    {
        $this->assertInstanceOf(Player::class, SoccerApi::players());
    }

    public function testPredictions(): void
    {
        $this->assertInstanceOf(Prediction::class, SoccerApi::predictions());
    }

    public function testRounds(): void
    {
        $this->assertInstanceOf(Round::class, SoccerApi::rounds());
    }

    public function testSeasons(): void
    {
        $this->assertInstanceOf(Season::class, SoccerApi::seasons());
    }

    public function testStages(): void
    {
        $this->assertInstanceOf(Stage::class, SoccerApi::stages());
    }

    public function testStandings(): void
    {
        $this->assertInstanceOf(Standing::class, SoccerApi::standings());
    }

    public function testTeamSquads(): void
    {
        $this->assertInstanceOf(TeamSquad::class, SoccerApi::teamSquads());
    }

    public function testTeams(): void
    {
        $this->assertInstanceOf(Team::class, SoccerApi::teams());
    }

    public function testTopScores(): void
    {
        $this->assertInstanceOf(TopScorer::class, SoccerApi::topScorers());
    }

    public function testTvStations(): void
    {
        $this->assertInstanceOf(TvStation::class, SoccerApi::tvStations());
    }

    public function testVenues(): void
    {
        $this->assertInstanceOf(Venue::class, SoccerApi::venues());
    }

    public function testVideoHighlights(): void
    {
        $this->assertInstanceOf(VideoHighlight::class, SoccerApi::videoHighlights());
    }
}
