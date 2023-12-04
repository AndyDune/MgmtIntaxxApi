<?php
/**
 * PfsAccount
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
 * Swagger Codegen version: 3.0.50
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
 * PfsAccount Class Doc Comment
 *
 * @category Class
 * @package  AndyDune\MgmtIntaxxApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PfsAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PfsAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'exist' => 'bool',
        'issuingId' => 'string',
        'cardholderId' => 'string',
        'orderId' => 'string',
        'cardStatus' => 'string',
        'cardStatusId' => 'string',
        'initialData' => '\AndyDune\MgmtIntaxxApi\Model\PfsAccountInitialData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'exist' => null,
        'issuingId' => null,
        'cardholderId' => null,
        'orderId' => null,
        'cardStatus' => null,
        'cardStatusId' => null,
        'initialData' => null
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
        'exist' => 'exist',
        'issuingId' => 'issuingId',
        'cardholderId' => 'cardholderId',
        'orderId' => 'orderId',
        'cardStatus' => 'cardStatus',
        'cardStatusId' => 'cardStatusId',
        'initialData' => 'initialData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exist' => 'setExist',
        'issuingId' => 'setIssuingId',
        'cardholderId' => 'setCardholderId',
        'orderId' => 'setOrderId',
        'cardStatus' => 'setCardStatus',
        'cardStatusId' => 'setCardStatusId',
        'initialData' => 'setInitialData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exist' => 'getExist',
        'issuingId' => 'getIssuingId',
        'cardholderId' => 'getCardholderId',
        'orderId' => 'getOrderId',
        'cardStatus' => 'getCardStatus',
        'cardStatusId' => 'getCardStatusId',
        'initialData' => 'getInitialData'
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
        $this->container['exist'] = isset($data['exist']) ? $data['exist'] : null;
        $this->container['issuingId'] = isset($data['issuingId']) ? $data['issuingId'] : null;
        $this->container['cardholderId'] = isset($data['cardholderId']) ? $data['cardholderId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['cardStatus'] = isset($data['cardStatus']) ? $data['cardStatus'] : null;
        $this->container['cardStatusId'] = isset($data['cardStatusId']) ? $data['cardStatusId'] : null;
        $this->container['initialData'] = isset($data['initialData']) ? $data['initialData'] : null;
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
     * Gets exist
     *
     * @return bool
     */
    public function getExist()
    {
        return $this->container['exist'];
    }

    /**
     * Sets exist
     *
     * @param bool $exist exist
     *
     * @return $this
     */
    public function setExist($exist)
    {
        $this->container['exist'] = $exist;

        return $this;
    }

    /**
     * Gets issuingId
     *
     * @return string
     */
    public function getIssuingId()
    {
        return $this->container['issuingId'];
    }

    /**
     * Sets issuingId
     *
     * @param string $issuingId issuingId
     *
     * @return $this
     */
    public function setIssuingId($issuingId)
    {
        $this->container['issuingId'] = $issuingId;

        return $this;
    }

    /**
     * Gets cardholderId
     *
     * @return string
     */
    public function getCardholderId()
    {
        return $this->container['cardholderId'];
    }

    /**
     * Sets cardholderId
     *
     * @param string $cardholderId cardholderId
     *
     * @return $this
     */
    public function setCardholderId($cardholderId)
    {
        $this->container['cardholderId'] = $cardholderId;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets cardStatus
     *
     * @return string
     */
    public function getCardStatus()
    {
        return $this->container['cardStatus'];
    }

    /**
     * Sets cardStatus
     *
     * @param string $cardStatus cardStatus
     *
     * @return $this
     */
    public function setCardStatus($cardStatus)
    {
        $this->container['cardStatus'] = $cardStatus;

        return $this;
    }

    /**
     * Gets cardStatusId
     *
     * @return string
     */
    public function getCardStatusId()
    {
        return $this->container['cardStatusId'];
    }

    /**
     * Sets cardStatusId
     *
     * @param string $cardStatusId cardStatusId
     *
     * @return $this
     */
    public function setCardStatusId($cardStatusId)
    {
        $this->container['cardStatusId'] = $cardStatusId;

        return $this;
    }

    /**
     * Gets initialData
     *
     * @return \AndyDune\MgmtIntaxxApi\Model\PfsAccountInitialData
     */
    public function getInitialData()
    {
        return $this->container['initialData'];
    }

    /**
     * Sets initialData
     *
     * @param \AndyDune\MgmtIntaxxApi\Model\PfsAccountInitialData $initialData initialData
     *
     * @return $this
     */
    public function setInitialData($initialData)
    {
        $this->container['initialData'] = $initialData;

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
