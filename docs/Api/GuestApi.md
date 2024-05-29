# WebnessStudio\MPL\Tracking\GuestApi

All URIs are relative to https://sandbox.api.posta.hu/v2/nyomkovetes, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**guest()**](GuestApi.md#guest) | **POST** /guest | A „registered” végponttal megegyező működés. Ugyanakkor a kiadott adat nem tartalmaz súly, méret és érték információkat. / The same operation as the ‘registered’ endpoint. However, the published data does not contain weight, size and value information. |


## `guest()`

```php
guest($request, $x_request_id, $x_correlation_id): \WebnessStudio\MPL\Tracking\Model\GuestResponse
```

A „registered” végponttal megegyező működés. Ugyanakkor a kiadott adat nem tartalmaz súly, méret és érték információkat. / The same operation as the ‘registered’ endpoint. However, the published data does not contain weight, size and value information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic_auth
$config = WebnessStudio\MPL\Tracking\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = WebnessStudio\MPL\Tracking\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebnessStudio\MPL\Tracking\Api\GuestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \WebnessStudio\MPL\Tracking\Model\Request(); // \WebnessStudio\MPL\Tracking\Model\Request
$x_request_id = 'x_request_id_example'; // string | The unique request ID
$x_correlation_id = 'x_correlation_id_example'; // string | The unique correlation ID

try {
    $result = $apiInstance->guest($request, $x_request_id, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestApi->guest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request** | [**\WebnessStudio\MPL\Tracking\Model\Request**](../Model/Request.md)|  | |
| **x_request_id** | **string**| The unique request ID | [optional] |
| **x_correlation_id** | **string**| The unique correlation ID | [optional] |

### Return type

[**\WebnessStudio\MPL\Tracking\Model\GuestResponse**](../Model/GuestResponse.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
