<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Play extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Play";
    }

}
