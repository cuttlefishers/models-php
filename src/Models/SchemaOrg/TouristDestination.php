<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TouristDestination extends \OpenActive\Models\SchemaOrg\Place
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TouristDestination";
    }

    /**
     * Attraction located at destination.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\TouristAttraction
     */
    protected $includesAttraction;

    /**
     * @return \OpenActive\Models\SchemaOrg\TouristAttraction
     */
    public function getIncludesAttraction()
    {
        return $this->includesAttraction;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\TouristAttraction $includesAttraction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludesAttraction($includesAttraction)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\TouristAttraction",
        );

        $includesAttraction = self::checkTypes($includesAttraction, $types);

        $this->includesAttraction = $includesAttraction;
    }

}
