<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CssSelectorType extends \OpenActive\Models\SchemaOrg\Text
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CssSelectorType";
    }

}
