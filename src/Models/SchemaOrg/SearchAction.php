<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SearchAction extends \OpenActive\Models\SchemaOrg\Action
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SearchAction";
    }

    /**
     * A sub property of instrument. The query used on this action.
     *
     *
     * @var string
     */
    protected $query;

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param string $query
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setQuery($query)
    {
        $types = array(
            "string",
        );

        $query = self::checkTypes($query, $types);

        $this->query = $query;
    }

}
