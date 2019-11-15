<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ResearchProject extends \OpenActive\Models\SchemaOrg\Project
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ResearchProject";
    }

}
