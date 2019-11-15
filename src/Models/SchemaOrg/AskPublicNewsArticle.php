<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AskPublicNewsArticle extends \OpenActive\Models\SchemaOrg\NewsArticle
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AskPublicNewsArticle";
    }

}
