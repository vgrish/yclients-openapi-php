# Vgrish\YclientsOpenApi\LoyaltyTransactionApi

All URIs are relative to *https://api.yclients.com/api/v1*, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**loyaltyTransactionGetList()**](LoyaltyTransactionApi.md#loyaltyTransactionGetList) | **GET** /chain/{chain_id}/loyalty/transactions | Получить список транзакций лояльности в сети |


## `loyaltyTransactionGetList()`

```php
loyaltyTransactionGetList($chain_id, $created_after, $created_before, $accept, $content_type, $authorization, $types, $company_ids, $visit_ids, $page, $count): \Vgrish\YclientsOpenApi\Model\LoyaltyTransactionGetListResponse
```

Получить список транзакций лояльности в сети

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\LoyaltyTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = {{chain_id}}; // int | Идентификатор сети
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Дата начала выборки в формате Y-m-d
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Дата окончания выборки в формате Y-m-d
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$types = array('types_example'); // string[] | Типы транзакций лояльности, включенные в выборку: 1 - Скидка по акции, 2 - Начисление по программе лояльности, 3 - Списание с карты лояльности, 4 - Начисление по реферальной программе, 5 - Ручное пополнение, 6 - Ручное списание, 7 - Списание просроченных баллов, 8 - Списание с сертификата, 9 - Использование абонемента, 10 - Перерасчет стоимости по абонементу, 11 - Списание с личного счета
$company_ids = array(56); // int[] | Идентификаторы филиалов транзакций лояльности, включенные в выборку
$visit_ids = array(56); // int[] | Идентификаторы визитов транзакций лояльности, включенные в выборку
$page = 56; // int | Страница выборки
$count = 56; // int | Количество результатов на одной странице выборки

try {
    $result = $apiInstance->loyaltyTransactionGetList($chain_id, $created_after, $created_before, $accept, $content_type, $authorization, $types, $company_ids, $visit_ids, $page, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyTransactionApi->loyaltyTransactionGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| Идентификатор сети | |
| **created_after** | **\DateTime**| Дата начала выборки в формате Y-m-d | |
| **created_before** | **\DateTime**| Дата окончания выборки в формате Y-m-d | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **types** | [**string[]**](../Model/string.md)| Типы транзакций лояльности, включенные в выборку: 1 - Скидка по акции, 2 - Начисление по программе лояльности, 3 - Списание с карты лояльности, 4 - Начисление по реферальной программе, 5 - Ручное пополнение, 6 - Ручное списание, 7 - Списание просроченных баллов, 8 - Списание с сертификата, 9 - Использование абонемента, 10 - Перерасчет стоимости по абонементу, 11 - Списание с личного счета | [optional] |
| **company_ids** | [**int[]**](../Model/int.md)| Идентификаторы филиалов транзакций лояльности, включенные в выборку | [optional] |
| **visit_ids** | [**int[]**](../Model/int.md)| Идентификаторы визитов транзакций лояльности, включенные в выборку | [optional] |
| **page** | **int**| Страница выборки | [optional] |
| **count** | **int**| Количество результатов на одной странице выборки | [optional] |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyTransactionGetListResponse**](../Model/LoyaltyTransactionGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
