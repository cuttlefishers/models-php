<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReportageNewsArticle extends \OpenActive\Models\SchemaOrg\NewsArticle
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ReportageNewsArticle";
    }

}
