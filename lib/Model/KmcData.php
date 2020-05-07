<?php
/**
 * KmcData
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
 * OpenAPI spec version: 1.9.3
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
 * KmcData Class Doc Comment
 *
 * @category Class
 * @package  AndyDune\MgmtIntaxxApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KmcData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KmcData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'desiredAmount' => 'float',
'runningTime' => 'int',
'accountOwner' => 'string',
'iban' => 'string',
'bic' => 'string',
'bank' => 'string',
'maritalStatus' => 'string',
'amountOfChildren' => 'int',
'propertyAvailable' => 'bool',
'houseSituation' => 'string',
'houseDeductionPerMonth' => 'float',
'residentSince' => 'string',
'employment' => 'string',
'jobTitle' => 'string',
'sumIncome' => 'float',
'employerTitle' => 'string',
'employerAddressZip' => 'string',
'employerAddressRegion' => 'string',
'employerAddressCity' => 'string',
'employerAddressStreet' => 'string',
'employerAddressHouse' => 'string',
'employmentSinceMonth' => 'int',
'employmentSinceYear' => 'int',
'isDataProcessingConfirmed' => 'bool',
'isNewsletterConfirmed' => 'bool',
'placeOfBirth' => 'string',
'idNumber' => 'string',
'nationality' => 'string',
'isCardWasOrder' => 'string',
'cardWasOrderedDate' => 'string',
'employerAddressCountry' => 'string',
'isTermsAndConditionsConfirmed' => 'bool',
'isAgreedToUsePersonalDataConfirmed' => 'bool',
'loanRequest' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'desiredAmount' => 'float',
'runningTime' => null,
'accountOwner' => null,
'iban' => null,
'bic' => null,
'bank' => null,
'maritalStatus' => null,
'amountOfChildren' => null,
'propertyAvailable' => null,
'houseSituation' => null,
'houseDeductionPerMonth' => 'float',
'residentSince' => null,
'employment' => null,
'jobTitle' => null,
'sumIncome' => 'float',
'employerTitle' => null,
'employerAddressZip' => null,
'employerAddressRegion' => null,
'employerAddressCity' => null,
'employerAddressStreet' => null,
'employerAddressHouse' => null,
'employmentSinceMonth' => null,
'employmentSinceYear' => null,
'isDataProcessingConfirmed' => null,
'isNewsletterConfirmed' => null,
'placeOfBirth' => null,
'idNumber' => null,
'nationality' => null,
'isCardWasOrder' => null,
'cardWasOrderedDate' => null,
'employerAddressCountry' => null,
'isTermsAndConditionsConfirmed' => null,
'isAgreedToUsePersonalDataConfirmed' => null,
'loanRequest' => null    ];

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
'desiredAmount' => 'desired_amount',
'runningTime' => 'running_time',
'accountOwner' => 'account_owner',
'iban' => 'iban',
'bic' => 'bic',
'bank' => 'bank',
'maritalStatus' => 'marital_status',
'amountOfChildren' => 'amount_of_children',
'propertyAvailable' => 'property_available',
'houseSituation' => 'house_situation',
'houseDeductionPerMonth' => 'house_deduction_per_month',
'residentSince' => 'resident_since',
'employment' => 'employment',
'jobTitle' => 'job_title',
'sumIncome' => 'sum_income',
'employerTitle' => 'employer_title',
'employerAddressZip' => 'employer_address_zip',
'employerAddressRegion' => 'employer_address_region',
'employerAddressCity' => 'employer_address_city',
'employerAddressStreet' => 'employer_address_street',
'employerAddressHouse' => 'employer_address_house',
'employmentSinceMonth' => 'employment_since_month',
'employmentSinceYear' => 'employment_since_year',
'isDataProcessingConfirmed' => 'is_data_processing_confirmed',
'isNewsletterConfirmed' => 'is_newsletter_confirmed',
'placeOfBirth' => 'place_of_birth',
'idNumber' => 'id_number',
'nationality' => 'nationality',
'isCardWasOrder' => 'is_card_was_order',
'cardWasOrderedDate' => 'card_was_ordered_date',
'employerAddressCountry' => 'employer_address_country',
'isTermsAndConditionsConfirmed' => 'is_terms_and_conditions_confirmed',
'isAgreedToUsePersonalDataConfirmed' => 'is_agreed_to_use_personal_data_confirmed',
'loanRequest' => 'loan_request'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'desiredAmount' => 'setDesiredAmount',
'runningTime' => 'setRunningTime',
'accountOwner' => 'setAccountOwner',
'iban' => 'setIban',
'bic' => 'setBic',
'bank' => 'setBank',
'maritalStatus' => 'setMaritalStatus',
'amountOfChildren' => 'setAmountOfChildren',
'propertyAvailable' => 'setPropertyAvailable',
'houseSituation' => 'setHouseSituation',
'houseDeductionPerMonth' => 'setHouseDeductionPerMonth',
'residentSince' => 'setResidentSince',
'employment' => 'setEmployment',
'jobTitle' => 'setJobTitle',
'sumIncome' => 'setSumIncome',
'employerTitle' => 'setEmployerTitle',
'employerAddressZip' => 'setEmployerAddressZip',
'employerAddressRegion' => 'setEmployerAddressRegion',
'employerAddressCity' => 'setEmployerAddressCity',
'employerAddressStreet' => 'setEmployerAddressStreet',
'employerAddressHouse' => 'setEmployerAddressHouse',
'employmentSinceMonth' => 'setEmploymentSinceMonth',
'employmentSinceYear' => 'setEmploymentSinceYear',
'isDataProcessingConfirmed' => 'setIsDataProcessingConfirmed',
'isNewsletterConfirmed' => 'setIsNewsletterConfirmed',
'placeOfBirth' => 'setPlaceOfBirth',
'idNumber' => 'setIdNumber',
'nationality' => 'setNationality',
'isCardWasOrder' => 'setIsCardWasOrder',
'cardWasOrderedDate' => 'setCardWasOrderedDate',
'employerAddressCountry' => 'setEmployerAddressCountry',
'isTermsAndConditionsConfirmed' => 'setIsTermsAndConditionsConfirmed',
'isAgreedToUsePersonalDataConfirmed' => 'setIsAgreedToUsePersonalDataConfirmed',
'loanRequest' => 'setLoanRequest'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'desiredAmount' => 'getDesiredAmount',
'runningTime' => 'getRunningTime',
'accountOwner' => 'getAccountOwner',
'iban' => 'getIban',
'bic' => 'getBic',
'bank' => 'getBank',
'maritalStatus' => 'getMaritalStatus',
'amountOfChildren' => 'getAmountOfChildren',
'propertyAvailable' => 'getPropertyAvailable',
'houseSituation' => 'getHouseSituation',
'houseDeductionPerMonth' => 'getHouseDeductionPerMonth',
'residentSince' => 'getResidentSince',
'employment' => 'getEmployment',
'jobTitle' => 'getJobTitle',
'sumIncome' => 'getSumIncome',
'employerTitle' => 'getEmployerTitle',
'employerAddressZip' => 'getEmployerAddressZip',
'employerAddressRegion' => 'getEmployerAddressRegion',
'employerAddressCity' => 'getEmployerAddressCity',
'employerAddressStreet' => 'getEmployerAddressStreet',
'employerAddressHouse' => 'getEmployerAddressHouse',
'employmentSinceMonth' => 'getEmploymentSinceMonth',
'employmentSinceYear' => 'getEmploymentSinceYear',
'isDataProcessingConfirmed' => 'getIsDataProcessingConfirmed',
'isNewsletterConfirmed' => 'getIsNewsletterConfirmed',
'placeOfBirth' => 'getPlaceOfBirth',
'idNumber' => 'getIdNumber',
'nationality' => 'getNationality',
'isCardWasOrder' => 'getIsCardWasOrder',
'cardWasOrderedDate' => 'getCardWasOrderedDate',
'employerAddressCountry' => 'getEmployerAddressCountry',
'isTermsAndConditionsConfirmed' => 'getIsTermsAndConditionsConfirmed',
'isAgreedToUsePersonalDataConfirmed' => 'getIsAgreedToUsePersonalDataConfirmed',
'loanRequest' => 'getLoanRequest'    ];

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
        $this->container['desiredAmount'] = isset($data['desiredAmount']) ? $data['desiredAmount'] : null;
        $this->container['runningTime'] = isset($data['runningTime']) ? $data['runningTime'] : null;
        $this->container['accountOwner'] = isset($data['accountOwner']) ? $data['accountOwner'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['bic'] = isset($data['bic']) ? $data['bic'] : null;
        $this->container['bank'] = isset($data['bank']) ? $data['bank'] : null;
        $this->container['maritalStatus'] = isset($data['maritalStatus']) ? $data['maritalStatus'] : null;
        $this->container['amountOfChildren'] = isset($data['amountOfChildren']) ? $data['amountOfChildren'] : null;
        $this->container['propertyAvailable'] = isset($data['propertyAvailable']) ? $data['propertyAvailable'] : null;
        $this->container['houseSituation'] = isset($data['houseSituation']) ? $data['houseSituation'] : null;
        $this->container['houseDeductionPerMonth'] = isset($data['houseDeductionPerMonth']) ? $data['houseDeductionPerMonth'] : null;
        $this->container['residentSince'] = isset($data['residentSince']) ? $data['residentSince'] : null;
        $this->container['employment'] = isset($data['employment']) ? $data['employment'] : null;
        $this->container['jobTitle'] = isset($data['jobTitle']) ? $data['jobTitle'] : null;
        $this->container['sumIncome'] = isset($data['sumIncome']) ? $data['sumIncome'] : null;
        $this->container['employerTitle'] = isset($data['employerTitle']) ? $data['employerTitle'] : null;
        $this->container['employerAddressZip'] = isset($data['employerAddressZip']) ? $data['employerAddressZip'] : null;
        $this->container['employerAddressRegion'] = isset($data['employerAddressRegion']) ? $data['employerAddressRegion'] : null;
        $this->container['employerAddressCity'] = isset($data['employerAddressCity']) ? $data['employerAddressCity'] : null;
        $this->container['employerAddressStreet'] = isset($data['employerAddressStreet']) ? $data['employerAddressStreet'] : null;
        $this->container['employerAddressHouse'] = isset($data['employerAddressHouse']) ? $data['employerAddressHouse'] : null;
        $this->container['employmentSinceMonth'] = isset($data['employmentSinceMonth']) ? $data['employmentSinceMonth'] : null;
        $this->container['employmentSinceYear'] = isset($data['employmentSinceYear']) ? $data['employmentSinceYear'] : null;
        $this->container['isDataProcessingConfirmed'] = isset($data['isDataProcessingConfirmed']) ? $data['isDataProcessingConfirmed'] : null;
        $this->container['isNewsletterConfirmed'] = isset($data['isNewsletterConfirmed']) ? $data['isNewsletterConfirmed'] : null;
        $this->container['placeOfBirth'] = isset($data['placeOfBirth']) ? $data['placeOfBirth'] : null;
        $this->container['idNumber'] = isset($data['idNumber']) ? $data['idNumber'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['isCardWasOrder'] = isset($data['isCardWasOrder']) ? $data['isCardWasOrder'] : null;
        $this->container['cardWasOrderedDate'] = isset($data['cardWasOrderedDate']) ? $data['cardWasOrderedDate'] : null;
        $this->container['employerAddressCountry'] = isset($data['employerAddressCountry']) ? $data['employerAddressCountry'] : null;
        $this->container['isTermsAndConditionsConfirmed'] = isset($data['isTermsAndConditionsConfirmed']) ? $data['isTermsAndConditionsConfirmed'] : null;
        $this->container['isAgreedToUsePersonalDataConfirmed'] = isset($data['isAgreedToUsePersonalDataConfirmed']) ? $data['isAgreedToUsePersonalDataConfirmed'] : null;
        $this->container['loanRequest'] = isset($data['loanRequest']) ? $data['loanRequest'] : null;
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
     * Gets desiredAmount
     *
     * @return float
     */
    public function getDesiredAmount()
    {
        return $this->container['desiredAmount'];
    }

    /**
     * Sets desiredAmount
     *
     * @param float $desiredAmount desiredAmount
     *
     * @return $this
     */
    public function setDesiredAmount($desiredAmount)
    {
        $this->container['desiredAmount'] = $desiredAmount;

        return $this;
    }

    /**
     * Gets runningTime
     *
     * @return int
     */
    public function getRunningTime()
    {
        return $this->container['runningTime'];
    }

    /**
     * Sets runningTime
     *
     * @param int $runningTime runningTime
     *
     * @return $this
     */
    public function setRunningTime($runningTime)
    {
        $this->container['runningTime'] = $runningTime;

        return $this;
    }

    /**
     * Gets accountOwner
     *
     * @return string
     */
    public function getAccountOwner()
    {
        return $this->container['accountOwner'];
    }

    /**
     * Sets accountOwner
     *
     * @param string $accountOwner accountOwner
     *
     * @return $this
     */
    public function setAccountOwner($accountOwner)
    {
        $this->container['accountOwner'] = $accountOwner;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban iban
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string $bic bic
     *
     * @return $this
     */
    public function setBic($bic)
    {
        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets bank
     *
     * @return string
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     *
     * @param string $bank bank
     *
     * @return $this
     */
    public function setBank($bank)
    {
        $this->container['bank'] = $bank;

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
     * Gets amountOfChildren
     *
     * @return int
     */
    public function getAmountOfChildren()
    {
        return $this->container['amountOfChildren'];
    }

    /**
     * Sets amountOfChildren
     *
     * @param int $amountOfChildren amountOfChildren
     *
     * @return $this
     */
    public function setAmountOfChildren($amountOfChildren)
    {
        $this->container['amountOfChildren'] = $amountOfChildren;

        return $this;
    }

    /**
     * Gets propertyAvailable
     *
     * @return bool
     */
    public function getPropertyAvailable()
    {
        return $this->container['propertyAvailable'];
    }

    /**
     * Sets propertyAvailable
     *
     * @param bool $propertyAvailable propertyAvailable
     *
     * @return $this
     */
    public function setPropertyAvailable($propertyAvailable)
    {
        $this->container['propertyAvailable'] = $propertyAvailable;

        return $this;
    }

    /**
     * Gets houseSituation
     *
     * @return string
     */
    public function getHouseSituation()
    {
        return $this->container['houseSituation'];
    }

    /**
     * Sets houseSituation
     *
     * @param string $houseSituation houseSituation
     *
     * @return $this
     */
    public function setHouseSituation($houseSituation)
    {
        $this->container['houseSituation'] = $houseSituation;

        return $this;
    }

    /**
     * Gets houseDeductionPerMonth
     *
     * @return float
     */
    public function getHouseDeductionPerMonth()
    {
        return $this->container['houseDeductionPerMonth'];
    }

    /**
     * Sets houseDeductionPerMonth
     *
     * @param float $houseDeductionPerMonth houseDeductionPerMonth
     *
     * @return $this
     */
    public function setHouseDeductionPerMonth($houseDeductionPerMonth)
    {
        $this->container['houseDeductionPerMonth'] = $houseDeductionPerMonth;

        return $this;
    }

    /**
     * Gets residentSince
     *
     * @return string
     */
    public function getResidentSince()
    {
        return $this->container['residentSince'];
    }

    /**
     * Sets residentSince
     *
     * @param string $residentSince residentSince
     *
     * @return $this
     */
    public function setResidentSince($residentSince)
    {
        $this->container['residentSince'] = $residentSince;

        return $this;
    }

    /**
     * Gets employment
     *
     * @return string
     */
    public function getEmployment()
    {
        return $this->container['employment'];
    }

    /**
     * Sets employment
     *
     * @param string $employment employment
     *
     * @return $this
     */
    public function setEmployment($employment)
    {
        $this->container['employment'] = $employment;

        return $this;
    }

    /**
     * Gets jobTitle
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->container['jobTitle'];
    }

    /**
     * Sets jobTitle
     *
     * @param string $jobTitle jobTitle
     *
     * @return $this
     */
    public function setJobTitle($jobTitle)
    {
        $this->container['jobTitle'] = $jobTitle;

        return $this;
    }

    /**
     * Gets sumIncome
     *
     * @return float
     */
    public function getSumIncome()
    {
        return $this->container['sumIncome'];
    }

    /**
     * Sets sumIncome
     *
     * @param float $sumIncome sumIncome
     *
     * @return $this
     */
    public function setSumIncome($sumIncome)
    {
        $this->container['sumIncome'] = $sumIncome;

        return $this;
    }

    /**
     * Gets employerTitle
     *
     * @return string
     */
    public function getEmployerTitle()
    {
        return $this->container['employerTitle'];
    }

    /**
     * Sets employerTitle
     *
     * @param string $employerTitle employerTitle
     *
     * @return $this
     */
    public function setEmployerTitle($employerTitle)
    {
        $this->container['employerTitle'] = $employerTitle;

        return $this;
    }

    /**
     * Gets employerAddressZip
     *
     * @return string
     */
    public function getEmployerAddressZip()
    {
        return $this->container['employerAddressZip'];
    }

    /**
     * Sets employerAddressZip
     *
     * @param string $employerAddressZip employerAddressZip
     *
     * @return $this
     */
    public function setEmployerAddressZip($employerAddressZip)
    {
        $this->container['employerAddressZip'] = $employerAddressZip;

        return $this;
    }

    /**
     * Gets employerAddressRegion
     *
     * @return string
     */
    public function getEmployerAddressRegion()
    {
        return $this->container['employerAddressRegion'];
    }

    /**
     * Sets employerAddressRegion
     *
     * @param string $employerAddressRegion employerAddressRegion
     *
     * @return $this
     */
    public function setEmployerAddressRegion($employerAddressRegion)
    {
        $this->container['employerAddressRegion'] = $employerAddressRegion;

        return $this;
    }

    /**
     * Gets employerAddressCity
     *
     * @return string
     */
    public function getEmployerAddressCity()
    {
        return $this->container['employerAddressCity'];
    }

    /**
     * Sets employerAddressCity
     *
     * @param string $employerAddressCity employerAddressCity
     *
     * @return $this
     */
    public function setEmployerAddressCity($employerAddressCity)
    {
        $this->container['employerAddressCity'] = $employerAddressCity;

        return $this;
    }

    /**
     * Gets employerAddressStreet
     *
     * @return string
     */
    public function getEmployerAddressStreet()
    {
        return $this->container['employerAddressStreet'];
    }

    /**
     * Sets employerAddressStreet
     *
     * @param string $employerAddressStreet employerAddressStreet
     *
     * @return $this
     */
    public function setEmployerAddressStreet($employerAddressStreet)
    {
        $this->container['employerAddressStreet'] = $employerAddressStreet;

        return $this;
    }

    /**
     * Gets employerAddressHouse
     *
     * @return string
     */
    public function getEmployerAddressHouse()
    {
        return $this->container['employerAddressHouse'];
    }

    /**
     * Sets employerAddressHouse
     *
     * @param string $employerAddressHouse employerAddressHouse
     *
     * @return $this
     */
    public function setEmployerAddressHouse($employerAddressHouse)
    {
        $this->container['employerAddressHouse'] = $employerAddressHouse;

        return $this;
    }

    /**
     * Gets employmentSinceMonth
     *
     * @return int
     */
    public function getEmploymentSinceMonth()
    {
        return $this->container['employmentSinceMonth'];
    }

    /**
     * Sets employmentSinceMonth
     *
     * @param int $employmentSinceMonth employmentSinceMonth
     *
     * @return $this
     */
    public function setEmploymentSinceMonth($employmentSinceMonth)
    {
        $this->container['employmentSinceMonth'] = $employmentSinceMonth;

        return $this;
    }

    /**
     * Gets employmentSinceYear
     *
     * @return int
     */
    public function getEmploymentSinceYear()
    {
        return $this->container['employmentSinceYear'];
    }

    /**
     * Sets employmentSinceYear
     *
     * @param int $employmentSinceYear employmentSinceYear
     *
     * @return $this
     */
    public function setEmploymentSinceYear($employmentSinceYear)
    {
        $this->container['employmentSinceYear'] = $employmentSinceYear;

        return $this;
    }

    /**
     * Gets isDataProcessingConfirmed
     *
     * @return bool
     */
    public function getIsDataProcessingConfirmed()
    {
        return $this->container['isDataProcessingConfirmed'];
    }

    /**
     * Sets isDataProcessingConfirmed
     *
     * @param bool $isDataProcessingConfirmed isDataProcessingConfirmed
     *
     * @return $this
     */
    public function setIsDataProcessingConfirmed($isDataProcessingConfirmed)
    {
        $this->container['isDataProcessingConfirmed'] = $isDataProcessingConfirmed;

        return $this;
    }

    /**
     * Gets isNewsletterConfirmed
     *
     * @return bool
     */
    public function getIsNewsletterConfirmed()
    {
        return $this->container['isNewsletterConfirmed'];
    }

    /**
     * Sets isNewsletterConfirmed
     *
     * @param bool $isNewsletterConfirmed isNewsletterConfirmed
     *
     * @return $this
     */
    public function setIsNewsletterConfirmed($isNewsletterConfirmed)
    {
        $this->container['isNewsletterConfirmed'] = $isNewsletterConfirmed;

        return $this;
    }

    /**
     * Gets placeOfBirth
     *
     * @return string
     */
    public function getPlaceOfBirth()
    {
        return $this->container['placeOfBirth'];
    }

    /**
     * Sets placeOfBirth
     *
     * @param string $placeOfBirth placeOfBirth
     *
     * @return $this
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->container['placeOfBirth'] = $placeOfBirth;

        return $this;
    }

    /**
     * Gets idNumber
     *
     * @return string
     */
    public function getIdNumber()
    {
        return $this->container['idNumber'];
    }

    /**
     * Sets idNumber
     *
     * @param string $idNumber idNumber
     *
     * @return $this
     */
    public function setIdNumber($idNumber)
    {
        $this->container['idNumber'] = $idNumber;

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
     * Gets isCardWasOrder
     *
     * @return string
     */
    public function getIsCardWasOrder()
    {
        return $this->container['isCardWasOrder'];
    }

    /**
     * Sets isCardWasOrder
     *
     * @param string $isCardWasOrder It may be not ordered (no), ordered (yes) or sent
     *
     * @return $this
     */
    public function setIsCardWasOrder($isCardWasOrder)
    {
        $this->container['isCardWasOrder'] = $isCardWasOrder;

        return $this;
    }

    /**
     * Gets cardWasOrderedDate
     *
     * @return string
     */
    public function getCardWasOrderedDate()
    {
        return $this->container['cardWasOrderedDate'];
    }

    /**
     * Sets cardWasOrderedDate
     *
     * @param string $cardWasOrderedDate cardWasOrderedDate
     *
     * @return $this
     */
    public function setCardWasOrderedDate($cardWasOrderedDate)
    {
        $this->container['cardWasOrderedDate'] = $cardWasOrderedDate;

        return $this;
    }

    /**
     * Gets employerAddressCountry
     *
     * @return string
     */
    public function getEmployerAddressCountry()
    {
        return $this->container['employerAddressCountry'];
    }

    /**
     * Sets employerAddressCountry
     *
     * @param string $employerAddressCountry employerAddressCountry
     *
     * @return $this
     */
    public function setEmployerAddressCountry($employerAddressCountry)
    {
        $this->container['employerAddressCountry'] = $employerAddressCountry;

        return $this;
    }

    /**
     * Gets isTermsAndConditionsConfirmed
     *
     * @return bool
     */
    public function getIsTermsAndConditionsConfirmed()
    {
        return $this->container['isTermsAndConditionsConfirmed'];
    }

    /**
     * Sets isTermsAndConditionsConfirmed
     *
     * @param bool $isTermsAndConditionsConfirmed isTermsAndConditionsConfirmed
     *
     * @return $this
     */
    public function setIsTermsAndConditionsConfirmed($isTermsAndConditionsConfirmed)
    {
        $this->container['isTermsAndConditionsConfirmed'] = $isTermsAndConditionsConfirmed;

        return $this;
    }

    /**
     * Gets isAgreedToUsePersonalDataConfirmed
     *
     * @return bool
     */
    public function getIsAgreedToUsePersonalDataConfirmed()
    {
        return $this->container['isAgreedToUsePersonalDataConfirmed'];
    }

    /**
     * Sets isAgreedToUsePersonalDataConfirmed
     *
     * @param bool $isAgreedToUsePersonalDataConfirmed isAgreedToUsePersonalDataConfirmed
     *
     * @return $this
     */
    public function setIsAgreedToUsePersonalDataConfirmed($isAgreedToUsePersonalDataConfirmed)
    {
        $this->container['isAgreedToUsePersonalDataConfirmed'] = $isAgreedToUsePersonalDataConfirmed;

        return $this;
    }

    /**
     * Gets loanRequest
     *
     * @return string
     */
    public function getLoanRequest()
    {
        return $this->container['loanRequest'];
    }

    /**
     * Sets loanRequest
     *
     * @param string $loanRequest It may be no, yes or sent
     *
     * @return $this
     */
    public function setLoanRequest($loanRequest)
    {
        $this->container['loanRequest'] = $loanRequest;

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
