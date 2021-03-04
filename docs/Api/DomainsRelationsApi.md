# Jalismrs\Stalactite\Client\Data\DomainsRelationsApi

All URIs are relative to https://stalactite.jalis.dev/data.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCustomerRelations()**](DomainsRelationsApi.md#addCustomerRelations) | **POST** /domains/{uid}/relations/customers | 
[**addUserRelations()**](DomainsRelationsApi.md#addUserRelations) | **POST** /domains/{uid}/relations/users | 
[**getDomainRelations()**](DomainsRelationsApi.md#getDomainRelations) | **GET** /domains/{uid}/relations | 


## `addCustomerRelations()`

```php
addCustomerRelations($uid, $add_customer_relations_request): \Jalismrs\Stalactite\Client\Data\Model\DomainCustomerRelation[]
```



Add customer relations to a domain based on its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\DomainsRelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the domain
$add_customer_relations_request = new \Jalismrs\Stalactite\Client\Data\Model\AddCustomerRelationsRequest(); // \Jalismrs\Stalactite\Client\Data\Model\AddCustomerRelationsRequest

try {
    $result = $apiInstance->addCustomerRelations($uid, $add_customer_relations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsRelationsApi->addCustomerRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the domain |
 **add_customer_relations_request** | [**\Jalismrs\Stalactite\Client\Data\Model\AddCustomerRelationsRequest**](../Model/AddCustomerRelationsRequest.md)|  |

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\DomainCustomerRelation[]**](../Model/DomainCustomerRelation.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addUserRelations()`

```php
addUserRelations($uid, $add_user_relations_request): \Jalismrs\Stalactite\Client\Data\Model\DomainUserRelation2[]
```



Add user relations to a domain based on its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\DomainsRelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the domain
$add_user_relations_request = new \Jalismrs\Stalactite\Client\Data\Model\AddUserRelationsRequest(); // \Jalismrs\Stalactite\Client\Data\Model\AddUserRelationsRequest

try {
    $result = $apiInstance->addUserRelations($uid, $add_user_relations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsRelationsApi->addUserRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the domain |
 **add_user_relations_request** | [**\Jalismrs\Stalactite\Client\Data\Model\AddUserRelationsRequest**](../Model/AddUserRelationsRequest.md)|  |

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\DomainUserRelation2[]**](../Model/DomainUserRelation2.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainRelations()`

```php
getDomainRelations($uid): \Jalismrs\Stalactite\Client\Data\Model\GetDomainRelationsResponse
```



Get all domain's relations based on its uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\DomainsRelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the domain

try {
    $result = $apiInstance->getDomainRelations($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsRelationsApi->getDomainRelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the domain |

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\GetDomainRelationsResponse**](../Model/GetDomainRelationsResponse.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
