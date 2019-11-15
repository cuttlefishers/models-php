<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BowlingAlley extends \OpenActive\Models\SchemaOrg\SportsActivityLocation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BowlingAlley";
    }

}
