<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PublicSwimmingPool extends \OpenActive\Models\SchemaOrg\SportsActivityLocation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PublicSwimmingPool";
    }

}
