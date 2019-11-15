<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Landform extends \OpenActive\Models\SchemaOrg\Place
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Landform";
    }

}
