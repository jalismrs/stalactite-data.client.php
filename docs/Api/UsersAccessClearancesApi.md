# Jalismrs\Stalactite\Client\Data\UsersAccessClearancesApi

All URIs are relative to https://stalactite.jalis.dev/data.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMyAccessClearances()**](UsersAccessClearancesApi.md#getMyAccessClearances) | **GET** /users/me/access/{domainUid} | 
[**getUserAccessClearances()**](UsersAccessClearancesApi.md#getUserAccessClearances) | **GET** /users/{userUid}/access/{domainUid} | 


## `getMyAccessClearances()`

```php
getMyAccessClearances($domain_uid): \Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]
```



Get my access clearances as an user (based on the authentication token)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\UsersAccessClearancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_uid = 'domain_uid_example'; // string

try {
    $result = $apiInstance->getMyAccessClearances($domain_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersAccessClearancesApi->getMyAccessClearances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_uid** | **string**|  |

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]**](../Model/AccessClearance.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserAccessClearances()`

```php
getUserAccessClearances($user_uid, $domain_uid): \Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]
```



Get the access clearances of an user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\UsersAccessClearancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uid = 'user_uid_example'; // string
$domain_uid = 'domain_uid_example'; // string

try {
    $result = $apiInstance->getUserAccessClearances($user_uid, $domain_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersAccessClearancesApi->getUserAccessClearances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uid** | **string**|  |
 **domain_uid** | **string**|  |

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]**](../Model/AccessClearance.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
