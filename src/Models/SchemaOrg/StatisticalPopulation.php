<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class StatisticalPopulation extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:StatisticalPopulation";
    }

    /**
     * Indicates the number of constraints (not counting <a class="localLink" href="https://schema.org/populationType">populationType</a>) defined for a particular <a class="localLink" href="https://schema.org/StatisticalPopulation">StatisticalPopulation</a>. This helps applications understand if they have access to a sufficiently complete description of a <a class="localLink" href="https://schema.org/StatisticalPopulation">StatisticalPopulation</a>.
     *
     *
     * @var int|null
     */
    protected $numConstraints;

    /**
     * Indicates a property used as a constraint to define a <a class="localLink" href="https://schema.org/StatisticalPopulation">StatisticalPopulation</a> with respect to the set of entities
     *   corresponding to an indicated type (via <a class="localLink" href="https://schema.org/populationType">populationType</a>).
     *
     *
     * @var int|null
     */
    protected $constrainingProperty;

    /**
     * Indicates the populationType common to all members of a <a class="localLink" href="https://schema.org/StatisticalPopulation">StatisticalPopulation</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Class
     */
    protected $populationType;

    /**
     * @return int|null
     */
    public function getNumConstraints()
    {
        return $this->numConstraints;
    }

    /**
     * @param int|null $numConstraints
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumConstraints($numConstraints)
    {
        $types = array(
            "int",
            "null",
        );

        $numConstraints = self::checkTypes($numConstraints, $types);

        $this->numConstraints = $numConstraints;
    }

    /**
     * @return int|null
     */
    public function getConstrainingProperty()
    {
        return $this->constrainingProperty;
    }

    /**
     * @param int|null $constrainingProperty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setConstrainingProperty($constrainingProperty)
    {
        $types = array(
            "int",
            "null",
        );

        $constrainingProperty = self::checkTypes($constrainingProperty, $types);

        $this->constrainingProperty = $constrainingProperty;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Class
     */
    public function getPopulationType()
    {
        return $this->populationType;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Class $populationType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPopulationType($populationType)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Class",
        );

        $populationType = self::checkTypes($populationType, $types);

        $this->populationType = $populationType;
    }

}
