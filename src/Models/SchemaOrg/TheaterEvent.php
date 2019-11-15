<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TheaterEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TheaterEvent";
    }

}
