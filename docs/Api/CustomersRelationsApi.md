# Jalismrs\Stalactite\Client\Data\CustomersRelationsApi

All URIs are relative to https://stalactite.jalis.pro/data.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerRelations()**](CustomersRelationsApi.md#getCustomerRelations) | **GET** /customers/{uid}/relations | 
[**getMyCustomerRelations()**](CustomersRelationsApi.md#getMyCustomerRelations) | **GET** /customers/me/relations | 


## `getCustomerRelations()`

```php
getCustomerRelations($uid): \Jalismrs\Stalactite\Client\Data\Model\DomainCustomerRelation[]
```



Get customer relations based on its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\CustomersRelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string

try {
    $result = $apiInstance->getCustomerRelations($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersRelationsApi->getCustomerRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**|  |

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\DomainCustomerRelation[]**](../Model/DomainCustomerRelation.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyCustomerRelations()`

```php
getMyCustomerRelations(): \Jalismrs\Stalactite\Client\Data\Model\DomainCustomerRelation[]
```



Get my customer relations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\CustomersRelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMyCustomerRelations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersRelationsApi->getMyCustomerRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\DomainCustomerRelation[]**](../Model/DomainCustomerRelation.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
