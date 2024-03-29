# AndyDune\MgmtIntaxxApi\DefaultApi

All URIs are relative to *{protocol}://{domain}/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cardClientCompanyAssignPost**](DefaultApi.md#cardclientcompanyassignpost) | **POST** /card-client-company/assign | Assign card client company to order
[**cardClientCompanyAvailableVariantsPost**](DefaultApi.md#cardclientcompanyavailablevariantspost) | **POST** /card-client-company/available-variants | Get available variants of card client company
[**createOrderPost**](DefaultApi.md#createorderpost) | **POST** /create-order | Create order with product of given brand
[**customerPincodeChangePost**](DefaultApi.md#customerpincodechangepost) | **POST** /customer/pincode-change | Request to change customer pincode.
[**customerPincodeCheckPost**](DefaultApi.md#customerpincodecheckpost) | **POST** /customer/pincode-check | Request to check customer pincode.
[**dataGet**](DefaultApi.md#dataget) | **GET** /data | Basic data.
[**emailConfirmPost**](DefaultApi.md#emailconfirmpost) | **POST** /email-confirm | Customer email confirmation.
[**getOrderDataPost**](DefaultApi.md#getorderdatapost) | **POST** /get-order-data | Full order data
[**orderActionExecutePost**](DefaultApi.md#orderactionexecutepost) | **POST** /order-action-execute | Execute order action with code
[**orderImagePost**](DefaultApi.md#orderimagepost) | **POST** /order-image | Get order image with code
[**orderSendSmsWithTemplatePost**](DefaultApi.md#ordersendsmswithtemplatepost) | **POST** /order-send-sms-with-template | Send SMS for order with brand sms template
[**paymentConditionsPost**](DefaultApi.md#paymentconditionspost) | **POST** /payment/conditions | Check conditions for payment creation
[**paymentCreatePost**](DefaultApi.md#paymentcreatepost) | **POST** /payment/create | Create payment for order
[**paymentLastPaymentDataPost**](DefaultApi.md#paymentlastpaymentdatapost) | **POST** /payment/last-payment-data | Get last payment data
[**pfsAccountInfoPost**](DefaultApi.md#pfsaccountinfopost) | **POST** /pfs/account/info | Get accunt info
[**pfsWebhookPost**](DefaultApi.md#pfswebhookpost) | **POST** /pfs/webhook | Follow pfs webhook to this url
[**smsConfirmPost**](DefaultApi.md#smsconfirmpost) | **POST** /sms-confirm | Customer sms confirmation.
[**updateKmcDataImagesPost**](DefaultApi.md#updatekmcdataimagespost) | **POST** /update-kmc-data-images | Upload KMC files
[**updateKmcDataPost**](DefaultApi.md#updatekmcdatapost) | **POST** /update-kmc-data | Upload KMC data
[**updateOrderPost**](DefaultApi.md#updateorderpost) | **POST** /update-order | Update customer data for order
[**uploadImagesPost**](DefaultApi.md#uploadimagespost) | **POST** /upload-images | Upload selfie, signature and maybe more
[**uploadOrderFilePost**](DefaultApi.md#uploadorderfilepost) | **POST** /upload-order-file | Upload order file
[**valueVariantsPost**](DefaultApi.md#valuevariantspost) | **POST** /value-variants | Get available value variants

# **cardClientCompanyAssignPost**
> \AndyDune\MgmtIntaxxApi\Model\OrderCardClientCompanyAssignResponse cardClientCompanyAssignPost($body)

Assign card client company to order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\OrderCardClientCompanyAssignRerquest(); // \AndyDune\MgmtIntaxxApi\Model\OrderCardClientCompanyAssignRerquest | 

try {
    $result = $apiInstance->cardClientCompanyAssignPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cardClientCompanyAssignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\OrderCardClientCompanyAssignRerquest**](../Model/OrderCardClientCompanyAssignRerquest.md)|  |

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\OrderCardClientCompanyAssignResponse**](../Model/OrderCardClientCompanyAssignResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cardClientCompanyAvailableVariantsPost**
> \AndyDune\MgmtIntaxxApi\Model\OrderCardClientCompanyAvailableVariantsResponse cardClientCompanyAvailableVariantsPost()

Get available variants of card client company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cardClientCompanyAvailableVariantsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cardClientCompanyAvailableVariantsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\OrderCardClientCompanyAvailableVariantsResponse**](../Model/OrderCardClientCompanyAvailableVariantsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrderPost**
> \AndyDune\MgmtIntaxxApi\Model\Response createOrderPost($body)

Create order with product of given brand

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\Order(); // \AndyDune\MgmtIntaxxApi\Model\Order | Order and customer datails

try {
    $result = $apiInstance->createOrderPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\Order**](../Model/Order.md)| Order and customer datails |

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPincodeChangePost**
> \AndyDune\MgmtIntaxxApi\Model\Response customerPincodeChangePost($body)

Request to change customer pincode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\PincodeChange(); // \AndyDune\MgmtIntaxxApi\Model\PincodeChange | Order id and pincode

try {
    $result = $apiInstance->customerPincodeChangePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customerPincodeChangePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\PincodeChange**](../Model/PincodeChange.md)| Order id and pincode |

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPincodeCheckPost**
> \AndyDune\MgmtIntaxxApi\Model\Response customerPincodeCheckPost($body)

Request to check customer pincode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\PincodeCheck(); // \AndyDune\MgmtIntaxxApi\Model\PincodeCheck | Email and pincode

try {
    $result = $apiInstance->customerPincodeCheckPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customerPincodeCheckPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\PincodeCheck**](../Model/PincodeCheck.md)| Email and pincode |

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataGet**
> \AndyDune\MgmtIntaxxApi\Model\Response dataGet()

Basic data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->dataGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->dataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailConfirmPost**
> \AndyDune\MgmtIntaxxApi\Model\Response emailConfirmPost($body)

Customer email confirmation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\EmailConfirmation(); // \AndyDune\MgmtIntaxxApi\Model\EmailConfirmation | Customer email confirmation.

try {
    $result = $apiInstance->emailConfirmPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->emailConfirmPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\EmailConfirmation**](../Model/EmailConfirmation.md)| Customer email confirmation. |

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderDataPost**
> \AndyDune\MgmtIntaxxApi\Model\OrderDataResponse getOrderDataPost($body)

Full order data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\OrderDataRequest(); // \AndyDune\MgmtIntaxxApi\Model\OrderDataRequest | Retrieve full order data

try {
    $result = $apiInstance->getOrderDataPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderDataPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\OrderDataRequest**](../Model/OrderDataRequest.md)| Retrieve full order data |

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\OrderDataResponse**](../Model/OrderDataResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderActionExecutePost**
> \AndyDune\MgmtIntaxxApi\Model\Response orderActionExecutePost($body)

Execute order action with code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\OrderActionExecuteRequest(); // \AndyDune\MgmtIntaxxApi\Model\OrderActionExecuteRequest | 

try {
    $result = $apiInstance->orderActionExecutePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->orderActionExecutePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\OrderActionExecuteRequest**](../Model/OrderActionExecuteRequest.md)|  |

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderImagePost**
> string orderImagePost($body)

Get order image with code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\OrderImageRequest(); // \AndyDune\MgmtIntaxxApi\Model\OrderImageRequest | Inctance for request body

try {
    $result = $apiInstance->orderImagePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->orderImagePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\OrderImageRequest**](../Model/OrderImageRequest.md)| Inctance for request body | [optional]

### Return type

**string**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: image/_*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderSendSmsWithTemplatePost**
> \AndyDune\MgmtIntaxxApi\Model\Response orderSendSmsWithTemplatePost($body)

Send SMS for order with brand sms template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\SmsWithBrandTemplate(); // \AndyDune\MgmtIntaxxApi\Model\SmsWithBrandTemplate | Inctance for request body

try {
    $result = $apiInstance->orderSendSmsWithTemplatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->orderSendSmsWithTemplatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\SmsWithBrandTemplate**](../Model/SmsWithBrandTemplate.md)| Inctance for request body | [optional]

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentConditionsPost**
> \AndyDune\MgmtIntaxxApi\Model\PaymentResponse paymentConditionsPost($body)

Check conditions for payment creation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\PaymentRequest(); // \AndyDune\MgmtIntaxxApi\Model\PaymentRequest | Inctance for request body

try {
    $result = $apiInstance->paymentConditionsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentConditionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\PaymentRequest**](../Model/PaymentRequest.md)| Inctance for request body | [optional]

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentCreatePost**
> \AndyDune\MgmtIntaxxApi\Model\PaymentResponse paymentCreatePost($body)

Create payment for order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\PaymentRequest(); // \AndyDune\MgmtIntaxxApi\Model\PaymentRequest | Inctance for request body

try {
    $result = $apiInstance->paymentCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\PaymentRequest**](../Model/PaymentRequest.md)| Inctance for request body | [optional]

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentLastPaymentDataPost**
> \AndyDune\MgmtIntaxxApi\Model\PaymentResponse paymentLastPaymentDataPost($body)

Get last payment data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\PaymentRequest(); // \AndyDune\MgmtIntaxxApi\Model\PaymentRequest | Inctance for request body

try {
    $result = $apiInstance->paymentLastPaymentDataPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentLastPaymentDataPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\PaymentRequest**](../Model/PaymentRequest.md)| Inctance for request body | [optional]

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pfsAccountInfoPost**
> \AndyDune\MgmtIntaxxApi\Model\PfsAccount pfsAccountInfoPost($body)

Get accunt info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\PfsAccountRequest(); // \AndyDune\MgmtIntaxxApi\Model\PfsAccountRequest | 

try {
    $result = $apiInstance->pfsAccountInfoPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->pfsAccountInfoPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\PfsAccountRequest**](../Model/PfsAccountRequest.md)|  |

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\PfsAccount**](../Model/PfsAccount.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pfsWebhookPost**
> \AndyDune\MgmtIntaxxApi\Model\Response pfsWebhookPost($body)

Follow pfs webhook to this url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\PfsWebhook(); // \AndyDune\MgmtIntaxxApi\Model\PfsWebhook | 

try {
    $result = $apiInstance->pfsWebhookPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->pfsWebhookPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\PfsWebhook**](../Model/PfsWebhook.md)|  |

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsConfirmPost**
> \AndyDune\MgmtIntaxxApi\Model\Response smsConfirmPost($body)

Customer sms confirmation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\SmsConfirmation(); // \AndyDune\MgmtIntaxxApi\Model\SmsConfirmation | Customer sms confirmation with hash or orderId-secretCode pair.

try {
    $result = $apiInstance->smsConfirmPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->smsConfirmPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\SmsConfirmation**](../Model/SmsConfirmation.md)| Customer sms confirmation with hash or orderId-secretCode pair. |

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKmcDataImagesPost**
> \AndyDune\MgmtIntaxxApi\Model\Response updateKmcDataImagesPost($id, $idCardFront, $idCardBack, $powerOfAttorneySign, $powerOfAttorneySignAuto)

Upload KMC files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$idCardFront = "idCardFront_example"; // string | 
$idCardBack = "idCardBack_example"; // string | 
$powerOfAttorneySign = "powerOfAttorneySign_example"; // string | 
$powerOfAttorneySignAuto = "powerOfAttorneySignAuto_example"; // string | 

try {
    $result = $apiInstance->updateKmcDataImagesPost($id, $idCardFront, $idCardBack, $powerOfAttorneySign, $powerOfAttorneySignAuto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateKmcDataImagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]
 **idCardFront** | **string****string**|  | [optional]
 **idCardBack** | **string****string**|  | [optional]
 **powerOfAttorneySign** | **string****string**|  | [optional]
 **powerOfAttorneySignAuto** | **string****string**|  | [optional]

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKmcDataPost**
> \AndyDune\MgmtIntaxxApi\Model\Response updateKmcDataPost($body)

Upload KMC data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\KmcData(); // \AndyDune\MgmtIntaxxApi\Model\KmcData | Kmc data are string and integer

try {
    $result = $apiInstance->updateKmcDataPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateKmcDataPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\KmcData**](../Model/KmcData.md)| Kmc data are string and integer |

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderPost**
> \AndyDune\MgmtIntaxxApi\Model\Response updateOrderPost($body)

Update customer data for order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\Order(); // \AndyDune\MgmtIntaxxApi\Model\Order | Order and customer datails. Email and likn to product can not be updated. Id parameter is required.

try {
    $result = $apiInstance->updateOrderPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\Order**](../Model/Order.md)| Order and customer datails. Email and likn to product can not be updated. Id parameter is required. |

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadImagesPost**
> \AndyDune\MgmtIntaxxApi\Model\Response uploadImagesPost($id, $selfie, $signature)

Upload selfie, signature and maybe more

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$selfie = "selfie_example"; // string | 
$signature = "signature_example"; // string | 

try {
    $result = $apiInstance->uploadImagesPost($id, $selfie, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadImagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]
 **selfie** | **string****string**|  | [optional]
 **signature** | **string****string**|  | [optional]

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadOrderFilePost**
> \AndyDune\MgmtIntaxxApi\Model\Response uploadOrderFilePost($orderId, $title, $name, $file)

Upload order file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | 
$title = "title_example"; // string | 
$name = "name_example"; // string | 
$file = "file_example"; // string | 

try {
    $result = $apiInstance->uploadOrderFilePost($orderId, $title, $name, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadOrderFilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**|  | [optional]
 **title** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **file** | **string****string**|  | [optional]

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **valueVariantsPost**
> \AndyDune\MgmtIntaxxApi\Model\Response valueVariantsPost($body)

Get available value variants

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AndyDune\MgmtIntaxxApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new AndyDune\MgmtIntaxxApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AndyDune\MgmtIntaxxApi\Model\ValueVariantRequest(); // \AndyDune\MgmtIntaxxApi\Model\ValueVariantRequest | 

try {
    $result = $apiInstance->valueVariantsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->valueVariantsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AndyDune\MgmtIntaxxApi\Model\ValueVariantRequest**](../Model/ValueVariantRequest.md)|  |

### Return type

[**\AndyDune\MgmtIntaxxApi\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

