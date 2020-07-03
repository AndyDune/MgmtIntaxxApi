<?php
/**
 * Order
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
 * Swagger Codegen version: 3.0.19
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
 * Order Class Doc Comment
 *
 * @category Class
 * @description Order customar details.
 * @package  AndyDune\MgmtIntaxxApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'email' => 'string',
'firstName' => 'string',
'lastName' => 'string',
'gender' => 'string',
'birthday' => '\DateTime',
'phone' => 'string',
'countryCode' => 'string',
'countryName' => 'string',
'city' => 'string',
'street' => 'string',
'house' => 'string',
'room' => 'string',
'state' => 'string',
'zip' => 'string',
'items' => '\AndyDune\MgmtIntaxxApi\Model\OrderItem[]',
'ip' => 'string',
'userAgent' => 'string',
'domain' => 'string',
'cookie' => 'map[string,object]',
'creditRequestInfo' => '\AndyDune\MgmtIntaxxApi\Model\CreditRequestInfo',
'utmSource' => 'string',
'utmContent' => 'string',
'utmCampaign' => 'string',
'utmMedium' => 'string',
'isInsurance' => 'bool',
'middleName' => 'string',
'anotherSurname' => 'string',
'anotherEmail' => 'string',
'landlinePhoneNumber' => 'string',
'isDataConfirmed' => 'bool',
'pfsId' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'email' => 'email',
'firstName' => null,
'lastName' => null,
'gender' => null,
'birthday' => 'date',
'phone' => null,
'countryCode' => null,
'countryName' => null,
'city' => null,
'street' => null,
'house' => null,
'room' => null,
'state' => null,
'zip' => null,
'items' => null,
'ip' => null,
'userAgent' => null,
'domain' => null,
'cookie' => null,
'creditRequestInfo' => null,
'utmSource' => null,
'utmContent' => null,
'utmCampaign' => null,
'utmMedium' => null,
'isInsurance' => null,
'middleName' => null,
'anotherSurname' => null,
'anotherEmail' => null,
'landlinePhoneNumber' => null,
'isDataConfirmed' => null,
'pfsId' => null    ];

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
'email' => 'email',
'firstName' => 'first_name',
'lastName' => 'last_name',
'gender' => 'gender',
'birthday' => 'birthday',
'phone' => 'phone',
'countryCode' => 'country_code',
'countryName' => 'country_name',
'city' => 'city',
'street' => 'street',
'house' => 'house',
'room' => 'room',
'state' => 'state',
'zip' => 'zip',
'items' => 'items',
'ip' => 'ip',
'userAgent' => 'user_agent',
'domain' => 'domain',
'cookie' => 'cookie',
'creditRequestInfo' => 'credit_request_info',
'utmSource' => 'utm_source',
'utmContent' => 'utm_content',
'utmCampaign' => 'utm_campaign',
'utmMedium' => 'utm_medium',
'isInsurance' => 'is_insurance',
'middleName' => 'middle_name',
'anotherSurname' => 'another_surname',
'anotherEmail' => 'another_email',
'landlinePhoneNumber' => 'landline_phone_number',
'isDataConfirmed' => 'is_data_confirmed',
'pfsId' => 'pfs_id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'email' => 'setEmail',
'firstName' => 'setFirstName',
'lastName' => 'setLastName',
'gender' => 'setGender',
'birthday' => 'setBirthday',
'phone' => 'setPhone',
'countryCode' => 'setCountryCode',
'countryName' => 'setCountryName',
'city' => 'setCity',
'street' => 'setStreet',
'house' => 'setHouse',
'room' => 'setRoom',
'state' => 'setState',
'zip' => 'setZip',
'items' => 'setItems',
'ip' => 'setIp',
'userAgent' => 'setUserAgent',
'domain' => 'setDomain',
'cookie' => 'setCookie',
'creditRequestInfo' => 'setCreditRequestInfo',
'utmSource' => 'setUtmSource',
'utmContent' => 'setUtmContent',
'utmCampaign' => 'setUtmCampaign',
'utmMedium' => 'setUtmMedium',
'isInsurance' => 'setIsInsurance',
'middleName' => 'setMiddleName',
'anotherSurname' => 'setAnotherSurname',
'anotherEmail' => 'setAnotherEmail',
'landlinePhoneNumber' => 'setLandlinePhoneNumber',
'isDataConfirmed' => 'setIsDataConfirmed',
'pfsId' => 'setPfsId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'email' => 'getEmail',
'firstName' => 'getFirstName',
'lastName' => 'getLastName',
'gender' => 'getGender',
'birthday' => 'getBirthday',
'phone' => 'getPhone',
'countryCode' => 'getCountryCode',
'countryName' => 'getCountryName',
'city' => 'getCity',
'street' => 'getStreet',
'house' => 'getHouse',
'room' => 'getRoom',
'state' => 'getState',
'zip' => 'getZip',
'items' => 'getItems',
'ip' => 'getIp',
'userAgent' => 'getUserAgent',
'domain' => 'getDomain',
'cookie' => 'getCookie',
'creditRequestInfo' => 'getCreditRequestInfo',
'utmSource' => 'getUtmSource',
'utmContent' => 'getUtmContent',
'utmCampaign' => 'getUtmCampaign',
'utmMedium' => 'getUtmMedium',
'isInsurance' => 'getIsInsurance',
'middleName' => 'getMiddleName',
'anotherSurname' => 'getAnotherSurname',
'anotherEmail' => 'getAnotherEmail',
'landlinePhoneNumber' => 'getLandlinePhoneNumber',
'isDataConfirmed' => 'getIsDataConfirmed',
'pfsId' => 'getPfsId'    ];

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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['birthday'] = isset($data['birthday']) ? $data['birthday'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
        $this->container['countryName'] = isset($data['countryName']) ? $data['countryName'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['house'] = isset($data['house']) ? $data['house'] : null;
        $this->container['room'] = isset($data['room']) ? $data['room'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['userAgent'] = isset($data['userAgent']) ? $data['userAgent'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['cookie'] = isset($data['cookie']) ? $data['cookie'] : null;
        $this->container['creditRequestInfo'] = isset($data['creditRequestInfo']) ? $data['creditRequestInfo'] : null;
        $this->container['utmSource'] = isset($data['utmSource']) ? $data['utmSource'] : null;
        $this->container['utmContent'] = isset($data['utmContent']) ? $data['utmContent'] : null;
        $this->container['utmCampaign'] = isset($data['utmCampaign']) ? $data['utmCampaign'] : null;
        $this->container['utmMedium'] = isset($data['utmMedium']) ? $data['utmMedium'] : null;
        $this->container['isInsurance'] = isset($data['isInsurance']) ? $data['isInsurance'] : null;
        $this->container['middleName'] = isset($data['middleName']) ? $data['middleName'] : null;
        $this->container['anotherSurname'] = isset($data['anotherSurname']) ? $data['anotherSurname'] : null;
        $this->container['anotherEmail'] = isset($data['anotherEmail']) ? $data['anotherEmail'] : null;
        $this->container['landlinePhoneNumber'] = isset($data['landlinePhoneNumber']) ? $data['landlinePhoneNumber'] : null;
        $this->container['isDataConfirmed'] = isset($data['isDataConfirmed']) ? $data['isDataConfirmed'] : null;
        $this->container['pfsId'] = isset($data['pfsId']) ? $data['pfsId'] : null;
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param \DateTime $birthday birthday
     *
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string $countryCode countryCode
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->container['countryName'];
    }

    /**
     * Sets countryName
     *
     * @param string $countryName countryName
     *
     * @return $this
     */
    public function setCountryName($countryName)
    {
        $this->container['countryName'] = $countryName;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets house
     *
     * @return string
     */
    public function getHouse()
    {
        return $this->container['house'];
    }

    /**
     * Sets house
     *
     * @param string $house house
     *
     * @return $this
     */
    public function setHouse($house)
    {
        $this->container['house'] = $house;

        return $this;
    }

    /**
     * Gets room
     *
     * @return string
     */
    public function getRoom()
    {
        return $this->container['room'];
    }

    /**
     * Sets room
     *
     * @param string $room room
     *
     * @return $this
     */
    public function setRoom($room)
    {
        $this->container['room'] = $room;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip zip
     *
     * @return $this
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \AndyDune\MgmtIntaxxApi\Model\OrderItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \AndyDune\MgmtIntaxxApi\Model\OrderItem[] $items If items is null - site must have only one product to use.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string $ip ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets userAgent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->container['userAgent'];
    }

    /**
     * Sets userAgent
     *
     * @param string $userAgent userAgent
     *
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        $this->container['userAgent'] = $userAgent;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets cookie
     *
     * @return map[string,object]
     */
    public function getCookie()
    {
        return $this->container['cookie'];
    }

    /**
     * Sets cookie
     *
     * @param map[string,object] $cookie cookie
     *
     * @return $this
     */
    public function setCookie($cookie)
    {
        $this->container['cookie'] = $cookie;

        return $this;
    }

    /**
     * Gets creditRequestInfo
     *
     * @return \AndyDune\MgmtIntaxxApi\Model\CreditRequestInfo
     */
    public function getCreditRequestInfo()
    {
        return $this->container['creditRequestInfo'];
    }

    /**
     * Sets creditRequestInfo
     *
     * @param \AndyDune\MgmtIntaxxApi\Model\CreditRequestInfo $creditRequestInfo creditRequestInfo
     *
     * @return $this
     */
    public function setCreditRequestInfo($creditRequestInfo)
    {
        $this->container['creditRequestInfo'] = $creditRequestInfo;

        return $this;
    }

    /**
     * Gets utmSource
     *
     * @return string
     */
    public function getUtmSource()
    {
        return $this->container['utmSource'];
    }

    /**
     * Sets utmSource
     *
     * @param string $utmSource utmSource
     *
     * @return $this
     */
    public function setUtmSource($utmSource)
    {
        $this->container['utmSource'] = $utmSource;

        return $this;
    }

    /**
     * Gets utmContent
     *
     * @return string
     */
    public function getUtmContent()
    {
        return $this->container['utmContent'];
    }

    /**
     * Sets utmContent
     *
     * @param string $utmContent utmContent
     *
     * @return $this
     */
    public function setUtmContent($utmContent)
    {
        $this->container['utmContent'] = $utmContent;

        return $this;
    }

    /**
     * Gets utmCampaign
     *
     * @return string
     */
    public function getUtmCampaign()
    {
        return $this->container['utmCampaign'];
    }

    /**
     * Sets utmCampaign
     *
     * @param string $utmCampaign utmCampaign
     *
     * @return $this
     */
    public function setUtmCampaign($utmCampaign)
    {
        $this->container['utmCampaign'] = $utmCampaign;

        return $this;
    }

    /**
     * Gets utmMedium
     *
     * @return string
     */
    public function getUtmMedium()
    {
        return $this->container['utmMedium'];
    }

    /**
     * Sets utmMedium
     *
     * @param string $utmMedium utmMedium
     *
     * @return $this
     */
    public function setUtmMedium($utmMedium)
    {
        $this->container['utmMedium'] = $utmMedium;

        return $this;
    }

    /**
     * Gets isInsurance
     *
     * @return bool
     */
    public function getIsInsurance()
    {
        return $this->container['isInsurance'];
    }

    /**
     * Sets isInsurance
     *
     * @param bool $isInsurance isInsurance
     *
     * @return $this
     */
    public function setIsInsurance($isInsurance)
    {
        $this->container['isInsurance'] = $isInsurance;

        return $this;
    }

    /**
     * Gets middleName
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middleName'];
    }

    /**
     * Sets middleName
     *
     * @param string $middleName middleName
     *
     * @return $this
     */
    public function setMiddleName($middleName)
    {
        $this->container['middleName'] = $middleName;

        return $this;
    }

    /**
     * Gets anotherSurname
     *
     * @return string
     */
    public function getAnotherSurname()
    {
        return $this->container['anotherSurname'];
    }

    /**
     * Sets anotherSurname
     *
     * @param string $anotherSurname anotherSurname
     *
     * @return $this
     */
    public function setAnotherSurname($anotherSurname)
    {
        $this->container['anotherSurname'] = $anotherSurname;

        return $this;
    }

    /**
     * Gets anotherEmail
     *
     * @return string
     */
    public function getAnotherEmail()
    {
        return $this->container['anotherEmail'];
    }

    /**
     * Sets anotherEmail
     *
     * @param string $anotherEmail anotherEmail
     *
     * @return $this
     */
    public function setAnotherEmail($anotherEmail)
    {
        $this->container['anotherEmail'] = $anotherEmail;

        return $this;
    }

    /**
     * Gets landlinePhoneNumber
     *
     * @return string
     */
    public function getLandlinePhoneNumber()
    {
        return $this->container['landlinePhoneNumber'];
    }

    /**
     * Sets landlinePhoneNumber
     *
     * @param string $landlinePhoneNumber landlinePhoneNumber
     *
     * @return $this
     */
    public function setLandlinePhoneNumber($landlinePhoneNumber)
    {
        $this->container['landlinePhoneNumber'] = $landlinePhoneNumber;

        return $this;
    }

    /**
     * Gets isDataConfirmed
     *
     * @return bool
     */
    public function getIsDataConfirmed()
    {
        return $this->container['isDataConfirmed'];
    }

    /**
     * Sets isDataConfirmed
     *
     * @param bool $isDataConfirmed isDataConfirmed
     *
     * @return $this
     */
    public function setIsDataConfirmed($isDataConfirmed)
    {
        $this->container['isDataConfirmed'] = $isDataConfirmed;

        return $this;
    }

    /**
     * Gets pfsId
     *
     * @return string
     */
    public function getPfsId()
    {
        return $this->container['pfsId'];
    }

    /**
     * Sets pfsId
     *
     * @param string $pfsId pfsId
     *
     * @return $this
     */
    public function setPfsId($pfsId)
    {
        $this->container['pfsId'] = $pfsId;

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
