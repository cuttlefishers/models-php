<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Barcode extends \OpenActive\Models\SchemaOrg\ImageObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Barcode";
    }

}
