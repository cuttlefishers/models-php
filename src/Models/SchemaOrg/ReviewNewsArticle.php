<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReviewNewsArticle extends \OpenActive\Models\SchemaOrg\CriticReview
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ReviewNewsArticle";
    }

}
