# Vgrish\YclientsOpenApi\FinanceTransactionApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**financeTransactionByVisitOrRecordGet**](FinanceTransactionApi.md#financeTransactionByVisitOrRecordGet) | **GET** /timetable/transactions/{company_id} | Получение транзакций по ID визита или записи
[**financeTransactionCreate**](FinanceTransactionApi.md#financeTransactionCreate) | **POST** /finance_transactions/{company_id} | Создание финансовой транзакции
[**financeTransactionGet**](FinanceTransactionApi.md#financeTransactionGet) | **GET** /finance_transactions/{company_id}/{transaction_id} | Получение финансовой транзакции
[**financeTransactionGetList**](FinanceTransactionApi.md#financeTransactionGetList) | **GET** /transactions/{company_id} | Получить транзакции
[**financeTransactionRemove**](FinanceTransactionApi.md#financeTransactionRemove) | **DELETE** /finance_transactions/{company_id}/{transaction_id} | Удаление транзакции
[**financeTransactionUpdate**](FinanceTransactionApi.md#financeTransactionUpdate) | **PUT** /finance_transactions/{company_id}/{transaction_id} | Обновление финансовой транзакции



## financeTransactionByVisitOrRecordGet

> \Vgrish\YclientsOpenApi\Model\FinanceTransactionByVisitOrRecordGetResponse financeTransactionByVisitOrRecordGet($company_id, $accept, $content_type, $authorization, $record_id, $visit_id)

Получение транзакций по ID визита или записи

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\FinanceTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 3.4; // float | ID компании
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$record_id = 0; // float | ID записи
$visit_id = 0; // float | ID визита

try {
    $result = $apiInstance->financeTransactionByVisitOrRecordGet($company_id, $accept, $content_type, $authorization, $record_id, $visit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceTransactionApi->financeTransactionByVisitOrRecordGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **float**| ID компании |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |
 **record_id** | **float**| ID записи | [optional]
 **visit_id** | **float**| ID визита | [optional]

### Return type

[**\Vgrish\YclientsOpenApi\Model\FinanceTransactionByVisitOrRecordGetResponse**](../Model/FinanceTransactionByVisitOrRecordGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## financeTransactionCreate

> \Vgrish\YclientsOpenApi\Model\FinanceTransactionCreateResponse financeTransactionCreate($company_id, $accept, $content_type, $authorization, $finance_transaction_request_data_types)

Создание финансовой транзакции

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\FinanceTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 3.4; // float | ID компании
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$finance_transaction_request_data_types = {"expense_id":2640,"amount":100,"account_id":39105,"client_id":4240788,"supplier_id":0,"master_id":0,"comment":"Transaction comment","date":"2023-01-01 10:00:00"}; // \Vgrish\YclientsOpenApi\Model\FinanceTransactionRequestDataTypes | 

try {
    $result = $apiInstance->financeTransactionCreate($company_id, $accept, $content_type, $authorization, $finance_transaction_request_data_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceTransactionApi->financeTransactionCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **float**| ID компании |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |
 **finance_transaction_request_data_types** | [**\Vgrish\YclientsOpenApi\Model\FinanceTransactionRequestDataTypes**](../Model/FinanceTransactionRequestDataTypes.md)|  | [optional]

### Return type

[**\Vgrish\YclientsOpenApi\Model\FinanceTransactionCreateResponse**](../Model/FinanceTransactionCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## financeTransactionGet

> \Vgrish\YclientsOpenApi\Model\FinanceTransactionGetResponse financeTransactionGet($company_id, $transaction_id, $accept, $content_type, $authorization)

Получение финансовой транзакции

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\FinanceTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 3.4; // float | ID компании
$transaction_id = 3.4; // float | ID транзакции
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->financeTransactionGet($company_id, $transaction_id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceTransactionApi->financeTransactionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **float**| ID компании |
 **transaction_id** | **float**| ID транзакции |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |

### Return type

[**\Vgrish\YclientsOpenApi\Model\FinanceTransactionGetResponse**](../Model/FinanceTransactionGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## financeTransactionGetList

> \Vgrish\YclientsOpenApi\Model\FinanceTransactionGetListResponse financeTransactionGetList($company_id, $accept, $content_type, $authorization, $page, $count, $account_id, $supplier_id, $client_id, $user_id, $master_id, $type, $real_money, $deleted, $start_date, $end_date, $balance_is, $document_id)

Получить транзакции

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\FinanceTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 3.4; // float | ID компании
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$page = 1; // float | Номер страницы
$count = 50; // float | Количество клиентов на странице
$account_id = 0; // float | ID кассы
$supplier_id = 0; // float | ID контрагента
$client_id = 0; // float | ID клиента
$user_id = 0; // float | ID пользователя
$master_id = 0; // float | ID сотрудника
$type = 0; // float | тип транзакции
$real_money = 0; // float | транзакция реальными деньгами
$deleted = 0; // float | была ли удалена транзакция
$start_date = 2023-01-01; // float | дата начала периода
$end_date = 2023-03-01; // float | дата окончания периода
$balance_is = 0; // float | 0 - любой баланс, 1 - положительный, 2 - оттрицательный
$document_id = 0; // float | идентификатор документа

try {
    $result = $apiInstance->financeTransactionGetList($company_id, $accept, $content_type, $authorization, $page, $count, $account_id, $supplier_id, $client_id, $user_id, $master_id, $type, $real_money, $deleted, $start_date, $end_date, $balance_is, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceTransactionApi->financeTransactionGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **float**| ID компании |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |
 **page** | **float**| Номер страницы | [optional]
 **count** | **float**| Количество клиентов на странице | [optional]
 **account_id** | **float**| ID кассы | [optional]
 **supplier_id** | **float**| ID контрагента | [optional]
 **client_id** | **float**| ID клиента | [optional]
 **user_id** | **float**| ID пользователя | [optional]
 **master_id** | **float**| ID сотрудника | [optional]
 **type** | **float**| тип транзакции | [optional]
 **real_money** | **float**| транзакция реальными деньгами | [optional]
 **deleted** | **float**| была ли удалена транзакция | [optional]
 **start_date** | **float**| дата начала периода | [optional]
 **end_date** | **float**| дата окончания периода | [optional]
 **balance_is** | **float**| 0 - любой баланс, 1 - положительный, 2 - оттрицательный | [optional]
 **document_id** | **float**| идентификатор документа | [optional]

### Return type

[**\Vgrish\YclientsOpenApi\Model\FinanceTransactionGetListResponse**](../Model/FinanceTransactionGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## financeTransactionRemove

> \Vgrish\YclientsOpenApi\Model\FinanceTransactionRemoveResponse financeTransactionRemove($company_id, $transaction_id, $accept, $content_type, $authorization)

Удаление транзакции

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\FinanceTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 3.4; // float | ID компании
$transaction_id = 3.4; // float | ID транзакции
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->financeTransactionRemove($company_id, $transaction_id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceTransactionApi->financeTransactionRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **float**| ID компании |
 **transaction_id** | **float**| ID транзакции |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |

### Return type

[**\Vgrish\YclientsOpenApi\Model\FinanceTransactionRemoveResponse**](../Model/FinanceTransactionRemoveResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## financeTransactionUpdate

> \Vgrish\YclientsOpenApi\Model\FinanceTransactionUpdateResponse financeTransactionUpdate($company_id, $transaction_id, $accept, $content_type, $authorization, $finance_transaction_request_data_types)

Обновление финансовой транзакции

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\FinanceTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 3.4; // float | ID компании
$transaction_id = 3.4; // float | ID транзакции
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$finance_transaction_request_data_types = new \Vgrish\YclientsOpenApi\Model\FinanceTransactionRequestDataTypes(); // \Vgrish\YclientsOpenApi\Model\FinanceTransactionRequestDataTypes | 

try {
    $result = $apiInstance->financeTransactionUpdate($company_id, $transaction_id, $accept, $content_type, $authorization, $finance_transaction_request_data_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceTransactionApi->financeTransactionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **float**| ID компании |
 **transaction_id** | **float**| ID транзакции |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |
 **finance_transaction_request_data_types** | [**\Vgrish\YclientsOpenApi\Model\FinanceTransactionRequestDataTypes**](../Model/FinanceTransactionRequestDataTypes.md)|  | [optional]

### Return type

[**\Vgrish\YclientsOpenApi\Model\FinanceTransactionUpdateResponse**](../Model/FinanceTransactionUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

