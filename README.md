# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 0.1
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

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
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *http://passkit.test*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EventApi* | [**eventIndexGet**](docs/Api/EventApi.md#eventindexget) | **GET** /api/event/{id} | 
*EventApi* | [**eventIndexPost**](docs/Api/EventApi.md#eventindexpost) | **POST** /api/event | 
*EventApi* | [**eventIndexPut**](docs/Api/EventApi.md#eventindexput) | **PUT** /api/event | 
*EventApi* | [**eventsIndexGet**](docs/Api/EventApi.md#eventsindexget) | **GET** /api/events | 
*PassApi* | [**passIndexGet**](docs/Api/PassApi.md#passindexget) | **GET** /api/pass/{id} | 
*PassApi* | [**passIndexPost**](docs/Api/PassApi.md#passindexpost) | **POST** /api/pass | 
*PassApi* | [**passIndexPut**](docs/Api/PassApi.md#passindexput) | **PUT** /api/pass | 
*PassApi* | [**passesIndexGet**](docs/Api/PassApi.md#passesindexget) | **GET** /api/passes | 
*TemplateApi* | [**templateIndexGet**](docs/Api/TemplateApi.md#templateindexget) | **GET** /api/template/{id} | 
*TemplateApi* | [**templateIndexPost**](docs/Api/TemplateApi.md#templateindexpost) | **POST** /api/template | 
*TemplateApi* | [**templateIndexPut**](docs/Api/TemplateApi.md#templateindexput) | **PUT** /api/template | 
*TemplateApi* | [**templatesIndexGet**](docs/Api/TemplateApi.md#templatesindexget) | **GET** /api/templates | 


## Documentation For Models

 - [Event](docs/Model/Event.md)
 - [NewEvent](docs/Model/NewEvent.md)
 - [NewPass](docs/Model/NewPass.md)
 - [NewTemplate](docs/Model/NewTemplate.md)
 - [Pass](docs/Model/Pass.md)
 - [Template](docs/Model/Template.md)


## Documentation For Authorization



## passkit_auth


- **Type**: OAuth
- **Flow**: password
- **Authorization URL**: 
- **Scopes**: N/A


## Author


