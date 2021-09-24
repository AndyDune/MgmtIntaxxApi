<?php
/**
 * KmcDataImages
 *
 * PHP version 5
 *
 * @category Class
 * @package  AndyDune\MgmtIntaxxApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Api mgmt.intaxx
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.11.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.27
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AndyDune\MgmtIntaxxApi\Model;

use \ArrayAccess;
use \AndyDune\MgmtIntaxxApi\ObjectSerializer;

/**
 * KmcDataImages Class Doc Comment
 *
 * @category Class
 * @package  AndyDune\MgmtIntaxxApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KmcDataImages implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KmcDataImages';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'idCardFront' => 'string',
'idCardBack' => 'string',
'powerOfAttorneySign' => 'string',
'powerOfAttorneySignAuto' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'idCardFront' => 'binary',
'idCardBack' => 'binary',
'powerOfAttorneySign' => 'binary',
'powerOfAttorneySignAuto' => 'binary'    ];

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
        'id' => 'id',
'idCardFront' => 'id_card_front',
'idCardBack' => 'id_card_back',
'powerOfAttorneySign' => 'power_of_attorney_sign',
'powerOfAttorneySignAuto' => 'power_of_attorney_sign_auto'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'idCardFront' => 'setIdCardFront',
'idCardBack' => 'setIdCardBack',
'powerOfAttorneySign' => 'setPowerOfAttorneySign',
'powerOfAttorneySignAuto' => 'setPowerOfAttorneySignAuto'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'idCardFront' => 'getIdCardFront',
'idCardBack' => 'getIdCardBack',
'powerOfAttorneySign' => 'getPowerOfAttorneySign',
'powerOfAttorneySignAuto' => 'getPowerOfAttorneySignAuto'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['idCardFront'] = isset($data['idCardFront']) ? $data['idCardFront'] : null;
        $this->container['idCardBack'] = isset($data['idCardBack']) ? $data['idCardBack'] : null;
        $this->container['powerOfAttorneySign'] = isset($data['powerOfAttorneySign']) ? $data['powerOfAttorneySign'] : null;
        $this->container['powerOfAttorneySignAuto'] = isset($data['powerOfAttorneySignAuto']) ? $data['powerOfAttorneySignAuto'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets idCardFront
     *
     * @return string
     */
    public function getIdCardFront()
    {
        return $this->container['idCardFront'];
    }

    /**
     * Sets idCardFront
     *
     * @param string $idCardFront idCardFront
     *
     * @return $this
     */
    public function setIdCardFront($idCardFront)
    {
        $this->container['idCardFront'] = $idCardFront;

        return $this;
    }

    /**
     * Gets idCardBack
     *
     * @return string
     */
    public function getIdCardBack()
    {
        return $this->container['idCardBack'];
    }

    /**
     * Sets idCardBack
     *
     * @param string $idCardBack idCardBack
     *
     * @return $this
     */
    public function setIdCardBack($idCardBack)
    {
        $this->container['idCardBack'] = $idCardBack;

        return $this;
    }

    /**
     * Gets powerOfAttorneySign
     *
     * @return string
     */
    public function getPowerOfAttorneySign()
    {
        return $this->container['powerOfAttorneySign'];
    }

    /**
     * Sets powerOfAttorneySign
     *
     * @param string $powerOfAttorneySign powerOfAttorneySign
     *
     * @return $this
     */
    public function setPowerOfAttorneySign($powerOfAttorneySign)
    {
        $this->container['powerOfAttorneySign'] = $powerOfAttorneySign;

        return $this;
    }

    /**
     * Gets powerOfAttorneySignAuto
     *
     * @return string
     */
    public function getPowerOfAttorneySignAuto()
    {
        return $this->container['powerOfAttorneySignAuto'];
    }

    /**
     * Sets powerOfAttorneySignAuto
     *
     * @param string $powerOfAttorneySignAuto powerOfAttorneySignAuto
     *
     * @return $this
     */
    public function setPowerOfAttorneySignAuto($powerOfAttorneySignAuto)
    {
        $this->container['powerOfAttorneySignAuto'] = $powerOfAttorneySignAuto;

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
