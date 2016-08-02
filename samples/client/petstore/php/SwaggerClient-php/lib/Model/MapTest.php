<?php
/**
 * MapTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * MapTest Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MapTest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MapTest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'map_map_of_string' => 'map[string,map[string,string]]',
        'map_of_enum_string' => 'map[string,string]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'map_map_of_string' => 'map_map_of_string',
        'map_of_enum_string' => 'map_of_enum_string'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'map_map_of_string' => 'setMapMapOfString',
        'map_of_enum_string' => 'setMapOfEnumString'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'map_map_of_string' => 'getMapMapOfString',
        'map_of_enum_string' => 'getMapOfEnumString'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const map[string,string]_UPPER = 'UPPER';
    const map[string,string]_LOWER = 'lower';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMapOfEnumStringAllowableValues()
    {
        return [
            self::map[string,string]_UPPER,
            self::map[string,string]_LOWER,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['map_map_of_string'] = isset($data['map_map_of_string']) ? $data['map_map_of_string'] : null;
        $this->container['map_of_enum_string'] = isset($data['map_of_enum_string']) ? $data['map_of_enum_string'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets map_map_of_string
     * @return map[string,map[string,string]]
     */
    public function getMapMapOfString()
    {
        return $this->container['map_map_of_string'];
    }

    /**
     * Sets map_map_of_string
     * @param map[string,map[string,string]] $map_map_of_string
     * @return $this
     */
    public function setMapMapOfString($map_map_of_string)
    {
        $this->container['map_map_of_string'] = $map_map_of_string;

        return $this;
    }

    /**
     * Gets map_of_enum_string
     * @return map[string,string]
     */
    public function getMapOfEnumString()
    {
        return $this->container['map_of_enum_string'];
    }

    /**
     * Sets map_of_enum_string
     * @param map[string,string] $map_of_enum_string
     * @return $this
     */
    public function setMapOfEnumString($map_of_enum_string)
    {
        $allowed_values = array('UPPER', 'lower');
        if (!in_array($map_of_enum_string, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'map_of_enum_string', must be one of 'UPPER', 'lower'");
        }
        $this->container['map_of_enum_string'] = $map_of_enum_string;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


