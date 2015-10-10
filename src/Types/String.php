<?php

namespace MattivdWeem\AdvancedObjects\Types;

use MattivdWeem\AdvancedObjects\AdvancedObjects;
use MattivdWeem\AdvancedObjects\Exceptions\TypeMatchException;

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
        if (!is_string($value)) {
            throw new TypeMatchException(gettype($value),'String');
        }
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
     * @param string $mode
     * @return $this
     */
    public function sort($mode = '>'){
        $data = $this->value;

        if ($mode === '<' || strtoupper($mode) === 'DESC') {
            rsort($data);
        } else {
            sort($data);
        }

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