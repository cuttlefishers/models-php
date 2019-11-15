<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OpinionNewsArticle extends \OpenActive\Models\SchemaOrg\NewsArticle
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OpinionNewsArticle";
    }

}
