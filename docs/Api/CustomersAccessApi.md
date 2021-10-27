# Jalismrs\Stalactite\Client\Data\CustomersAccessApi

All URIs are relative to https://stalactite.jalis.pro/data.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerAccessClearance()**](CustomersAccessApi.md#getCustomerAccessClearance) | **GET** /customers/{customerUid}/access/{domainUid} | 
[**getMyCustomerAccessClearance()**](CustomersAccessApi.md#getMyCustomerAccessClearance) | **GET** /customers/me/access/{uid} | 


## `getCustomerAccessClearance()`

```php
getCustomerAccessClearance($customer_uid, $domain_uid): \Jalismrs\Stalactite\Client\Data\Model\AccessClearance
```



Get customer's access clearance based on its uid and the domain uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\CustomersAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_uid = 'customer_uid_example'; // string | The uid of the customer you want the access clearance for
$domain_uid = 'domain_uid_example'; // string | The uid of the domain you want the access clearance for

try {
    $result = $apiInstance->getCustomerAccessClearance($customer_uid, $domain_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersAccessApi->getCustomerAccessClearance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_uid** | **string**| The uid of the customer you want the access clearance for |
 **domain_uid** | **string**| The uid of the domain you want the access clearance for |

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\AccessClearance**](../Model/AccessClearance.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyCustomerAccessClearance()`

```php
getMyCustomerAccessClearance($uid): \Jalismrs\Stalactite\Client\Data\Model\AccessClearance
```



Get my customer access clearance based on the domain uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\CustomersAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | The uid of the domain you want the access clearance for

try {
    $result = $apiInstance->getMyCustomerAccessClearance($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersAccessApi->getMyCustomerAccessClearance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The uid of the domain you want the access clearance for |

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\AccessClearance**](../Model/AccessClearance.md)

### Authorization

[StalactiteToken](../../README.md#StalactiteToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
