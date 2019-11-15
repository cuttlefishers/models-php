<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PodcastEpisode extends \OpenActive\Models\SchemaOrg\Episode
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PodcastEpisode";
    }

}
