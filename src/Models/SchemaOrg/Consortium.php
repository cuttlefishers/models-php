<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Consortium extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Consortium";
    }

}
