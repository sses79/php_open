# OpenAPI\Client\TemplateApi

All URIs are relative to *http://passkit.test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**templateIndexGet**](TemplateApi.md#templateIndexGet) | **GET** /api/template/{id} | 
[**templateIndexPost**](TemplateApi.md#templateIndexPost) | **POST** /api/template | 
[**templateIndexPut**](TemplateApi.md#templateIndexPut) | **PUT** /api/template | 
[**templatesIndexGet**](TemplateApi.md#templatesIndexGet) | **GET** /api/templates | 



## templateIndexGet

> \OpenAPI\Client\Model\Template templateIndexGet($id)



Get template by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->templateIndexGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateIndexGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Template**](../Model/Template.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## templateIndexPost

> \OpenAPI\Client\Model\Template templateIndexPost($new_template)



Create new template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_template = new \OpenAPI\Client\Model\NewTemplate(); // \OpenAPI\Client\Model\NewTemplate | 

try {
    $result = $apiInstance->templateIndexPost($new_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateIndexPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_template** | [**\OpenAPI\Client\Model\NewTemplate**](../Model/NewTemplate.md)|  |

### Return type

[**\OpenAPI\Client\Model\Template**](../Model/Template.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## templateIndexPut

> \OpenAPI\Client\Model\Template templateIndexPut($template)



Update template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template = new \OpenAPI\Client\Model\Template(); // \OpenAPI\Client\Model\Template | 

try {
    $result = $apiInstance->templateIndexPut($template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateIndexPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template** | [**\OpenAPI\Client\Model\Template**](../Model/Template.md)|  |

### Return type

[**\OpenAPI\Client\Model\Template**](../Model/Template.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## templatesIndexGet

> templatesIndexGet()



Get All Templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->templatesIndexGet();
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templatesIndexGet: ', $e->getMessage(), PHP_EOL;
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

