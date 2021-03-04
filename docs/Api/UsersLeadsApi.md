# Jalismrs\Stalactite\Client\Data\UsersLeadsApi

All URIs are relative to https://stalactite.jalis.dev/data.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserLeads()**](UsersLeadsApi.md#addUserLeads) | **POST** /users/{uid}/leads | 
[**getUserLeads()**](UsersLeadsApi.md#getUserLeads) | **GET** /users/{uid}/leads | 
[**removeUserLeads()**](UsersLeadsApi.md#removeUserLeads) | **DELETE** /users/{uid}/leads | 


## `addUserLeads()`

```php
addUserLeads($uid, $update_user_leads_request)
```



Assign leads to an user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\UsersLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string
$update_user_leads_request = new \Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest(); // \Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest

try {
    $apiInstance->addUserLeads($uid, $update_user_leads_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersLeadsApi->addUserLeads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**|  |
 **update_user_leads_request** | [**\Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest**](../Model/UpdateUserLeadsRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserLeads()`

```php
getUserLeads($uid): \Jalismrs\Stalactite\Client\Data\Model\Post[]
```



Get the leads of an user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\UsersLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string

try {
    $result = $apiInstance->getUserLeads($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersLeadsApi->getUserLeads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**|  |

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\Post[]**](../Model/Post.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeUserLeads()`

```php
removeUserLeads($uid, $update_user_leads_request)
```



Remove leads to an user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\UsersLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string
$update_user_leads_request = new \Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest(); // \Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest

try {
    $apiInstance->removeUserLeads($uid, $update_user_leads_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersLeadsApi->removeUserLeads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**|  |
 **update_user_leads_request** | [**\Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest**](../Model/UpdateUserLeadsRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
