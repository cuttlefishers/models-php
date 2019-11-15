<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FundingAgency extends \OpenActive\Models\SchemaOrg\Project
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FundingAgency";
    }

}
