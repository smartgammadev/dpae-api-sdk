# DPAE\DepotApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/DPAE/1.0.0-oas3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendDeclaration**](DepotApi.md#senddeclaration) | **POST** /deposer-dsn/1.0/ | 

# **sendDeclaration**
> \DPAE\Model\Response sendDeclaration($body)



Submitting DPAE

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = DPAE\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DPAE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DPAE\SDK\DepotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DPAE\Model\Upload(); // \DPAE\Model\Upload | 

try {
    $result = $apiInstance->sendDeclaration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepotApi->sendDeclaration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DPAE\Model\Upload**](../Model/Upload.md)|  |

### Return type

[**\DPAE\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

