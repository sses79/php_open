# OpenAPI\Client\GoogleCredentialApi

All URIs are relative to *http://passkit.test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**credentialIndexGet**](GoogleCredentialApi.md#credentialIndexGet) | **GET** /api/credential/{id} | 
[**credentialIndexPost**](GoogleCredentialApi.md#credentialIndexPost) | **POST** /api/credential | 
[**credentialIndexPut**](GoogleCredentialApi.md#credentialIndexPut) | **PUT** /api/credential | 
[**credentialsIndexGet**](GoogleCredentialApi.md#credentialsIndexGet) | **GET** /api/credentials | 



## credentialIndexGet

> \OpenAPI\Client\Model\ListCredential credentialIndexGet($id)



Get credential by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GoogleCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->credentialIndexGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleCredentialApi->credentialIndexGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ListCredential**](../Model/ListCredential.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## credentialIndexPost

> \OpenAPI\Client\Model\ListCredential credentialIndexPost($credential)



Create new Credential

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GoogleCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential = new \OpenAPI\Client\Model\Credential(); // \OpenAPI\Client\Model\Credential | 

try {
    $result = $apiInstance->credentialIndexPost($credential);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleCredentialApi->credentialIndexPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credential** | [**\OpenAPI\Client\Model\Credential**](../Model/Credential.md)|  |

### Return type

[**\OpenAPI\Client\Model\ListCredential**](../Model/ListCredential.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## credentialIndexPut

> \OpenAPI\Client\Model\ListCredential credentialIndexPut($credential)



Edit Credential

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GoogleCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential = new \OpenAPI\Client\Model\Credential(); // \OpenAPI\Client\Model\Credential | 

try {
    $result = $apiInstance->credentialIndexPut($credential);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleCredentialApi->credentialIndexPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credential** | [**\OpenAPI\Client\Model\Credential**](../Model/Credential.md)|  |

### Return type

[**\OpenAPI\Client\Model\ListCredential**](../Model/ListCredential.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## credentialsIndexGet

> \OpenAPI\Client\Model\ListCredential[] credentialsIndexGet()



Get All Google Credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GoogleCredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->credentialsIndexGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleCredentialApi->credentialsIndexGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ListCredential[]**](../Model/ListCredential.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

