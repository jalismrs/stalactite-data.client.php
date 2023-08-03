# Jalismrs\Stalactite\Client\Data\HealthApi

All URIs are relative to https://stalactite.jalis.dev/data, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiHealth()**](HealthApi.md#getApiHealth) | **GET** /health |  |


## `getApiHealth()`

```php
getApiHealth(): \Jalismrs\Stalactite\Client\Data\Model\HealthResponse
```



Get API health status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HealthToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-HEALTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-HEALTH-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApiHealth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->getApiHealth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Jalismrs\Stalactite\Client\Data\Model\HealthResponse**](../Model/HealthResponse.md)

### Authorization

[HealthToken](../../README.md#HealthToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
