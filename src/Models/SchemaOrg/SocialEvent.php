<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SocialEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SocialEvent";
    }

}
