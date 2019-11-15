<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LiteraryEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LiteraryEvent";
    }

}
