# SwaggerClient-php
Connection of Troops & DPAE

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0-oas3
- Package version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/smart-gamma/dpae-api-sdk.git"
    }
  ],
  "require": {
    "smart-gamma/dpae-api-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = DPAE\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DPAE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DPAE\SDK\ConsultationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractId = 56; // int | 

try {
    $result = $apiInstance->getConsultation($contractId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsultationApi->getConsultation: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/DPAE/1.0.0-oas3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ConsultationApi* | [**getConsultation**](docs/Api/ConsultationApi.md#getconsultation) | **GET** /lister-retours-flux/1.0/{contractId} | 
*DepotApi* | [**sendDeclaration**](docs/Api/DepotApi.md#senddeclaration) | **POST** /deposer-dsn/1.0/ | 
*TelechargementApi* | [**getTelechargement**](docs/Api/TelechargementApi.md#gettelechargement) | **GET** /telecharger-retour/1.0/{contractId}/{id} | 

## Documentation For Models

 - [Contract](docs/Model/Contract.md)
 - [DuesGroup](docs/Model/DuesGroup.md)
 - [Employee](docs/Model/Employee.md)
 - [EmployeeComplement](docs/Model/EmployeeComplement.md)
 - [EmployeeGroup](docs/Model/EmployeeGroup.md)
 - [EmployeeIdentity](docs/Model/EmployeeIdentity.md)
 - [EmployeeIdentityBirth](docs/Model/EmployeeIdentityBirth.md)
 - [EmployeeIdentityNni](docs/Model/EmployeeIdentityNni.md)
 - [Employer](docs/Model/Employer.md)
 - [EmployerAddress](docs/Model/EmployerAddress.md)
 - [EmployerContact](docs/Model/EmployerContact.md)
 - [EmployerContactPhone](docs/Model/EmployerContactPhone.md)
 - [EmployerIdentity](docs/Model/EmployerIdentity.md)
 - [Response](docs/Model/Response.md)
 - [Upload](docs/Model/Upload.md)

## Documentation For Authorization


## ApiKeyAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author



