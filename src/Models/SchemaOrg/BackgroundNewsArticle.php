<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BackgroundNewsArticle extends \OpenActive\Models\SchemaOrg\NewsArticle
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BackgroundNewsArticle";
    }

}
