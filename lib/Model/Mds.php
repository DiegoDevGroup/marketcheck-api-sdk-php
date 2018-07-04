<?php
/**
 * Mds
 *
 * PHP version 5
 *
 * @category Class
 * @package  marketcheck\api\sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketcheck Cars API
 *
 * <b>Access the New, Used and Certified cars inventories for all Car Dealers in US.</b> <br/>The data is sourced from online listings by over 44,000 Car dealers in US. At any time, there are about 6.2M searchable listings (about 1.9M unique VINs) for Used & Certified cars and about 6.6M (about 3.9M unique VINs) New Car listings from all over US. We use this API at the back for our website <a href='https://www.marketcheck.com' target='_blank'>www.marketcheck.com</a> and our Android and iOS mobile apps too.<br/><h5> Few useful links : </h5><ul><li>A quick view of the API and the use cases is depicated <a href='https://portals.marketcheck.com/mcapi/' target='_blank'>here</a></li><li>The Postman collection with various usages of the API is shared here https://www.getpostman.com/collections/2752684ff636cdd7bac2</li></ul>
 *
 * OpenAPI spec version: 1.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace marketcheck\api\sdk\Model;

use \ArrayAccess;
use \marketcheck\api\sdk\ObjectSerializer;

/**
 * Mds Class Doc Comment
 *
 * @category Class
 * @description Describes Market days supply results for year make model trim combination
 * @package  marketcheck\api\sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Mds implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Mds';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mds' => 'float',
        'total_active_cars_for_ymmt' => 'float',
        'total_cars_sold_in_last_45_days' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mds' => null,
        'total_active_cars_for_ymmt' => null,
        'total_cars_sold_in_last_45_days' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'mds' => 'mds',
        'total_active_cars_for_ymmt' => 'total_active_cars_for_ymmt',
        'total_cars_sold_in_last_45_days' => 'total_cars_sold_in_last_45_days'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mds' => 'setMds',
        'total_active_cars_for_ymmt' => 'setTotalActiveCarsForYmmt',
        'total_cars_sold_in_last_45_days' => 'setTotalCarsSoldInLast45Days'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mds' => 'getMds',
        'total_active_cars_for_ymmt' => 'getTotalActiveCarsForYmmt',
        'total_cars_sold_in_last_45_days' => 'getTotalCarsSoldInLast45Days'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['mds'] = isset($data['mds']) ? $data['mds'] : null;
        $this->container['total_active_cars_for_ymmt'] = isset($data['total_active_cars_for_ymmt']) ? $data['total_active_cars_for_ymmt'] : null;
        $this->container['total_cars_sold_in_last_45_days'] = isset($data['total_cars_sold_in_last_45_days']) ? $data['total_cars_sold_in_last_45_days'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets mds
     *
     * @return float
     */
    public function getMds()
    {
        return $this->container['mds'];
    }

    /**
     * Sets mds
     *
     * @param float $mds Provides Market days supply count
     *
     * @return $this
     */
    public function setMds($mds)
    {
        $this->container['mds'] = $mds;

        return $this;
    }

    /**
     * Gets total_active_cars_for_ymmt
     *
     * @return float
     */
    public function getTotalActiveCarsForYmmt()
    {
        return $this->container['total_active_cars_for_ymmt'];
    }

    /**
     * Sets total_active_cars_for_ymmt
     *
     * @param float $total_active_cars_for_ymmt Active cars for ymmt combination
     *
     * @return $this
     */
    public function setTotalActiveCarsForYmmt($total_active_cars_for_ymmt)
    {
        $this->container['total_active_cars_for_ymmt'] = $total_active_cars_for_ymmt;

        return $this;
    }

    /**
     * Gets total_cars_sold_in_last_45_days
     *
     * @return float
     */
    public function getTotalCarsSoldInLast45Days()
    {
        return $this->container['total_cars_sold_in_last_45_days'];
    }

    /**
     * Sets total_cars_sold_in_last_45_days
     *
     * @param float $total_cars_sold_in_last_45_days Cars sold in last 45 days
     *
     * @return $this
     */
    public function setTotalCarsSoldInLast45Days($total_cars_sold_in_last_45_days)
    {
        $this->container['total_cars_sold_in_last_45_days'] = $total_cars_sold_in_last_45_days;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

