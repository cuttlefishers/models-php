<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class UserReview extends \OpenActive\Models\SchemaOrg\Review
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:UserReview";
    }

}
