<?php

namespace MattivdWeem\AdvancedObjects\Types;

use MattivdWeem\AdvancedObjects\AdvancedObjects;

class String extends AdvancedObjects{

    /**
     * @var array
     */
    private $value = [];

    /**
     * __constructor
     * @param $value
     */
    public function __construct($value){
        $this->fill($value);
    }

    /**
     * fills the current string array
     * @param $value
     */
    private function fill($value){
        $this->value =  str_split($value);
    }

    /**
     * Receives string output from array string
     * @return string
     */
    public function getString(){

        $res = '';
        foreach($this->value as $char){
            $res.=$char;
        }
        return $res;
    }

    /**
     * Shuffles the current string
     * @return $this
     */
    public function shuffle(){
        $data = $this->value;
        shuffle($data);
        $this->value = $data;
        return $this;
    }

    /**
     * Sorts the current String
     * @return $this
     *
     */
    public function sort(){
        $data = $this->value;
        sort($data);
        $this->value = $data;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString(){
        return $this->getString();
    }
}