# Jalismrs\Stalactite\Client\Data\UsersRelationsApi

All URIs are relative to https://stalactite.jalis.dev/data, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMyDomainRelations()**](UsersRelationsApi.md#getMyDomainRelations) | **GET** /users/me/relations |  |
| [**getUserDomainRelations()**](UsersRelationsApi.md#getUserDomainRelations) | **GET** /users/{uid}/relations |  |


## `getMyDomainRelations()`

```php
getMyDomainRelations(): \Jalismrs\Stalactite\Client\Data\Model\DomainUserRelation[]
```



Get my domain relations as an user (based on the authentication token)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\UsersRelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMyDomainRelations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersRelationsApi->getMyDomainRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\DomainUserRelation[]**](../Model/DomainUserRelation.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserDomainRelations()`

```php
getUserDomainRelations($uid): \Jalismrs\Stalactite\Client\Data\Model\DomainUserRelation[]
```



Get the domain relations of an user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\UsersRelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string

try {
    $result = $apiInstance->getUserDomainRelations($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersRelationsApi->getUserDomainRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uid** | **string**|  | |

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\DomainUserRelation[]**](../Model/DomainUserRelation.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
