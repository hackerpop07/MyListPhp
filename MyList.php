<?php


class MyList
{
    const size = 0;
    const DEFAULT_CAPACITY = 10;
    private $array;

    public function __construct($arr = "")
    {
        if (is_array($arr) == true)
            $this->array = $arr;
        else
            $this->array = array();
    }

    function editIndex($index, $value)
    {
        $this->array[$index] = $value;
    }

    function add($index, $value)
    {
        if ($this->isInteger($index)) {
            $newArray = [];
            for ($i = 0; $i < $this->size(); $i++) {
                array_push($newArray, $this->array[$i]);
                if ($i == $index) {
                    array_push($newArray, $value);
                    array_push($newArray, $this->array[$i]);
                }
            }
            $this->array = $newArray;
        } else {
            echo "index la so nguyen";
        }
    }

    function addLast($value)
    {
        array_push($this->array, $value);
    }

    function clear()
    {
        $this->array = [];
    }

    function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArray = [];
            for ($i = 0; $i < count($this->array); $i++) {
                if ($index != $i) {
                    array_push($newArray, $this->array[$i]);
                }
            }
            $this->array = $newArray;
        } else {
            echo "nhap so nguyen";
        }
    }

    function size()
    {
        return count($this->array);
    }

    function cloneArray()
    {
        return implode(",", $this->array);
    }

    function contains($value)
    {
        foreach ($this->array as $valueArray) {
            if ($valueArray == $value) {
                return true;
            }
        }
        return false;
    }

    function indexOf($value)
    {
        foreach ($this->array as $key => $valueArray) {
            if ($valueArray == $value) {
                return $key;
            }
        }
        return -1;
    }


    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->array[$index];
        } else {
            die("ERROR in Array.get");
        }
    }

    function ensureCapacity($number)
    {
        if ($this->isInteger($number)) {
            if (count($this->array) > $number)
                $newArray = [];
            for ($i = 0; $i < count($number); $i++) {
                array_push($newArray, $this->array[$i]);
            }
            $this->array = $newArray;
            echo "array full";
        } else {
            echo "nhap so nguyen";
        }
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}