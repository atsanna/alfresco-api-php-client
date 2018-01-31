<?php
/**
 * RequestFacetIntervals
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfresco
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Alfresco Content Services REST API
 *
 * **API**  Provides access to the features of Alfresco Content Services.
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Alfresco\Model;

use \ArrayAccess;

/**
 * RequestFacetIntervals Class Doc Comment
 *
 * @category    Class
 * @description Facet Intervals
 * @package     Alfresco
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RequestFacetIntervals implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RequestFacetIntervals';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sets' => '\Alfresco\Model\RequestFacetSet[]',
        'intervals' => '\Alfresco\Model\RequestFacetIntervalsIntervals[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sets' => null,
        'intervals' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'sets' => 'sets',
        'intervals' => 'intervals'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'sets' => 'setSets',
        'intervals' => 'setIntervals'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'sets' => 'getSets',
        'intervals' => 'getIntervals'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['sets'] = isset($data['sets']) ? $data['sets'] : null;
        $this->container['intervals'] = isset($data['intervals']) ? $data['intervals'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets sets
     * @return \Alfresco\Model\RequestFacetSet[]
     */
    public function getSets()
    {
        return $this->container['sets'];
    }

    /**
     * Sets sets
     * @param \Alfresco\Model\RequestFacetSet[] $sets Sets the intervals for all fields.
     * @return $this
     */
    public function setSets($sets)
    {
        $this->container['sets'] = $sets;

        return $this;
    }

    /**
     * Gets intervals
     * @return \Alfresco\Model\RequestFacetIntervalsIntervals[]
     */
    public function getIntervals()
    {
        return $this->container['intervals'];
    }

    /**
     * Sets intervals
     * @param \Alfresco\Model\RequestFacetIntervalsIntervals[] $intervals Specifies the fields to facet by interval.
     * @return $this
     */
    public function setIntervals($intervals)
    {
        $this->container['intervals'] = $intervals;

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
            return json_encode(\Alfresco\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Alfresco\ObjectSerializer::sanitizeForSerialization($this));
    }
}


