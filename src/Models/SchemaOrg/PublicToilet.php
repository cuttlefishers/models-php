<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PublicToilet extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PublicToilet";
    }

}
