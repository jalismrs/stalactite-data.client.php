# Jalismrs\Stalactite\Client\Data\PermissionsApi

All URIs are relative to https://stalactite.jalis.pro/data.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPermission()**](PermissionsApi.md#createPermission) | **POST** /permissions | 
[**deletePermission()**](PermissionsApi.md#deletePermission) | **DELETE** /permissions/{uid} | 
[**getPermission()**](PermissionsApi.md#getPermission) | **GET** /permissions/{uid} | 
[**getPermissions()**](PermissionsApi.md#getPermissions) | **GET** /permissions | 
[**updatePermission()**](PermissionsApi.md#updatePermission) | **PUT** /permissions/{uid} | 


## `createPermission()`

```php
createPermission($create_permission_request): \Jalismrs\Stalactite\Client\Data\Model\Permission
```



Create and get a permission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_permission_request = new \Jalismrs\Stalactite\Client\Data\Model\CreatePermissionRequest(); // \Jalismrs\Stalactite\Client\Data\Model\CreatePermissionRequest

try {
    $result = $apiInstance->createPermission($create_permission_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->createPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_permission_request** | [**\Jalismrs\Stalactite\Client\Data\Model\CreatePermissionRequest**](../Model/CreatePermissionRequest.md)|  |

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\Permission**](../Model/Permission.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePermission()`

```php
deletePermission($uid)
```



Delete a permission based on its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the permission to delete

try {
    $apiInstance->deletePermission($uid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->deletePermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the permission to delete |

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

## `getPermission()`

```php
getPermission($uid): \Jalismrs\Stalactite\Client\Data\Model\Permission
```



Get a permission by its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the permission to get

try {
    $result = $apiInstance->getPermission($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the permission to get |

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\Permission**](../Model/Permission.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPermissions()`

```php
getPermissions(): \Jalismrs\Stalactite\Client\Data\Model\Permission[]
```



Get all permissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\Permission[]**](../Model/Permission.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePermission()`

```php
updatePermission($uid, $update_permission_request)
```



Update a permission based on its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the permission to update
$update_permission_request = new \Jalismrs\Stalactite\Client\Data\Model\UpdatePermissionRequest(); // \Jalismrs\Stalactite\Client\Data\Model\UpdatePermissionRequest

try {
    $apiInstance->updatePermission($uid, $update_permission_request);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->updatePermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the permission to update |
 **update_permission_request** | [**\Jalismrs\Stalactite\Client\Data\Model\UpdatePermissionRequest**](../Model/UpdatePermissionRequest.md)|  |

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
