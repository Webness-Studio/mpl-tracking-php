# WebnessStudio\MPL\Tracking\RegisteredApi

All URIs are relative to https://sandbox.api.posta.hu/v2/nyomkovetes, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**registered()**](RegisteredApi.md#registered) | **POST** /registered | Maximum 1 küldeményazonosító beküldése. A korábban beküldött küldeményazonosítót nem javasoljuk újra beküldeni négy órán belül. A beküldött paramétertől (last, all) függően az információ előállítása több másodpercet is igénybe vehet. A kapott adatban a legfontosabb mező a C9 (utolsó esemény), melyről a Dokumentáció menüben részletesen tájékozódhat. / Submit only 1 mail item IDs. We do not recommend resubmitting a previously submitted mail item ID within four hours. Depending on the parameter of request (last, all), it may take several seconds to response the information. The most important field in the received data is the C9 (last event), about which detailed explanations can be found in the Documentation menu. |


## `registered()`

```php
registered($request, $x_request_id, $x_correlation_id): \WebnessStudio\MPL\Tracking\Model\RegisteredResponse
```

Maximum 1 küldeményazonosító beküldése. A korábban beküldött küldeményazonosítót nem javasoljuk újra beküldeni négy órán belül. A beküldött paramétertől (last, all) függően az információ előállítása több másodpercet is igénybe vehet. A kapott adatban a legfontosabb mező a C9 (utolsó esemény), melyről a Dokumentáció menüben részletesen tájékozódhat. / Submit only 1 mail item IDs. We do not recommend resubmitting a previously submitted mail item ID within four hours. Depending on the parameter of request (last, all), it may take several seconds to response the information. The most important field in the received data is the C9 (last event), about which detailed explanations can be found in the Documentation menu.

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


$apiInstance = new WebnessStudio\MPL\Tracking\Api\RegisteredApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \WebnessStudio\MPL\Tracking\Model\Request(); // \WebnessStudio\MPL\Tracking\Model\Request
$x_request_id = 'x_request_id_example'; // string | The unique request ID
$x_correlation_id = 'x_correlation_id_example'; // string | The unique correlation ID

try {
    $result = $apiInstance->registered($request, $x_request_id, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegisteredApi->registered: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request** | [**\WebnessStudio\MPL\Tracking\Model\Request**](../Model/Request.md)|  | |
| **x_request_id** | **string**| The unique request ID | [optional] |
| **x_correlation_id** | **string**| The unique correlation ID | [optional] |

### Return type

[**\WebnessStudio\MPL\Tracking\Model\RegisteredResponse**](../Model/RegisteredResponse.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
