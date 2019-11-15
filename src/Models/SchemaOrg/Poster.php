<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Poster extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Poster";
    }

}
