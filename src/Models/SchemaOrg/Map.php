<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Map extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Map";
    }

    /**
     * Indicates the kind of Map, from the MapCategoryType Enumeration.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\MapCategoryType|null
     */
    protected $mapType;

    /**
     * @return \OpenActive\Enums\SchemaOrg\MapCategoryType|null
     */
    public function getMapType()
    {
        return $this->mapType;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\MapCategoryType|null $mapType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMapType($mapType)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\MapCategoryType",
            "null",
        );

        $mapType = self::checkTypes($mapType, $types);

        $this->mapType = $mapType;
    }

}
