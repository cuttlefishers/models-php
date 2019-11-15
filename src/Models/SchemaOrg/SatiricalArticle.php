<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SatiricalArticle extends \OpenActive\Models\SchemaOrg\Article
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SatiricalArticle";
    }

}
