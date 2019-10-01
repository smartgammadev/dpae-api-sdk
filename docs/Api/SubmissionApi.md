# DPAE\SubmissionApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/DPAE/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendDeclaration**](SubmissionApi.md#senddeclaration) | **POST** /deposer-dsn/1.0/ | 

# **sendDeclaration**
> sendDeclaration($body)



Submitting DPAE

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = DPAE\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DPAE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DPAE\SDK\SubmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DPAE\Model\Upload(); // \DPAE\Model\Upload | 

try {
    $apiInstance->sendDeclaration($body);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionApi->sendDeclaration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DPAE\Model\Upload**](../Model/Upload.md)|  |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

