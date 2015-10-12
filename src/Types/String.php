<?php

namespace MattivdWeem\AdvancedObjects\Types;

use MattivdWeem\AdvancedObjects\AdvancedObjects;
use MattivdWeem\AdvancedObjects\Exceptions\TypeMatchException;

class String extends AdvancedObjects implements TypeInterface{

    private $value;
    /**
     * __constructor
     * @param $value
     * @throws TypeMatchException
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
     * @param $value
     * @return $this
     */
    public function add($value){
        $this->fill($this->getString().$value);
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function attach($value){
        $this->fill($value.$this->getString());
        return $this;
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
     * @return $this
     */
    public function shift(){
        unset($this->value[0]);
        return $this;
    }

    /**
     * @return $this
     */
    public function pop(){
        unset($this->value[count($this->value) -1 ]);
        return $this;
    }

    /**
     * @param $string
     * @param $replace
     * @return $this
     */
    public function replace($string, $replace){
        $this->fill(str_replace($string, $replace, $this->getString()));
        return $this;
    }


    /**
     * @return string
     */
    public function __toString(){
        return $this->getString();
    }

    /**
     * @return mixed
     */
    public function __toArray(){
        return $this->value;
    }


    /**
     * @return int
     */
    public function length(){
        return count($this->value);
    }

    /**
     * @return array
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param array $value
     * @return mixed|void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

}