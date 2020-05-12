# OpenAPI\Client\EventApi

All URIs are relative to *http://passkit.test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventIndexGet**](EventApi.md#eventIndexGet) | **GET** /api/event/{id} | 
[**eventIndexPost**](EventApi.md#eventIndexPost) | **POST** /api/event | 
[**eventIndexPut**](EventApi.md#eventIndexPut) | **PUT** /api/event | 
[**eventsIndexGet**](EventApi.md#eventsIndexGet) | **GET** /api/events | 



## eventIndexGet

> \OpenAPI\Client\Model\NewEvent eventIndexGet($id)



Get event by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->eventIndexGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->eventIndexGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\NewEvent**](../Model/NewEvent.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## eventIndexPost

> \OpenAPI\Client\Model\Event eventIndexPost($new_event)



Create new event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_event = new \OpenAPI\Client\Model\NewEvent(); // \OpenAPI\Client\Model\NewEvent | 

try {
    $result = $apiInstance->eventIndexPost($new_event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->eventIndexPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_event** | [**\OpenAPI\Client\Model\NewEvent**](../Model/NewEvent.md)|  |

### Return type

[**\OpenAPI\Client\Model\Event**](../Model/Event.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## eventIndexPut

> \OpenAPI\Client\Model\Event eventIndexPut($event)



Update event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event = new \OpenAPI\Client\Model\Event(); // \OpenAPI\Client\Model\Event | 

try {
    $result = $apiInstance->eventIndexPut($event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->eventIndexPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event** | [**\OpenAPI\Client\Model\Event**](../Model/Event.md)|  |

### Return type

[**\OpenAPI\Client\Model\Event**](../Model/Event.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## eventsIndexGet

> AnyType eventsIndexGet()



Get All Events

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: passkit_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->eventsIndexGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->eventsIndexGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**AnyType**](../Model/AnyType.md)

### Authorization

[passkit_auth](../../README.md#passkit_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

