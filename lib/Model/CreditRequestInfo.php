<?php
/**
 * CreditRequestInfo
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
 * OpenAPI spec version: 1.4.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.14
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
 * CreditRequestInfo Class Doc Comment
 *
 * @category Class
 * @package  AndyDune\MgmtIntaxxApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreditRequestInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'desiredAmount' => 'string',
'phone' => 'string',
'mobilePhone' => 'string',
'jobStatus' => 'string',
'netIncomePerMonth' => 'string',
'nationality' => 'string',
'maritalStatus' => 'string',
'housingSituation' => 'string',
'rentHouseDeductionPerMonth' => 'string',
'residentSinceMonth' => 'string',
'residentSinceYear' => 'string',
'employerName' => 'string',
'employerStreet' => 'string',
'employerHouseNum' => 'string',
'employerZip' => 'string',
'employerCity' => 'string',
'employerCountry' => 'string',
'employedSinceMonth' => 'string',
'employedSinceYear' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'desiredAmount' => null,
'phone' => null,
'mobilePhone' => null,
'jobStatus' => null,
'netIncomePerMonth' => null,
'nationality' => null,
'maritalStatus' => null,
'housingSituation' => null,
'rentHouseDeductionPerMonth' => null,
'residentSinceMonth' => null,
'residentSinceYear' => null,
'employerName' => null,
'employerStreet' => null,
'employerHouseNum' => null,
'employerZip' => null,
'employerCity' => null,
'employerCountry' => null,
'employedSinceMonth' => null,
'employedSinceYear' => null    ];

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
        'desiredAmount' => 'desired_amount',
'phone' => 'phone',
'mobilePhone' => 'mobile_phone',
'jobStatus' => 'job_status',
'netIncomePerMonth' => 'net_income_per_month',
'nationality' => 'nationality',
'maritalStatus' => 'marital_status',
'housingSituation' => 'housing_situation',
'rentHouseDeductionPerMonth' => 'rent_house_deduction_per_month',
'residentSinceMonth' => 'resident_since_month',
'residentSinceYear' => 'resident_since_year',
'employerName' => 'employer_name',
'employerStreet' => 'employer_street',
'employerHouseNum' => 'employer_house_num',
'employerZip' => 'employer_zip',
'employerCity' => 'employer_city',
'employerCountry' => 'employer_country',
'employedSinceMonth' => 'employed_since_month',
'employedSinceYear' => 'employed_since_year'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'desiredAmount' => 'setDesiredAmount',
'phone' => 'setPhone',
'mobilePhone' => 'setMobilePhone',
'jobStatus' => 'setJobStatus',
'netIncomePerMonth' => 'setNetIncomePerMonth',
'nationality' => 'setNationality',
'maritalStatus' => 'setMaritalStatus',
'housingSituation' => 'setHousingSituation',
'rentHouseDeductionPerMonth' => 'setRentHouseDeductionPerMonth',
'residentSinceMonth' => 'setResidentSinceMonth',
'residentSinceYear' => 'setResidentSinceYear',
'employerName' => 'setEmployerName',
'employerStreet' => 'setEmployerStreet',
'employerHouseNum' => 'setEmployerHouseNum',
'employerZip' => 'setEmployerZip',
'employerCity' => 'setEmployerCity',
'employerCountry' => 'setEmployerCountry',
'employedSinceMonth' => 'setEmployedSinceMonth',
'employedSinceYear' => 'setEmployedSinceYear'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'desiredAmount' => 'getDesiredAmount',
'phone' => 'getPhone',
'mobilePhone' => 'getMobilePhone',
'jobStatus' => 'getJobStatus',
'netIncomePerMonth' => 'getNetIncomePerMonth',
'nationality' => 'getNationality',
'maritalStatus' => 'getMaritalStatus',
'housingSituation' => 'getHousingSituation',
'rentHouseDeductionPerMonth' => 'getRentHouseDeductionPerMonth',
'residentSinceMonth' => 'getResidentSinceMonth',
'residentSinceYear' => 'getResidentSinceYear',
'employerName' => 'getEmployerName',
'employerStreet' => 'getEmployerStreet',
'employerHouseNum' => 'getEmployerHouseNum',
'employerZip' => 'getEmployerZip',
'employerCity' => 'getEmployerCity',
'employerCountry' => 'getEmployerCountry',
'employedSinceMonth' => 'getEmployedSinceMonth',
'employedSinceYear' => 'getEmployedSinceYear'    ];

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
        $this->container['desiredAmount'] = isset($data['desiredAmount']) ? $data['desiredAmount'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['mobilePhone'] = isset($data['mobilePhone']) ? $data['mobilePhone'] : null;
        $this->container['jobStatus'] = isset($data['jobStatus']) ? $data['jobStatus'] : null;
        $this->container['netIncomePerMonth'] = isset($data['netIncomePerMonth']) ? $data['netIncomePerMonth'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['maritalStatus'] = isset($data['maritalStatus']) ? $data['maritalStatus'] : null;
        $this->container['housingSituation'] = isset($data['housingSituation']) ? $data['housingSituation'] : null;
        $this->container['rentHouseDeductionPerMonth'] = isset($data['rentHouseDeductionPerMonth']) ? $data['rentHouseDeductionPerMonth'] : null;
        $this->container['residentSinceMonth'] = isset($data['residentSinceMonth']) ? $data['residentSinceMonth'] : null;
        $this->container['residentSinceYear'] = isset($data['residentSinceYear']) ? $data['residentSinceYear'] : null;
        $this->container['employerName'] = isset($data['employerName']) ? $data['employerName'] : null;
        $this->container['employerStreet'] = isset($data['employerStreet']) ? $data['employerStreet'] : null;
        $this->container['employerHouseNum'] = isset($data['employerHouseNum']) ? $data['employerHouseNum'] : null;
        $this->container['employerZip'] = isset($data['employerZip']) ? $data['employerZip'] : null;
        $this->container['employerCity'] = isset($data['employerCity']) ? $data['employerCity'] : null;
        $this->container['employerCountry'] = isset($data['employerCountry']) ? $data['employerCountry'] : null;
        $this->container['employedSinceMonth'] = isset($data['employedSinceMonth']) ? $data['employedSinceMonth'] : null;
        $this->container['employedSinceYear'] = isset($data['employedSinceYear']) ? $data['employedSinceYear'] : null;
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
     * Gets desiredAmount
     *
     * @return string
     */
    public function getDesiredAmount()
    {
        return $this->container['desiredAmount'];
    }

    /**
     * Sets desiredAmount
     *
     * @param string $desiredAmount desiredAmount
     *
     * @return $this
     */
    public function setDesiredAmount($desiredAmount)
    {
        $this->container['desiredAmount'] = $desiredAmount;

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
     * Gets mobilePhone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
     * Sets mobilePhone
     *
     * @param string $mobilePhone mobilePhone
     *
     * @return $this
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;

        return $this;
    }

    /**
     * Gets jobStatus
     *
     * @return string
     */
    public function getJobStatus()
    {
        return $this->container['jobStatus'];
    }

    /**
     * Sets jobStatus
     *
     * @param string $jobStatus jobStatus
     *
     * @return $this
     */
    public function setJobStatus($jobStatus)
    {
        $this->container['jobStatus'] = $jobStatus;

        return $this;
    }

    /**
     * Gets netIncomePerMonth
     *
     * @return string
     */
    public function getNetIncomePerMonth()
    {
        return $this->container['netIncomePerMonth'];
    }

    /**
     * Sets netIncomePerMonth
     *
     * @param string $netIncomePerMonth netIncomePerMonth
     *
     * @return $this
     */
    public function setNetIncomePerMonth($netIncomePerMonth)
    {
        $this->container['netIncomePerMonth'] = $netIncomePerMonth;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string $nationality nationality
     *
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets maritalStatus
     *
     * @return string
     */
    public function getMaritalStatus()
    {
        return $this->container['maritalStatus'];
    }

    /**
     * Sets maritalStatus
     *
     * @param string $maritalStatus maritalStatus
     *
     * @return $this
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->container['maritalStatus'] = $maritalStatus;

        return $this;
    }

    /**
     * Gets housingSituation
     *
     * @return string
     */
    public function getHousingSituation()
    {
        return $this->container['housingSituation'];
    }

    /**
     * Sets housingSituation
     *
     * @param string $housingSituation housingSituation
     *
     * @return $this
     */
    public function setHousingSituation($housingSituation)
    {
        $this->container['housingSituation'] = $housingSituation;

        return $this;
    }

    /**
     * Gets rentHouseDeductionPerMonth
     *
     * @return string
     */
    public function getRentHouseDeductionPerMonth()
    {
        return $this->container['rentHouseDeductionPerMonth'];
    }

    /**
     * Sets rentHouseDeductionPerMonth
     *
     * @param string $rentHouseDeductionPerMonth rentHouseDeductionPerMonth
     *
     * @return $this
     */
    public function setRentHouseDeductionPerMonth($rentHouseDeductionPerMonth)
    {
        $this->container['rentHouseDeductionPerMonth'] = $rentHouseDeductionPerMonth;

        return $this;
    }

    /**
     * Gets residentSinceMonth
     *
     * @return string
     */
    public function getResidentSinceMonth()
    {
        return $this->container['residentSinceMonth'];
    }

    /**
     * Sets residentSinceMonth
     *
     * @param string $residentSinceMonth residentSinceMonth
     *
     * @return $this
     */
    public function setResidentSinceMonth($residentSinceMonth)
    {
        $this->container['residentSinceMonth'] = $residentSinceMonth;

        return $this;
    }

    /**
     * Gets residentSinceYear
     *
     * @return string
     */
    public function getResidentSinceYear()
    {
        return $this->container['residentSinceYear'];
    }

    /**
     * Sets residentSinceYear
     *
     * @param string $residentSinceYear residentSinceYear
     *
     * @return $this
     */
    public function setResidentSinceYear($residentSinceYear)
    {
        $this->container['residentSinceYear'] = $residentSinceYear;

        return $this;
    }

    /**
     * Gets employerName
     *
     * @return string
     */
    public function getEmployerName()
    {
        return $this->container['employerName'];
    }

    /**
     * Sets employerName
     *
     * @param string $employerName employerName
     *
     * @return $this
     */
    public function setEmployerName($employerName)
    {
        $this->container['employerName'] = $employerName;

        return $this;
    }

    /**
     * Gets employerStreet
     *
     * @return string
     */
    public function getEmployerStreet()
    {
        return $this->container['employerStreet'];
    }

    /**
     * Sets employerStreet
     *
     * @param string $employerStreet employerStreet
     *
     * @return $this
     */
    public function setEmployerStreet($employerStreet)
    {
        $this->container['employerStreet'] = $employerStreet;

        return $this;
    }

    /**
     * Gets employerHouseNum
     *
     * @return string
     */
    public function getEmployerHouseNum()
    {
        return $this->container['employerHouseNum'];
    }

    /**
     * Sets employerHouseNum
     *
     * @param string $employerHouseNum employerHouseNum
     *
     * @return $this
     */
    public function setEmployerHouseNum($employerHouseNum)
    {
        $this->container['employerHouseNum'] = $employerHouseNum;

        return $this;
    }

    /**
     * Gets employerZip
     *
     * @return string
     */
    public function getEmployerZip()
    {
        return $this->container['employerZip'];
    }

    /**
     * Sets employerZip
     *
     * @param string $employerZip employerZip
     *
     * @return $this
     */
    public function setEmployerZip($employerZip)
    {
        $this->container['employerZip'] = $employerZip;

        return $this;
    }

    /**
     * Gets employerCity
     *
     * @return string
     */
    public function getEmployerCity()
    {
        return $this->container['employerCity'];
    }

    /**
     * Sets employerCity
     *
     * @param string $employerCity employerCity
     *
     * @return $this
     */
    public function setEmployerCity($employerCity)
    {
        $this->container['employerCity'] = $employerCity;

        return $this;
    }

    /**
     * Gets employerCountry
     *
     * @return string
     */
    public function getEmployerCountry()
    {
        return $this->container['employerCountry'];
    }

    /**
     * Sets employerCountry
     *
     * @param string $employerCountry employerCountry
     *
     * @return $this
     */
    public function setEmployerCountry($employerCountry)
    {
        $this->container['employerCountry'] = $employerCountry;

        return $this;
    }

    /**
     * Gets employedSinceMonth
     *
     * @return string
     */
    public function getEmployedSinceMonth()
    {
        return $this->container['employedSinceMonth'];
    }

    /**
     * Sets employedSinceMonth
     *
     * @param string $employedSinceMonth employedSinceMonth
     *
     * @return $this
     */
    public function setEmployedSinceMonth($employedSinceMonth)
    {
        $this->container['employedSinceMonth'] = $employedSinceMonth;

        return $this;
    }

    /**
     * Gets employedSinceYear
     *
     * @return string
     */
    public function getEmployedSinceYear()
    {
        return $this->container['employedSinceYear'];
    }

    /**
     * Sets employedSinceYear
     *
     * @param string $employedSinceYear employedSinceYear
     *
     * @return $this
     */
    public function setEmployedSinceYear($employedSinceYear)
    {
        $this->container['employedSinceYear'] = $employedSinceYear;

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