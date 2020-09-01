<?php
/**
 * SmsWithBrandTemplate
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
 * OpenAPI spec version: 1.10.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.21
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
 * SmsWithBrandTemplate Class Doc Comment
 *
 * @category Class
 * @package  AndyDune\MgmtIntaxxApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmsWithBrandTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SmsWithBrandTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'templateId' => 'int',
'changePassword' => 'bool',
'changePhoneNumberConfirmCode' => 'bool',
'messageBody' => 'string',
'messageOriginator' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'templateId' => null,
'changePassword' => null,
'changePhoneNumberConfirmCode' => null,
'messageBody' => null,
'messageOriginator' => null    ];

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
'templateId' => 'template_id',
'changePassword' => 'change_password',
'changePhoneNumberConfirmCode' => 'change_phone_number_confirm_code',
'messageBody' => 'message_body',
'messageOriginator' => 'message_originator'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'templateId' => 'setTemplateId',
'changePassword' => 'setChangePassword',
'changePhoneNumberConfirmCode' => 'setChangePhoneNumberConfirmCode',
'messageBody' => 'setMessageBody',
'messageOriginator' => 'setMessageOriginator'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'templateId' => 'getTemplateId',
'changePassword' => 'getChangePassword',
'changePhoneNumberConfirmCode' => 'getChangePhoneNumberConfirmCode',
'messageBody' => 'getMessageBody',
'messageOriginator' => 'getMessageOriginator'    ];

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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['changePassword'] = isset($data['changePassword']) ? $data['changePassword'] : false;
        $this->container['changePhoneNumberConfirmCode'] = isset($data['changePhoneNumberConfirmCode']) ? $data['changePhoneNumberConfirmCode'] : false;
        $this->container['messageBody'] = isset($data['messageBody']) ? $data['messageBody'] : null;
        $this->container['messageOriginator'] = isset($data['messageOriginator']) ? $data['messageOriginator'] : null;
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
     * Gets templateId
     *
     * @return int
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     *
     * @param int $templateId templateId
     *
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets changePassword
     *
     * @return bool
     */
    public function getChangePassword()
    {
        return $this->container['changePassword'];
    }

    /**
     * Sets changePassword
     *
     * @param bool $changePassword changePassword
     *
     * @return $this
     */
    public function setChangePassword($changePassword)
    {
        $this->container['changePassword'] = $changePassword;

        return $this;
    }

    /**
     * Gets changePhoneNumberConfirmCode
     *
     * @return bool
     */
    public function getChangePhoneNumberConfirmCode()
    {
        return $this->container['changePhoneNumberConfirmCode'];
    }

    /**
     * Sets changePhoneNumberConfirmCode
     *
     * @param bool $changePhoneNumberConfirmCode changePhoneNumberConfirmCode
     *
     * @return $this
     */
    public function setChangePhoneNumberConfirmCode($changePhoneNumberConfirmCode)
    {
        $this->container['changePhoneNumberConfirmCode'] = $changePhoneNumberConfirmCode;

        return $this;
    }

    /**
     * Gets messageBody
     *
     * @return string
     */
    public function getMessageBody()
    {
        return $this->container['messageBody'];
    }

    /**
     * Sets messageBody
     *
     * @param string $messageBody messageBody
     *
     * @return $this
     */
    public function setMessageBody($messageBody)
    {
        $this->container['messageBody'] = $messageBody;

        return $this;
    }

    /**
     * Gets messageOriginator
     *
     * @return string
     */
    public function getMessageOriginator()
    {
        return $this->container['messageOriginator'];
    }

    /**
     * Sets messageOriginator
     *
     * @param string $messageOriginator messageOriginator
     *
     * @return $this
     */
    public function setMessageOriginator($messageOriginator)
    {
        $this->container['messageOriginator'] = $messageOriginator;

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
