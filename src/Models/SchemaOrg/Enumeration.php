<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Enumeration extends \OpenActive\BaseModel
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Enumeration";
    }

}
