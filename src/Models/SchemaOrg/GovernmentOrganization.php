<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GovernmentOrganization extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GovernmentOrganization";
    }

}
