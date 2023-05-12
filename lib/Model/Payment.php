<?php
/**
 * Payment
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
 * Swagger Codegen version: 3.0.42
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
 * Payment Class Doc Comment
 *
 * @category Class
 * @package  AndyDune\MgmtIntaxxApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Payment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'sum' => 'float',
'isPaid' => 'bool',
'status' => 'string',
'urlCheckout' => 'string',
'urlRedirect' => 'string',
'statusExternal' => 'string',
'idExternal' => 'string',
'datetimeCreate' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'sum' => null,
'isPaid' => null,
'status' => null,
'urlCheckout' => null,
'urlRedirect' => null,
'statusExternal' => null,
'idExternal' => null,
'datetimeCreate' => null    ];

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
'sum' => 'sum',
'isPaid' => 'is_paid',
'status' => 'status',
'urlCheckout' => 'url_checkout',
'urlRedirect' => 'url_redirect',
'statusExternal' => 'status_external',
'idExternal' => 'id_external',
'datetimeCreate' => 'datetime_create'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'sum' => 'setSum',
'isPaid' => 'setIsPaid',
'status' => 'setStatus',
'urlCheckout' => 'setUrlCheckout',
'urlRedirect' => 'setUrlRedirect',
'statusExternal' => 'setStatusExternal',
'idExternal' => 'setIdExternal',
'datetimeCreate' => 'setDatetimeCreate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'sum' => 'getSum',
'isPaid' => 'getIsPaid',
'status' => 'getStatus',
'urlCheckout' => 'getUrlCheckout',
'urlRedirect' => 'getUrlRedirect',
'statusExternal' => 'getStatusExternal',
'idExternal' => 'getIdExternal',
'datetimeCreate' => 'getDatetimeCreate'    ];

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
        $this->container['sum'] = isset($data['sum']) ? $data['sum'] : null;
        $this->container['isPaid'] = isset($data['isPaid']) ? $data['isPaid'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['urlCheckout'] = isset($data['urlCheckout']) ? $data['urlCheckout'] : null;
        $this->container['urlRedirect'] = isset($data['urlRedirect']) ? $data['urlRedirect'] : null;
        $this->container['statusExternal'] = isset($data['statusExternal']) ? $data['statusExternal'] : null;
        $this->container['idExternal'] = isset($data['idExternal']) ? $data['idExternal'] : null;
        $this->container['datetimeCreate'] = isset($data['datetimeCreate']) ? $data['datetimeCreate'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sum
     *
     * @return float
     */
    public function getSum()
    {
        return $this->container['sum'];
    }

    /**
     * Sets sum
     *
     * @param float $sum sum
     *
     * @return $this
     */
    public function setSum($sum)
    {
        $this->container['sum'] = $sum;

        return $this;
    }

    /**
     * Gets isPaid
     *
     * @return bool
     */
    public function getIsPaid()
    {
        return $this->container['isPaid'];
    }

    /**
     * Sets isPaid
     *
     * @param bool $isPaid isPaid
     *
     * @return $this
     */
    public function setIsPaid($isPaid)
    {
        $this->container['isPaid'] = $isPaid;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets urlCheckout
     *
     * @return string
     */
    public function getUrlCheckout()
    {
        return $this->container['urlCheckout'];
    }

    /**
     * Sets urlCheckout
     *
     * @param string $urlCheckout urlCheckout
     *
     * @return $this
     */
    public function setUrlCheckout($urlCheckout)
    {
        $this->container['urlCheckout'] = $urlCheckout;

        return $this;
    }

    /**
     * Gets urlRedirect
     *
     * @return string
     */
    public function getUrlRedirect()
    {
        return $this->container['urlRedirect'];
    }

    /**
     * Sets urlRedirect
     *
     * @param string $urlRedirect urlRedirect
     *
     * @return $this
     */
    public function setUrlRedirect($urlRedirect)
    {
        $this->container['urlRedirect'] = $urlRedirect;

        return $this;
    }

    /**
     * Gets statusExternal
     *
     * @return string
     */
    public function getStatusExternal()
    {
        return $this->container['statusExternal'];
    }

    /**
     * Sets statusExternal
     *
     * @param string $statusExternal statusExternal
     *
     * @return $this
     */
    public function setStatusExternal($statusExternal)
    {
        $this->container['statusExternal'] = $statusExternal;

        return $this;
    }

    /**
     * Gets idExternal
     *
     * @return string
     */
    public function getIdExternal()
    {
        return $this->container['idExternal'];
    }

    /**
     * Sets idExternal
     *
     * @param string $idExternal idExternal
     *
     * @return $this
     */
    public function setIdExternal($idExternal)
    {
        $this->container['idExternal'] = $idExternal;

        return $this;
    }

    /**
     * Gets datetimeCreate
     *
     * @return string
     */
    public function getDatetimeCreate()
    {
        return $this->container['datetimeCreate'];
    }

    /**
     * Sets datetimeCreate
     *
     * @param string $datetimeCreate datetimeCreate
     *
     * @return $this
     */
    public function setDatetimeCreate($datetimeCreate)
    {
        $this->container['datetimeCreate'] = $datetimeCreate;

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
