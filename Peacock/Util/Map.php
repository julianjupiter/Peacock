<?php
namespace Peacock\Util;

/**
 * Peacock
 * 
 * Peacock is a library for PHP.
 * 
 * This content is released under the GNU General Public License v3.0
 * 
 * Copyright (C) 2015 Julian Jupiter
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * @package Peacock
 * @author Julian Jupiter <julianjupiter.io@gmail.com>
 * @copyright (c) 2015, Julian Jupiter
 * @license http://http://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License v3.0
 * @link https://github.com/julianjupiter/peacock Peacock is a library for PHP. 
 */

/**
 * Peacock Map Class
 * 
 * The Map class maps unique keys to values. A key is an object that you use to retrieve a value at a later date.
 *
 * @package Peacock
 * @subpackage Util
 * @category Util
 * @author Julian Jupiter <julianjupiter.io@gmail.com>
 */
class Map {
    /**
     * Contains elements of the Map object
     * 
     * @var array 
     */
    private $sets = [];
    
    /**
     * clear
     * 
     * The clear() method removes all elements from a Map object. 
     */
    public function clear() {
        $keys = [];
        foreach ($this->keys() as $value) {
            array_push($keys, $value);
        }
        
        foreach ($keys as $value) {
            $this->remove($value);
        }
    }
    
    /**
     * The entries() method returns an array object that contains the [key, value] pairs for each element in the Map object.
     * 
     * @return array
     */
    public function entries() {
        return $this->sets;
    }
    
    /** 
     * The get() method returns a specified element from a Map object.
     * 
     * @param string $key
     * @return string
     */
    public function get($key) {
        return $this->sets[$key];
    }
    
    /**
     * The has() method returns a boolean indicating whether an element with the specified key exists or not.
     * 
     * @param string $key
     * @return boolean
     */
    public function has($key) {
        if (array_key_exists($key, $this->sets)) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * The isEmpty() method returns a boolean indicating whether a Map object contains elements or not.
     * 
     * @return boolean
     */
    public function isEmpty() {
        if ($this->size() == 0) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * The keys() method returns an array object that contains the keys for each element in the Map object.
     * 
     * @return array
     */
    public function keys() {
        return array_keys($this->sets);
    }
    
    /**
     * The remove() method removes the specified element from a Map object.
     * 
     * @param string $key
     */
    public function remove($key) {
        unset($this->sets[$key]);
    }
    
    /**
     * The set() method adds a new element with a specified key and value to a Map object.
     * 
     * @param string $key
     * @param string $value
     */
    public function set($key, $value) {
        $this->sets[$key] = $value;
    }
    
    /**
     * The size() method returns the number of elements in a Map object.
     * 
     * @return int
     */
    public function size() {
        $counter = 0;
        foreach ($this->sets as $key) {
            $counter += 1;
        }
        
        return $counter;
    }
    
    /**
     * The values() method returns an array object that contains the values for each element in the Map object.
     * 
     * @return type
     */
    public function values() {
        return array_values($this->sets);
    }
}
