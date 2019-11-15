<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class WebContent extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:WebContent";
    }

}
