# Sportmonks Soccer API PHP Client

[![Build Status](https://travis-ci.org/joesaunderson/sportmonks-soccer.svg?branch=master)](https://travis-ci.org/joesaunderson/sportmonks-soccer)

PHP Library for [Sportmonks](https://sportmonks.com/) Soccer API. Developed by [Joe Saunderson](mailto:joesaunderson@me.com).

## Prerequisites

PHP >= 7.3

## Installation

```
composer require joesaunderson/sportmonks-soccer
```

## Setup

The API Client relies on [Environment variables](https://www.php.net/manual/en/reserved.variables.environment.php) for 
configuration (setting API token & timezone).

Install:
```
composer require symfony/dotenv
```

Usage:
```
use Symfony\Component\Dotenv\Dotenv;
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');
```

An example .env file:

```dotenv
# API TOKEN (Required)
# https://sportmonks.com/settings#/api
SPORTMONKS_API_TOKEN=_YOUR_API_TOKEN_HERE

# TIMEZONE (Optional)
# https://sportmonks.com/docs/football/2.0/getting-started/a/setting-the-timezone/82
SPORTMONKS_TIMEZONE=Europe/London
```

## Usage

```php
use Sportmonks\Soccer\SoccerApi;

...

// Basic API call for all Bookmakers
$response = SoccerApi::bookmakers()->getAll();
```

## Pagination, Filtering, Sorting & Data Enrichment 

The [Sportmonks API](https://sportmonks.com/docs/football/2.0/getting-started/a/api-filtering-sorting-and-pagination/90) 
allows for advanced filtering and sorting, as well as adding data via relationships. This client supports the following:

### Includes

```php
// API call for Fixtures with includes
$response = SoccerApi::fixtures()
    ->setIncludes(['goals', 'flatOdds:filter(bookmaker_id|2)'])
    ->getByDate('2019-05-28');
```

### Pagination

```php
// API call for Fixtures with page specified 
$response = SoccerApi::fixtures()
    ->setPage(3)
    ->getByDate('2019-05-28');
```

Note: The pagination meta (`$response['meta']['pagination']`) can be used to loop through pages and build a result set.

### Additional Parameters

Certain endpoints allow for data to be passed as URI query parameters, these are shown below & must be added before
the ->get..() call.

```php
->setBookmakers([1, 2])
->setFixtures([1, 2])
->setLeagues([1, 2])
->setMarkets([1, 2])
```

Note: This client will not validate the usage for the correct endpoints and will not throw an error. Refer to the 
[Sportmonks docs](https://sportmonks.com/docs/football/2.0) to see which endpoints support the above parameters. 

## Full Endpoint Examples

### Bookmakers

##### Get All - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/bookmakers/a/get-all-bookmakers/37)

```php
$response = SoccerApi::bookmakers()->getAll();
```

##### Get By Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/bookmakers/a/get-bookmaker-by-id/38)

```php
$response = SoccerApi::bookmakers()->getById($bookmakerId);
```

### Coaches

##### Get By Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/coaches/a/get-coach-by-id/43)

```php
$response = SoccerApi::coaches()->getById($coachId);
```

### Commentaries

##### Get By Fixture Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/commentaries/a/get-by-fixture-id/17)

```php
$response = SoccerApi::commentaries()->getByFixtureId($fixtureId);
```

### Continents

##### Get All - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/continents/a/get-all-continents/2)

```php
$response = SoccerApi::continents()->getAll();
```

##### Get By Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/continents/a/get-by-id/3)

```php
$response = SoccerApi::continents()->getById($continentId);
```

### Countries

##### Get All - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/countries/a/get-all-countries/4)

```php
$response = SoccerApi::countries()->getAll();
```

##### Get By Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/countries/a/get-by-id/5)

```php
$response = SoccerApi::countries()->getById($countryId);
```

### Fixtures

##### Get By Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/fixtures/a/get-by-id/10)

```php
$response = SoccerApi::fixtures()->getById($fixtureId);
```

##### Get By Date - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/fixtures/a/get-by-date/11)

```php
$response = SoccerApi::fixtures()->getByDate($date);
```

##### Get By Date Range - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/fixtures/a/get-by-date-range/12)

```php
$response = SoccerApi::fixtures()->getByDateRange($dateFrom, $dateTo);
```

##### Get By Date Range For Team - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/fixtures/a/get-by-date-range-for-team/13)

```php
$response = SoccerApi::fixtures()->getByDateRangeForTeam($dateFrom, $dateTo, $teamId);
```

##### Get By Multiple Ids - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/fixtures/a/get-by-multiple-ids/14)

```php
$response = SoccerApi::fixtures()->getByMultipleIds([$fixtureId1, $fixtureId2...]);
```

### Head2Head

##### Get By Team Ids - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/head2head/a/get-by-team-ids/19)

```php
$response = SoccerApi::head2head()->getByTeamIds($team1Id, $team2Id);
```

### Leagues

##### Get All - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/leagues/a/get-all-leagues/6)

```php
$response = SoccerApi::leagues()->getAll();
```
        
##### Get By Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/leagues/a/get-by-id/7)

```php
$response = SoccerApi::leagues()->getById($legueId);
```
   
### Live Scores

##### Get All - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/livescores/a/get-all-for-today/15)

```php
$response = SoccerApi::liveScores()->getAll();
```

##### Get All Inplay - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/livescores/a/get-all-inplay-fixtures/16)

```php
$response = SoccerApi::liveScores()->getAllInPlay();
```

### Markets

##### Get All - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/markets/a/get-all-markets/39)

```php
$response = SoccerApi::markets()->getAll();
```

##### Get By Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/markets/a/get-market-by-id/40)

```php
$response = SoccerApi::markets()->getById($marketId);
```

### Odds

##### Get By Fixture & Bookmaker - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/odds/a/get-prematch-odds-by-fixture-and-bookmaker/30)

```php
$response = SoccerApi::odds()->getByFixtureAndBookmaker($fixtureId, $bookmakerId);
```

##### Get By Fixture & Market - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/odds/a/get-prematch-odds-by-fixture-and-market/31)

```php
$response = SoccerApi::odds()->getByFixtureAndMarket($fixtureId, $marketId);
```

##### Get By Fixture Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/odds/a/get-prematch-odds-by-fixture-id/36)

```php
$response = SoccerApi::odds()->getByFixtureId($fixtureId);
```

##### Get Inplay Odds By Fixture Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/odds/a/get-inplay-odds-by-fixture-id/32)

```php
$response = SoccerApi::odds()->getInPlayByFixtureId($fixtureId);
```

### Players

##### Get By Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/players/a/get-player-by-id/41)

```php
$response = SoccerApi::players()->getById($playerId);
```

### Predictions

##### Get Leagues [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/prediction-api/a/leagues-performance/211)

```php
$response = SoccerApi::predictions()->getLeagues()
```

##### Get Probabilities [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/prediction-api/a/probabilities/212)

```php
$response = SoccerApi::predictions()->getProbabilities()
```

##### Get Probabilities By Fixture Id [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/prediction-api/a/probability-by-fixture-id/214)

```php
$response = SoccerApi::predictions()->getProbabilitiesByFixtureId($fixtureId)
```

##### Get Value Bets [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/prediction-api/a/value-bets/213)

```php
$response = SoccerApi::predictions()->getValueBets()
```

##### Get Value Bets By Fixture Id [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/prediction-api/a/value-bet-by-fixture-id/215)

```php
$response = SoccerApi::predictions()->getValueBetsByFixtureId($fixtureId)
```

### Rounds
     
##### Get By Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/rounds/a/get-round-by-id/28)

```php
$response = SoccerApi::rounds()->getById($roundId);
```

##### Get By Season Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/rounds/a/get-rounds-by-season-id/29)

```php
$response = SoccerApi::rounds()->getBySeasonId($seasonId);
```

### Seasons

##### Get All - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/seasons/a/get-all-seasons/8)

```php
$response = SoccerApi::seasons()->getAll();
```

##### Get By Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/seasons/a/get-by-id/9)

```php
$response = SoccerApi::seasons()->getById($seasonId);
```

### Stages

##### Get By Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/stages/a/get-stage-by-id/34)

```php
$response = SoccerApi::stages()->getById($stageId);
```

##### Get By Season Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/stages/a/get-stages-by-season-id/35)

```php
$response = SoccerApi::stages()->getBySeasonId($seasonId);
```

### Standings

##### Get By Season Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/standings/a/get-standings-by-season-id/20)

```php
$response = SoccerApi::standings()->getBySeasonId($seasonId);
```

##### Get Live Standings - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/standings/a/get-live-standings-by-season-id/21)

```php
$response = SoccerApi::standings()->getLiveStandingsBySeasonId($seasonId);
```

### Teams

##### Get By Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/teams/a/get-team-by-id/22)

```php
$response = SoccerApi::teams()->getById($teamId);
```

##### Get By Season - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/teams/a/get-teams-played-in-season/23)

```php
$response = SoccerApi::teams()->getBySeasonId($seasonId);
```

### Team Squads

##### Get By Team & Season - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/team-squads/a/get-squad-by-team-and-season/42)

```php
$response = SoccerApi::teamSquads()->getByTeamAndSeason($teamId, $seasonId);
```

### Top Scorers

##### Get By Season Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/topscorers/a/get-topscorers-by-season-id/24)

```php
$response = SoccerApi::topScorers()->getBySeasonId($seasonId);
```

##### Aggregated By Season Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/topscorers/a/get-aggregated-topscorers-by-season-id/25)

```php
$response = SoccerApi::topScorers()->getAggregatedBySeasonId($seasonId);
```

### Tv Stations

##### Get By Fixture Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/tv-stations/a/get-tv-stations-by-fixture-id/44)

```php
$response = SoccerApi::tvStations()->getByFixtureId($fixtureId);
```

### Venues

##### Get By Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/venues/a/get-by-venue-id/26)

```php
$response = SoccerApi::venues()->getById($venueId);
```

##### Get By Season Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/venues/a/get-venues-by-season-id/27)

```php
$response = SoccerApi::venues()->getBySeasonId($seasonId);
```

### Video Highlights

##### Get By Fixture Id - [View Sportmonks Docs](https://sportmonks.com/docs/football/2.0/video-highlights/a/get-video-highlights-by-fixture-id/18)

```php
$response = SoccerApi::videoHighlights()->getAll();
```

## License
[MIT](https://tldrlegal.com/license/mit-license)
