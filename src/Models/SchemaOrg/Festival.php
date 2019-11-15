<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Festival extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Festival";
    }

}
