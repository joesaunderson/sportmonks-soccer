<?php

namespace Sportmonks\Soccer;

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

/**
 * Class SoccerApi
 * @package Sportmonks\Soccer
 */
class SoccerApi
{
    /**
     * @return Bookmaker
     */
    public static function bookmakers()
    {
        return new Bookmaker();
    }

    /**
     * @return Coach
     */
    public static function coaches()
    {
        return new Coach();
    }

    /**
     * @return Commentary
     */
    public static function commentaries()
    {
        return new Commentary();
    }

    /**
     * @return Continent
     */
    public static function continents()
    {
        return new Continent();
    }

    /**
     * @return Country
     */
    public static function countries()
    {
        return new Country();
    }

    /**
     * @return Fixture
     */
    public static function fixtures()
    {
        return new Fixture();
    }

    /**
     * @return Head2Head
     */
    public static function head2head()
    {
        return new Head2Head();
    }

    /**
     * @return League
     */
    public static function leagues()
    {
        return new League();
    }

    /**
     * @return LiveScore
     */
    public static function liveScores()
    {
        return new LiveScore();
    }

    /**
     * @return Market
     */
    public static function markets()
    {
        return new Market();
    }

    /**
     * @return Odd
     */
    public static function odds()
    {
        return new Odd();
    }

    /**
     * @return Player
     */
    public static function players()
    {
        return new Player();
    }

    /**
     * @return Round
     */
    public static function rounds()
    {
        return new Round();
    }

    /**
     * @return Season
     */
    public static function seasons()
    {
        return new Season();
    }

    /**
     * @return Stage
     */
    public static function stages()
    {
        return new Stage();
    }

    /**
     * @return Standing
     */
    public static function standings()
    {
        return new Standing();
    }

    /**
     * @return TeamSquad
     */
    public static function teamSquads()
    {
        return new TeamSquad();
    }

    /**
     * @return Team
     */
    public static function teams()
    {
        return new Team();
    }

    /**
     * @return TopScorer
     */
    public static function topScorers()
    {
        return new TopScorer();
    }

    /**
     * @return TvStation
     */
    public static function tvStations()
    {
        return new TvStation();
    }

    /**
     * @return Venue
     */
    public static function venues()
    {
        return new Venue();
    }

    /**
     * @return VideoHighlight
     */
    public static function videoHighlights()
    {
        return new VideoHighlight();
    }
}
