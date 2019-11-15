<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SkiResort extends \OpenActive\Models\SchemaOrg\SportsActivityLocation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SkiResort";
    }

}
