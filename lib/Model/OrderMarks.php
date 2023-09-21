<?php
/**
 * OrderMarks
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
 * Swagger Codegen version: 3.0.46
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
 * OrderMarks Class Doc Comment
 *
 * @category Class
 * @description Order marks or flags
 * @package  AndyDune\MgmtIntaxxApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderMarks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderMarks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isEmailConfirmed' => 'bool',
        'isSmsConfirmedByHash' => 'bool',
        'isSmsConfirmedByCode' => 'bool',
        'isOrderLikedToCollector' => 'bool',
        'isOrderExported' => 'bool',
        'isSelfieLoaded' => 'bool',
        'isSignatureLoaded' => 'bool',
        'isIdCardFrontLoaded' => 'bool',
        'isIdCardBackLoaded' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isEmailConfirmed' => null,
        'isSmsConfirmedByHash' => null,
        'isSmsConfirmedByCode' => null,
        'isOrderLikedToCollector' => null,
        'isOrderExported' => null,
        'isSelfieLoaded' => null,
        'isSignatureLoaded' => null,
        'isIdCardFrontLoaded' => null,
        'isIdCardBackLoaded' => null
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
        'isEmailConfirmed' => 'is_email_confirmed',
        'isSmsConfirmedByHash' => 'is_sms_confirmed_by_hash',
        'isSmsConfirmedByCode' => 'is_sms_confirmed_by_code',
        'isOrderLikedToCollector' => 'is_order_liked_to_collector',
        'isOrderExported' => 'is_order_exported',
        'isSelfieLoaded' => 'is_selfie_loaded',
        'isSignatureLoaded' => 'is_signature_loaded',
        'isIdCardFrontLoaded' => 'is_id_card_front_loaded',
        'isIdCardBackLoaded' => 'is_id_card_back_loaded'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isEmailConfirmed' => 'setIsEmailConfirmed',
        'isSmsConfirmedByHash' => 'setIsSmsConfirmedByHash',
        'isSmsConfirmedByCode' => 'setIsSmsConfirmedByCode',
        'isOrderLikedToCollector' => 'setIsOrderLikedToCollector',
        'isOrderExported' => 'setIsOrderExported',
        'isSelfieLoaded' => 'setIsSelfieLoaded',
        'isSignatureLoaded' => 'setIsSignatureLoaded',
        'isIdCardFrontLoaded' => 'setIsIdCardFrontLoaded',
        'isIdCardBackLoaded' => 'setIsIdCardBackLoaded'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isEmailConfirmed' => 'getIsEmailConfirmed',
        'isSmsConfirmedByHash' => 'getIsSmsConfirmedByHash',
        'isSmsConfirmedByCode' => 'getIsSmsConfirmedByCode',
        'isOrderLikedToCollector' => 'getIsOrderLikedToCollector',
        'isOrderExported' => 'getIsOrderExported',
        'isSelfieLoaded' => 'getIsSelfieLoaded',
        'isSignatureLoaded' => 'getIsSignatureLoaded',
        'isIdCardFrontLoaded' => 'getIsIdCardFrontLoaded',
        'isIdCardBackLoaded' => 'getIsIdCardBackLoaded'
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
        $this->container['isEmailConfirmed'] = isset($data['isEmailConfirmed']) ? $data['isEmailConfirmed'] : null;
        $this->container['isSmsConfirmedByHash'] = isset($data['isSmsConfirmedByHash']) ? $data['isSmsConfirmedByHash'] : null;
        $this->container['isSmsConfirmedByCode'] = isset($data['isSmsConfirmedByCode']) ? $data['isSmsConfirmedByCode'] : null;
        $this->container['isOrderLikedToCollector'] = isset($data['isOrderLikedToCollector']) ? $data['isOrderLikedToCollector'] : null;
        $this->container['isOrderExported'] = isset($data['isOrderExported']) ? $data['isOrderExported'] : null;
        $this->container['isSelfieLoaded'] = isset($data['isSelfieLoaded']) ? $data['isSelfieLoaded'] : null;
        $this->container['isSignatureLoaded'] = isset($data['isSignatureLoaded']) ? $data['isSignatureLoaded'] : null;
        $this->container['isIdCardFrontLoaded'] = isset($data['isIdCardFrontLoaded']) ? $data['isIdCardFrontLoaded'] : null;
        $this->container['isIdCardBackLoaded'] = isset($data['isIdCardBackLoaded']) ? $data['isIdCardBackLoaded'] : null;
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
     * Gets isEmailConfirmed
     *
     * @return bool
     */
    public function getIsEmailConfirmed()
    {
        return $this->container['isEmailConfirmed'];
    }

    /**
     * Sets isEmailConfirmed
     *
     * @param bool $isEmailConfirmed isEmailConfirmed
     *
     * @return $this
     */
    public function setIsEmailConfirmed($isEmailConfirmed)
    {
        $this->container['isEmailConfirmed'] = $isEmailConfirmed;

        return $this;
    }

    /**
     * Gets isSmsConfirmedByHash
     *
     * @return bool
     */
    public function getIsSmsConfirmedByHash()
    {
        return $this->container['isSmsConfirmedByHash'];
    }

    /**
     * Sets isSmsConfirmedByHash
     *
     * @param bool $isSmsConfirmedByHash isSmsConfirmedByHash
     *
     * @return $this
     */
    public function setIsSmsConfirmedByHash($isSmsConfirmedByHash)
    {
        $this->container['isSmsConfirmedByHash'] = $isSmsConfirmedByHash;

        return $this;
    }

    /**
     * Gets isSmsConfirmedByCode
     *
     * @return bool
     */
    public function getIsSmsConfirmedByCode()
    {
        return $this->container['isSmsConfirmedByCode'];
    }

    /**
     * Sets isSmsConfirmedByCode
     *
     * @param bool $isSmsConfirmedByCode isSmsConfirmedByCode
     *
     * @return $this
     */
    public function setIsSmsConfirmedByCode($isSmsConfirmedByCode)
    {
        $this->container['isSmsConfirmedByCode'] = $isSmsConfirmedByCode;

        return $this;
    }

    /**
     * Gets isOrderLikedToCollector
     *
     * @return bool
     */
    public function getIsOrderLikedToCollector()
    {
        return $this->container['isOrderLikedToCollector'];
    }

    /**
     * Sets isOrderLikedToCollector
     *
     * @param bool $isOrderLikedToCollector isOrderLikedToCollector
     *
     * @return $this
     */
    public function setIsOrderLikedToCollector($isOrderLikedToCollector)
    {
        $this->container['isOrderLikedToCollector'] = $isOrderLikedToCollector;

        return $this;
    }

    /**
     * Gets isOrderExported
     *
     * @return bool
     */
    public function getIsOrderExported()
    {
        return $this->container['isOrderExported'];
    }

    /**
     * Sets isOrderExported
     *
     * @param bool $isOrderExported isOrderExported
     *
     * @return $this
     */
    public function setIsOrderExported($isOrderExported)
    {
        $this->container['isOrderExported'] = $isOrderExported;

        return $this;
    }

    /**
     * Gets isSelfieLoaded
     *
     * @return bool
     */
    public function getIsSelfieLoaded()
    {
        return $this->container['isSelfieLoaded'];
    }

    /**
     * Sets isSelfieLoaded
     *
     * @param bool $isSelfieLoaded isSelfieLoaded
     *
     * @return $this
     */
    public function setIsSelfieLoaded($isSelfieLoaded)
    {
        $this->container['isSelfieLoaded'] = $isSelfieLoaded;

        return $this;
    }

    /**
     * Gets isSignatureLoaded
     *
     * @return bool
     */
    public function getIsSignatureLoaded()
    {
        return $this->container['isSignatureLoaded'];
    }

    /**
     * Sets isSignatureLoaded
     *
     * @param bool $isSignatureLoaded isSignatureLoaded
     *
     * @return $this
     */
    public function setIsSignatureLoaded($isSignatureLoaded)
    {
        $this->container['isSignatureLoaded'] = $isSignatureLoaded;

        return $this;
    }

    /**
     * Gets isIdCardFrontLoaded
     *
     * @return bool
     */
    public function getIsIdCardFrontLoaded()
    {
        return $this->container['isIdCardFrontLoaded'];
    }

    /**
     * Sets isIdCardFrontLoaded
     *
     * @param bool $isIdCardFrontLoaded isIdCardFrontLoaded
     *
     * @return $this
     */
    public function setIsIdCardFrontLoaded($isIdCardFrontLoaded)
    {
        $this->container['isIdCardFrontLoaded'] = $isIdCardFrontLoaded;

        return $this;
    }

    /**
     * Gets isIdCardBackLoaded
     *
     * @return bool
     */
    public function getIsIdCardBackLoaded()
    {
        return $this->container['isIdCardBackLoaded'];
    }

    /**
     * Sets isIdCardBackLoaded
     *
     * @param bool $isIdCardBackLoaded isIdCardBackLoaded
     *
     * @return $this
     */
    public function setIsIdCardBackLoaded($isIdCardBackLoaded)
    {
        $this->container['isIdCardBackLoaded'] = $isIdCardBackLoaded;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
