<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TouristTrip extends \OpenActive\Models\SchemaOrg\Trip
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TouristTrip";
    }

}
