# SwaggerClient-php
[![Packagist Version](https://img.shields.io/packagist/v/andydune/mgmt-intaxx-api.svg?style=flat-square)](https://packagist.org/packages/andydune/mgmt-intaxx-api)
[![Total Downloads](https://img.shields.io/packagist/dt/andydune/mgmt-intaxx-api.svg?style=flat-square)](https://packagist.org/packages/andydune/mgmt-intaxx-api)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.7.3
- Package version: 1.7.3
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
composer require andydune/mgmt-intaxx-api
```
Or if composer was not installed globally:
```
php composer.phar require andydune/mgmt-intaxx-api
```
Or edit your `composer.json`:
```
"require" : {
     "andydune/mgmt-intaxx-api": "^1"
}

```
And execute command:
```
php composer.phar update andydune/mgmt-intaxx-api
```

### Inject into code

```php
    require_once('/project_root/vendor/autoload.php');
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
$config->setHost('https://mgmt.intaxx.com/api/v1');

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
*DefaultApi* | [**createOrderPost**](docs/Api/DefaultApi.md#createorderpost) | **POST** /create-order | Create order with product of given brand
*DefaultApi* | [**customerPincodeCheckPost**](docs/Api/DefaultApi.md#customerpincodecheckpost) | **POST** /customer/pincode-check | Request to check customer pincode.
*DefaultApi* | [**dataGet**](docs/Api/DefaultApi.md#dataget) | **GET** /data | Check customer pincode.
*DefaultApi* | [**emailConfirmPost**](docs/Api/DefaultApi.md#emailconfirmpost) | **POST** /email-confirm | Customer email confirmation.
*DefaultApi* | [**smsConfirmPost**](docs/Api/DefaultApi.md#smsconfirmpost) | **POST** /sms-confirm | Customer sms confirmation.
*DefaultApi* | [**uploadImagesPost**](docs/Api/DefaultApi.md#uploadimagespost) | **POST** /upload-images | Upload selfie, signature and maybe more

## Documentation For Models

 - [CreditRequestInfo](docs/Model/CreditRequestInfo.md)
 - [EmailConfirmation](docs/Model/EmailConfirmation.md)
 - [Images](docs/Model/Images.md)
 - [Order](docs/Model/Order.md)
 - [OrderItem](docs/Model/OrderItem.md)
 - [PincodeCheck](docs/Model/PincodeCheck.md)
 - [Response](docs/Model/Response.md)
 - [SmsConfirmation](docs/Model/SmsConfirmation.md)

## Documentation For Authorization


## ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


## Author


