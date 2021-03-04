# Jalismrs\Stalactite\Client\Data\UsersPostsApi

All URIs are relative to https://stalactite.jalis.dev/data.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserPosts()**](UsersPostsApi.md#addUserPosts) | **POST** /users/{uid}/posts | 
[**getUserPosts()**](UsersPostsApi.md#getUserPosts) | **GET** /users/{uid}/posts | 
[**removeUserPosts()**](UsersPostsApi.md#removeUserPosts) | **DELETE** /users/{uid}/posts | 


## `addUserPosts()`

```php
addUserPosts($uid, $update_user_posts_request)
```



Assign posts to an user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\UsersPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string
$update_user_posts_request = new \Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest(); // \Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest

try {
    $apiInstance->addUserPosts($uid, $update_user_posts_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersPostsApi->addUserPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**|  |
 **update_user_posts_request** | [**\Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest**](../Model/UpdateUserPostsRequest.md)|  |

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

## `getUserPosts()`

```php
getUserPosts($uid): \Jalismrs\Stalactite\Client\Data\Model\Post[]
```



Get the posts of an user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\UsersPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string

try {
    $result = $apiInstance->getUserPosts($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersPostsApi->getUserPosts: ', $e->getMessage(), PHP_EOL;
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

## `removeUserPosts()`

```php
removeUserPosts($uid, $update_user_posts_request)
```



Remove posts to an user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\UsersPostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string
$update_user_posts_request = new \Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest(); // \Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest

try {
    $apiInstance->removeUserPosts($uid, $update_user_posts_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersPostsApi->removeUserPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**|  |
 **update_user_posts_request** | [**\Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest**](../Model/UpdateUserPostsRequest.md)|  |

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
