# OpenAPI\Client\PassApi

All URIs are relative to *http://passkit.test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**passIndexGet**](PassApi.md#passIndexGet) | **GET** /api/pass/{id} | 
[**passIndexPost**](PassApi.md#passIndexPost) | **POST** /api/pass | 
[**passIndexPut**](PassApi.md#passIndexPut) | **PUT** /api/pass | 
[**passesIndexGet**](PassApi.md#passesIndexGet) | **GET** /api/passes | 



## passIndexGet

> \OpenAPI\Client\Model\Pass passIndexGet($id)



Get pass by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->passIndexGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PassApi->passIndexGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Pass**](../Model/Pass.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## passIndexPost

> \OpenAPI\Client\Model\Pass passIndexPost($new_pass)



Create new pass

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_pass = new \OpenAPI\Client\Model\NewPass(); // \OpenAPI\Client\Model\NewPass | 

try {
    $result = $apiInstance->passIndexPost($new_pass);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PassApi->passIndexPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_pass** | [**\OpenAPI\Client\Model\NewPass**](../Model/NewPass.md)|  |

### Return type

[**\OpenAPI\Client\Model\Pass**](../Model/Pass.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## passIndexPut

> \OpenAPI\Client\Model\Pass passIndexPut($pass)



Update pass

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pass = new \OpenAPI\Client\Model\Pass(); // \OpenAPI\Client\Model\Pass | 

try {
    $result = $apiInstance->passIndexPut($pass);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PassApi->passIndexPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pass** | [**\OpenAPI\Client\Model\Pass**](../Model/Pass.md)|  |

### Return type

[**\OpenAPI\Client\Model\Pass**](../Model/Pass.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## passesIndexGet

> passesIndexGet()



Get All Passes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->passesIndexGet();
} catch (Exception $e) {
    echo 'Exception when calling PassApi->passesIndexGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

