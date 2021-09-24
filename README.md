# SwaggerClient-php

[![Packagist Version](https://img.shields.io/packagist/v/andydune/mgmt-intaxx-api.svg?style=flat-square)](https://packagist.org/packages/andydune/mgmt-intaxx-api)
[![Total Downloads](https://img.shields.io/packagist/dt/andydune/mgmt-intaxx-api.svg?style=flat-square)](https://packagist.org/packages/andydune/mgmt-intaxx-api)

No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.11.0
- Package version: 1.14.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/andydune/mgmt-intaxx-api.git"
    }
  ],
  "require": {
    "andydune/mgmt-intaxx-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:


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

## Documentation for API Endpoints

All URIs are relative to *{protocol}://{domain}/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**cardClientCompanyAssignPost**](docs/Api/DefaultApi.md#cardclientcompanyassignpost) | **POST** /card-client-company/assign | Assign card client company to order
*DefaultApi* | [**cardClientCompanyAvailableVariantsPost**](docs/Api/DefaultApi.md#cardclientcompanyavailablevariantspost) | **POST** /card-client-company/available-variants | Get available variants of card client company
*DefaultApi* | [**createOrderPost**](docs/Api/DefaultApi.md#createorderpost) | **POST** /create-order | Create order with product of given brand
*DefaultApi* | [**customerPincodeCheckPost**](docs/Api/DefaultApi.md#customerpincodecheckpost) | **POST** /customer/pincode-check | Request to check customer pincode.
*DefaultApi* | [**dataGet**](docs/Api/DefaultApi.md#dataget) | **GET** /data | Basic data.
*DefaultApi* | [**emailConfirmPost**](docs/Api/DefaultApi.md#emailconfirmpost) | **POST** /email-confirm | Customer email confirmation.
*DefaultApi* | [**getOrderDataPost**](docs/Api/DefaultApi.md#getorderdatapost) | **POST** /get-order-data | Full order data
*DefaultApi* | [**orderActionExecutePost**](docs/Api/DefaultApi.md#orderactionexecutepost) | **POST** /order-action-execute | Execute order action with code
*DefaultApi* | [**orderImagePost**](docs/Api/DefaultApi.md#orderimagepost) | **POST** /order-image | Get order image with code
*DefaultApi* | [**orderSendSmsWithTemplatePost**](docs/Api/DefaultApi.md#ordersendsmswithtemplatepost) | **POST** /order-send-sms-with-template | Send SMS for order with brand sms template
*DefaultApi* | [**paymentConditionsPost**](docs/Api/DefaultApi.md#paymentconditionspost) | **POST** /payment/conditions | Check conditions for payment creation
*DefaultApi* | [**paymentCreatePost**](docs/Api/DefaultApi.md#paymentcreatepost) | **POST** /payment/create | Create payment for order
*DefaultApi* | [**paymentLastPaymentDataPost**](docs/Api/DefaultApi.md#paymentlastpaymentdatapost) | **POST** /payment/last-payment-data | Get last payment data
*DefaultApi* | [**pfsAccountInfoPost**](docs/Api/DefaultApi.md#pfsaccountinfopost) | **POST** /pfs/account/info | Get accunt info
*DefaultApi* | [**pfsWebhookPost**](docs/Api/DefaultApi.md#pfswebhookpost) | **POST** /pfs/webhook | Follow pfs webhook to this url
*DefaultApi* | [**smsConfirmPost**](docs/Api/DefaultApi.md#smsconfirmpost) | **POST** /sms-confirm | Customer sms confirmation.
*DefaultApi* | [**updateKmcDataImagesPost**](docs/Api/DefaultApi.md#updatekmcdataimagespost) | **POST** /update-kmc-data-images | Upload KMC files
*DefaultApi* | [**updateKmcDataPost**](docs/Api/DefaultApi.md#updatekmcdatapost) | **POST** /update-kmc-data | Upload KMC data
*DefaultApi* | [**updateOrderPost**](docs/Api/DefaultApi.md#updateorderpost) | **POST** /update-order | Update customer data for order
*DefaultApi* | [**uploadImagesPost**](docs/Api/DefaultApi.md#uploadimagespost) | **POST** /upload-images | Upload selfie, signature and maybe more

## Documentation For Models

- [CreditRequestInfo](docs/Model/CreditRequestInfo.md)
- [EmailConfirmation](docs/Model/EmailConfirmation.md)
- [Images](docs/Model/Images.md)
- [KmcData](docs/Model/KmcData.md)
- [KmcDataImages](docs/Model/KmcDataImages.md)
- [Order](docs/Model/Order.md)
- [OrderActionExecuteRequest](docs/Model/OrderActionExecuteRequest.md)
- [OrderCardClientCompanyAssignRerquest](docs/Model/OrderCardClientCompanyAssignRerquest.md)
- [OrderCardClientCompanyAssignResponse](docs/Model/OrderCardClientCompanyAssignResponse.md)
- [OrderCardClientCompanyAssignResponseData](docs/Model/OrderCardClientCompanyAssignResponseData.md)
- [OrderCardClientCompanyAvailableVariantsResponse](docs/Model/OrderCardClientCompanyAvailableVariantsResponse.md)
- [OrderCardClientCompanyItem](docs/Model/OrderCardClientCompanyItem.md)
- [OrderDataRequest](docs/Model/OrderDataRequest.md)
- [OrderDataResponse](docs/Model/OrderDataResponse.md)
- [OrderImageRequest](docs/Model/OrderImageRequest.md)
- [OrderItem](docs/Model/OrderItem.md)
- [OrderMarks](docs/Model/OrderMarks.md)
- [Payment](docs/Model/Payment.md)
- [PaymentRequest](docs/Model/PaymentRequest.md)
- [PaymentResponse](docs/Model/PaymentResponse.md)
- [PfsAccount](docs/Model/PfsAccount.md)
- [PfsAccountInitialData](docs/Model/PfsAccountInitialData.md)
- [PfsAccountInitialDataUserdefined](docs/Model/PfsAccountInitialDataUserdefined.md)
- [PfsAccountRequest](docs/Model/PfsAccountRequest.md)
- [PfsWebhook](docs/Model/PfsWebhook.md)
- [PincodeCheck](docs/Model/PincodeCheck.md)
- [Response](docs/Model/Response.md)
- [SmsConfirmation](docs/Model/SmsConfirmation.md)
- [SmsWithBrandTemplate](docs/Model/SmsWithBrandTemplate.md)

## Documentation For Authorization


## ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


## Autho