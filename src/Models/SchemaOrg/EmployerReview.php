<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EmployerReview extends \OpenActive\Models\SchemaOrg\Review
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EmployerReview";
    }

}
