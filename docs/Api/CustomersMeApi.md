# Jalismrs\Stalactite\Client\Data\CustomersMeApi

All URIs are relative to https://stalactite.jalis.pro/data.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMeAsCustomer()**](CustomersMeApi.md#getMeAsCustomer) | **GET** /customers/me | 


## `getMeAsCustomer()`

```php
getMeAsCustomer(): \Jalismrs\Stalactite\Client\Data\Model\Customer
```



Get my customer infos

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\CustomersMeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMeAsCustomer();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersMeApi->getMeAsCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\Customer**](../Model/Customer.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
