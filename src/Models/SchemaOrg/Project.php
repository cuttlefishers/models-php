<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Project extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Project";
    }

}
