<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AnalysisNewsArticle extends \OpenActive\Models\SchemaOrg\NewsArticle
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AnalysisNewsArticle";
    }

}
