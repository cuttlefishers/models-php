<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Manuscript extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Manuscript";
    }

}
