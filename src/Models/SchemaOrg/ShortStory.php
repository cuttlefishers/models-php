<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ShortStory extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ShortStory";
    }

}
