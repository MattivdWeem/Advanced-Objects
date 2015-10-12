<?php

namespace MattivdWeem\AdvancedObjects\Types;

interface TypeInterface {

    /**
     * @param $value
     */
    public function __construct($value);

    /**
     * @param $value
     * @return mixed
     */
    public function setValue($value);

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @return string
     */
    public function __toString();

    /**
     * @return int
     */
    public function length();

}