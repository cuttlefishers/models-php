<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SheetMusic extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SheetMusic";
    }

}
