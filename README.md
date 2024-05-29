# OpenAPIClient-php

<div style='width: 100%;margin: 0px auto;'>
<div style='float: left; width:47%'>
<h1>PULL Nyomkövetés</h1>
<h2>- csomagonkénti nyomkövetés -</h2>
<div>&nbsp;</div>
<p>Csomagok egyesével történő lekérdezése szolgáló API. Célja, hogy a csomagok utolsó tranzakciójáról, vagy akár a teljes életútjáról szinkron módon információt adjon (PULL).</p>
<p>(Ha olyan nyomkövetést keres, aminél beküldhető, hogy pontosan mely csomagok legutolsó eseményeire kíváncsi, akkor arra egy másik API szolgáltatásunk alkalmas: Több csomagos pull nyomkövetés.)</p>
<p>(Ha olyan nyomkövetést keres, ami csomagazonosítók beküldése nélkül is alkalmas az információk fogadására, akkor arra egy másik API szolgáltatásunk alkalmas: Feliratkozás push nyomkövetésre.)</p>
<p>Erről az API-ról itt talál részletes leírást: <a href='https://devportal.posta.hu/sites/default/files/2020-11/MPLAPI_nyomkovetes_leiras_1.pdf'>MPLAPI_nyomkovetes_leiras_1.pdf</a></p>
<p>A végpontok működését leíró dokumentációt lentebb találja.</p>
</div>
<div style='float:right; width:47%'>
<h1>PULL TRACKING</h1>
<h2>- tracking only for 1 item -</h2>
<div>&nbsp;</div>
<p>An API enabling single tracking only for 1 parcel. Its purpose is to provide synchronous information about the last or all transactions of a given parcel (polling).</p>
<p>(If you're looking for a tracking service for large volumes of parcels, you can use our other API service, called “Pull Tracking up to 500 items”.)</p>
<p>(If you're looking for a tracking service which can be performed without submitting any tracking number, you can use our other API service, called “Push Tracking subscription”.)</p>
<p>Documentation, describing how this API work, can be found here: <a href='https://devportal.posta.hu/sites/default/files/2020-11/MPLAPI_tracking_technical_description_3.pdf'>MPLAPI_tracking_technical_description_3.pdf</a></p>
<p>Documentation describing how the endpoints work can be found below.</p>
</div>
</div>
<div style='clear: both;'>

### Az API a következő URL-eken érhető el: / This API can be accessed at the following URLs: ###
<div><table><tr><td><b>Környezet / Environment</b></td><td><b>API URL</b></td><td><b>OAuth2 Token URL</b></td></tr><tr><td>Sandbox</td><td>https://sandbox.api.posta.hu/v2/nyomkovetes</td><td>https://sandbox.api.posta.hu/oauth2/token</td></tr><tr><td>Production</td><td>https://core.api.posta.hu/v2/nyomkovetes</td><td>https://core.api.posta.hu/oauth2/token</td></tr></table>
Az API ezen az oldalon a Sandbox környezetben tesztelhető. / You can test the API on this page in the Sandbox environment.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://sandbox.api.posta.hu/v2/nyomkovetes*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*GuestApi* | [**guest**](docs/Api/GuestApi.md#guest) | **POST** /guest | A „registered” végponttal megegyező működés. Ugyanakkor a kiadott adat nem tartalmaz súly, méret és érték információkat. / The same operation as the ‘registered’ endpoint. However, the published data does not contain weight, size and value information.
*RegisteredApi* | [**registered**](docs/Api/RegisteredApi.md#registered) | **POST** /registered | Maximum 1 küldeményazonosító beküldése. A korábban beküldött küldeményazonosítót nem javasoljuk újra beküldeni négy órán belül. A beküldött paramétertől (last, all) függően az információ előállítása több másodpercet is igénybe vehet. A kapott adatban a legfontosabb mező a C9 (utolsó esemény), melyről a Dokumentáció menüben részletesen tájékozódhat. / Submit only 1 mail item IDs. We do not recommend resubmitting a previously submitted mail item ID within four hours. Depending on the parameter of request (last, all), it may take several seconds to response the information. The most important field in the received data is the C9 (last event), about which detailed explanations can be found in the Documentation menu.

## Models

- [ApiGatewayErrorResponse](docs/Model/ApiGatewayErrorResponse.md)
- [ApiGatewayErrorResponseFault](docs/Model/ApiGatewayErrorResponseFault.md)
- [ApiGatewayErrorResponseFaultDetail](docs/Model/ApiGatewayErrorResponseFaultDetail.md)
- [BackendErrorResponse](docs/Model/BackendErrorResponse.md)
- [BackendErrorResponseErrorsInner](docs/Model/BackendErrorResponseErrorsInner.md)
- [GuestResponse](docs/Model/GuestResponse.md)
- [GuestResponseTrackAndTraceInner](docs/Model/GuestResponseTrackAndTraceInner.md)
- [Registered400Response](docs/Model/Registered400Response.md)
- [RegisteredResponse](docs/Model/RegisteredResponse.md)
- [RegisteredResponseTrackAndTraceInner](docs/Model/RegisteredResponseTrackAndTraceInner.md)
- [Request](docs/Model/Request.md)

## Authorization

Authentication schemes defined for the API:
### oauth2_client_credentials

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A

### basic_auth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v2`
    - Generator version: `7.6.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
