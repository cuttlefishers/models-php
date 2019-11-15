<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SportsEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SportsEvent";
    }

    /**
     * The away team in a sports event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SportsTeam|\OpenActive\Models\SchemaOrg\Person
     */
    protected $awayTeam;

    /**
     * A competitor in a sports event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam
     */
    protected $competitor;

    /**
     * The home team in a sports event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SportsTeam|\OpenActive\Models\SchemaOrg\Person
     */
    protected $homeTeam;

    /**
     * @return \OpenActive\Models\SchemaOrg\SportsTeam|\OpenActive\Models\SchemaOrg\Person
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SportsTeam|\OpenActive\Models\SchemaOrg\Person $awayTeam
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAwayTeam($awayTeam)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\SportsTeam",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $awayTeam = self::checkTypes($awayTeam, $types);

        $this->awayTeam = $awayTeam;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam
     */
    public function getCompetitor()
    {
        return $this->competitor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\SportsTeam $competitor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCompetitor($competitor)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\SportsTeam",
        );

        $competitor = self::checkTypes($competitor, $types);

        $this->competitor = $competitor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\SportsTeam|\OpenActive\Models\SchemaOrg\Person
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SportsTeam|\OpenActive\Models\SchemaOrg\Person $homeTeam
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHomeTeam($homeTeam)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\SportsTeam",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $homeTeam = self::checkTypes($homeTeam, $types);

        $this->homeTeam = $homeTeam;
    }

}
