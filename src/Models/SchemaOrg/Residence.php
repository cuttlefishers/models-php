<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Residence extends \OpenActive\Models\SchemaOrg\Place
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Residence";
    }

}
