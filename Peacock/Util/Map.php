<?php
namespace Peacock\Util;

/**
 * The Map class maps unique keys to values. A key is an object that you use to retrieve a value at a later date.
 *
 * @author Julian Jupiter
 */
class Map {
    private $sets = [];
    
    public function clear() {
        $keys = [];
        foreach ($this->keys() as $value) {
            array_push($keys, $value);
        }
        
        foreach ($keys as $value) {
            $this->remove($value);
        }
    }
    
    public function entries() {
        return $this->sets;
    }
    
    public function get($key) {
        return $this->sets[$key];
    }
    
    public function has($key) {
        if (array_key_exists($key, $this->sets)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function isEmpty() {
        if ($this->size() == 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function keys() {
        return array_keys($this->sets);
    }
    
    public function remove($key) {
        unset($this->sets[$key]);
    }
    
    public function set($key, $value) {
        $this->sets[$key] = $value;
    }
    
    public function size() {
        $counter = 0;
        foreach ($this->sets as $key) {
            $counter += 1;
        }
        
        return $counter;
    }
    
    public function values() {
        return array_values($this->sets);
    }
}