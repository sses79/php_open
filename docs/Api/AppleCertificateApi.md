# OpenAPI\Client\AppleCertificateApi

All URIs are relative to *http://passkit.test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**certIndexGet**](AppleCertificateApi.md#certIndexGet) | **GET** /api/cert/{id} | 
[**certIndexPost**](AppleCertificateApi.md#certIndexPost) | **POST** /api/cert | 
[**certIndexPut**](AppleCertificateApi.md#certIndexPut) | **PUT** /api/cert | 
[**certsIndexGet**](AppleCertificateApi.md#certsIndexGet) | **GET** /api/certs | 



## certIndexGet

> \OpenAPI\Client\Model\ListCert certIndexGet($id)



Get cert by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppleCertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->certIndexGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppleCertificateApi->certIndexGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ListCert**](../Model/ListCert.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## certIndexPost

> \OpenAPI\Client\Model\Cert certIndexPost($new_cert)



Upload new Cert

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppleCertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_cert = new \OpenAPI\Client\Model\NewCert(); // \OpenAPI\Client\Model\NewCert | 

try {
    $result = $apiInstance->certIndexPost($new_cert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppleCertificateApi->certIndexPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_cert** | [**\OpenAPI\Client\Model\NewCert**](../Model/NewCert.md)|  |

### Return type

[**\OpenAPI\Client\Model\Cert**](../Model/Cert.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## certIndexPut

> \OpenAPI\Client\Model\Cert certIndexPut($cert)



Renew cert

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppleCertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cert = new \OpenAPI\Client\Model\Cert(); // \OpenAPI\Client\Model\Cert | 

try {
    $result = $apiInstance->certIndexPut($cert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppleCertificateApi->certIndexPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cert** | [**\OpenAPI\Client\Model\Cert**](../Model/Cert.md)|  |

### Return type

[**\OpenAPI\Client\Model\Cert**](../Model/Cert.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## certsIndexGet

> \OpenAPI\Client\Model\ListCert[] certsIndexGet()



Get All Apple Certificates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppleCertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->certsIndexGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppleCertificateApi->certsIndexGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ListCert[]**](../Model/ListCert.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

