<?php

/**
 * Deep
 *
 * @package      rsanchez\Deep
 * @author       Rob Sanchez <info@robsanchez.com>
 */

namespace rsanchez\Deep\Model;

use rsanchez\Deep\Model\AbstractProperty;

/**
 * Interface for field models
 */
abstract class AbstractField extends AbstractProperty
{
    /**
     * Get the field short name
     *
     * @return string
     */
    public function getFieldNameAttribute($value)
    {
        return $value;
    }

    /**
     * Get the field ID
     *
     * @return string
     */
    public function getFieldIdAttribute($value)
    {
        return $value;
    }
}
