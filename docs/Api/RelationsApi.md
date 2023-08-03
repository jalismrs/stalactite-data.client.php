# Jalismrs\Stalactite\Client\Data\RelationsApi

All URIs are relative to https://stalactite.jalis.pro/data, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDomainCustomerRelation()**](RelationsApi.md#deleteDomainCustomerRelation) | **DELETE** /relations/customers/{uid} |  |
| [**deleteDomainUserRelation()**](RelationsApi.md#deleteDomainUserRelation) | **DELETE** /relations/users/{uid} |  |


## `deleteDomainCustomerRelation()`

```php
deleteDomainCustomerRelation($uid)
```



Delete a domainCustomerRelation based on its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\RelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the domainCustomerRelation to delete

try {
    $apiInstance->deleteDomainCustomerRelation($uid);
} catch (Exception $e) {
    echo 'Exception when calling RelationsApi->deleteDomainCustomerRelation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uid** | **string**| The uid of the domainCustomerRelation to delete | |

### Return type

void (empty response body)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDomainUserRelation()`

```php
deleteDomainUserRelation($uid)
```



Delete a domainUserRelation based on its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\RelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the domainUserRelation to delete

try {
    $apiInstance->deleteDomainUserRelation($uid);
} catch (Exception $e) {
    echo 'Exception when calling RelationsApi->deleteDomainUserRelation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uid** | **string**| The uid of the domainUserRelation to delete | |

### Return type

void (empty response body)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
