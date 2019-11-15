<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CriticReview extends \OpenActive\Models\SchemaOrg\Review
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CriticReview";
    }

}
