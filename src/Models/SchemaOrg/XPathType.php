<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class XPathType extends \OpenActive\Models\SchemaOrg\Text
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:XPathType";
    }

}
