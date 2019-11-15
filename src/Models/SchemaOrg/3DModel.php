<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ThreeDModel extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:3DModel";
    }

}
