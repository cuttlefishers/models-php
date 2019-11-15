<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MusicEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MusicEvent";
    }

}
