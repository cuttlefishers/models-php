<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VisualArtsEvent extends \OpenActive\Models\SchemaOrg\Event
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:VisualArtsEvent";
    }

}
