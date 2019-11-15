<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ChildrensEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ChildrensEvent";
    }

}
