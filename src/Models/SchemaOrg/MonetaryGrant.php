<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MonetaryGrant extends \OpenActive\Models\SchemaOrg\Grant
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MonetaryGrant";
    }

}
