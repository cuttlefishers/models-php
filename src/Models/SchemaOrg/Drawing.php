<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Drawing extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Drawing";
    }

}
