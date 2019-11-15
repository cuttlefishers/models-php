<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TennisComplex extends \OpenActive\Models\SchemaOrg\SportsActivityLocation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TennisComplex";
    }

}
