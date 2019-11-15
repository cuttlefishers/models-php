<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PodcastSeason extends \OpenActive\Models\SchemaOrg\CreativeWorkSeason
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PodcastSeason";
    }

}
