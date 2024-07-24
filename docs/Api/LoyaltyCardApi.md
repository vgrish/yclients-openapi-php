# Vgrish\YclientsOpenApi\LoyaltyCardApi

All URIs are relative to *https://api.yclients.com/api/v1*, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**loyaltyCardByClientIdGetList()**](LoyaltyCardApi.md#loyaltyCardByClientIdGetList) | **GET** /loyalty/client_cards/{client_id} | Получить список карт клиента по ID |
| [**loyaltyCardByClientPhoneGetList()**](LoyaltyCardApi.md#loyaltyCardByClientPhoneGetList) | **GET** /loyalty/cards/{phone}/{chain_id}/{company_id} | Получить список карт клиента по номеру телефона |
| [**loyaltyCardCreate()**](LoyaltyCardApi.md#loyaltyCardCreate) | **POST** /loyalty/cards/{company_id} | Выдать карту лояльности |
| [**loyaltyCardRemove()**](LoyaltyCardApi.md#loyaltyCardRemove) | **DELETE** /loyalty/cards/{company_id}/{card_id} | Удалить карту  лояльности |
| [**loyaltyCardTransactionCreate()**](LoyaltyCardApi.md#loyaltyCardTransactionCreate) | **POST** /company/{company_id}/loyalty/cards/{card_id}/manual_transaction | Ручное списание/пополнение карты лояльности в компании |
| [**loyaltyCardTypeByChainIdGetList()**](LoyaltyCardApi.md#loyaltyCardTypeByChainIdGetList) | **GET** /chain/{chain_id}/loyalty/card_types | Получить список типов карт, доступных в сети |
| [**loyaltyCardTypeByClientPhoneGetList()**](LoyaltyCardApi.md#loyaltyCardTypeByClientPhoneGetList) | **GET** /loyalty/card_types/client/{company_id}/{phone} | Получить список типов карт доступных для выдачи клиенту |
| [**loyaltyCardTypeByCompanyIdGetList()**](LoyaltyCardApi.md#loyaltyCardTypeByCompanyIdGetList) | **GET** /loyalty/card_types/salon/{company_id} | Получить список типов карт доступных в филиале |


## `loyaltyCardByClientIdGetList()`

```php
loyaltyCardByClientIdGetList($client_id, $accept, $content_type, $authorization): \Vgrish\YclientsOpenApi\Model\LoyaltyCardByClientIdGetListResponse
```

Получить список карт клиента по ID

Возвращает список карт клиента с программами, которые активны в данном салоне    Атрибуты в ответе на запрос полностью совпадают с методом \"Получить список выданных карт по номеру телефона\", описанным выше

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\LoyaltyCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 56; // int | ID клиента
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->loyaltyCardByClientIdGetList($client_id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardApi->loyaltyCardByClientIdGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| ID клиента | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyCardByClientIdGetListResponse**](../Model/LoyaltyCardByClientIdGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardByClientPhoneGetList()`

```php
loyaltyCardByClientPhoneGetList($phone, $chain_id, $company_id, $accept, $content_type, $authorization): \Vgrish\YclientsOpenApi\Model\LoyaltyCardByClientPhoneGetListResponse
```

Получить список карт клиента по номеру телефона

Возвращает список карт клиента с программами, которые активны в данном салоне    | Атрибут        | Тип    | Описание|  |----------------|--------|--------------------------------------------------------------------------------------------------------------|  | id             | int    | Идентификатор карты лояльности                                                                                  |  | balance        | decimal| Баланс карты лояльности                                                                                        |  | paid_amount    | decimal| Сумма \"Оплачено\" |  | sold_amount    | decimal| Сумма \"Продано\"                                                                                        |  | visits_count   | int    | Количество визитов                                                                     |  | number         | string | Номер карты |  | type_id        | int    | Идентификатор типа карты лояльности                                                                               |  | salon_group_id | int    | Идентификатор сети, где создана карта                                                                    |  | type           | object | Объект, содержащий в себе поля \"id\" и \"title\": идентификатор типа карты и название типа карты, соотвественно  | salon_group    | object | Объект, содержащий в себе поля \"id\" и \"title\": идентификатор сети, где создан тип карты и название этой сети                                                                                        |  | programs       | array  | Массив с информацией об акциях, привязанных к карте лояльности                                                                     |  | rules          | array  | Массив с информацией о правилах, настроенных в акции |    Массив programs состоит из объектов со следующими полями:    | Атрибут         | Тип    | Описание                             |  |-----------------|--------|--------------------------------------|  | id              | int    | Идентификатор акции                  |  | title           | string | Название акции                       |  | loyalty_type_id | int    | Идентификатор типа акции             |  | item_type_id    | int    | Начисляется ли кэшбек от товаров     |  | value_unit_id   | int    | Поле \"Бонус\". Скидка % или Фикс. сумма                                     |  | group_id        | int    | Идентифкатор сети, где создана акция |  | loyalty_type    | object | Объект с информацией о акции         |      Массив rules состоит из объектов со следующими полями:    | Атрибут            | Тип    | Описание                                         |  |--------------------|--------|--------------------------------------------------|  | id                 | int    | Идентификатор правила                            |  | loyalty_program_id | int    | Идентификатор акции, к которой привязано правило |  | loyalty_type_id    | int    | Идентификатор типа акции                         |  | value              | decimal| Значение от которого сработает правило           |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\LoyaltyCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone = 'phone_example'; // string | Номер телефона клиента в формате 70001234567
$chain_id = 56; // int | ID сети
$company_id = 56; // int | ID филиала
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->loyaltyCardByClientPhoneGetList($phone, $chain_id, $company_id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardApi->loyaltyCardByClientPhoneGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| Номер телефона клиента в формате 70001234567 | |
| **chain_id** | **int**| ID сети | |
| **company_id** | **int**| ID филиала | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyCardByClientPhoneGetListResponse**](../Model/LoyaltyCardByClientPhoneGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardCreate()`

```php
loyaltyCardCreate($company_id, $accept, $content_type, $authorization, $loyalty_card_create_request): \Vgrish\YclientsOpenApi\Model\LoyaltyCardCreateResponse
```

Выдать карту лояльности

| Атрибут              | Тип    | Описание                                     |  |----------------------|--------|----------------------------------------------|  | loyalty_card_number  | number | Номер карты лояльности                       |  | loyalty_card_type_id | number | Идентификатор типа карты лояльности          |  | phone                | number | Номер телефона клиента в формате 70001234567 |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\LoyaltyCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = {{company_id}}; // int | ID филиала
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$loyalty_card_create_request = {"loyalty_card_number":9090909,"loyalty_card_type_id":"8230","phone":79091552422}; // \Vgrish\YclientsOpenApi\Model\LoyaltyCardCreateRequest

try {
    $result = $apiInstance->loyaltyCardCreate($company_id, $accept, $content_type, $authorization, $loyalty_card_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardApi->loyaltyCardCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| ID филиала | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **loyalty_card_create_request** | [**\Vgrish\YclientsOpenApi\Model\LoyaltyCardCreateRequest**](../Model/LoyaltyCardCreateRequest.md)|  | [optional] |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyCardCreateResponse**](../Model/LoyaltyCardCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardRemove()`

```php
loyaltyCardRemove($company_id, $card_id, $accept, $content_type, $authorization): object
```

Удалить карту  лояльности

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\LoyaltyCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = {{company_id}}; // int | ID филиала
$card_id = {{client_loyalty_card_id}}; // int | ID карты лояльности
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->loyaltyCardRemove($company_id, $card_id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardApi->loyaltyCardRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| ID филиала | |
| **card_id** | **int**| ID карты лояльности | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardTransactionCreate()`

```php
loyaltyCardTransactionCreate($company_id, $card_id, $accept, $content_type, $authorization, $loyalty_transaction_create_request): \Vgrish\YclientsOpenApi\Model\LoyaltyCardTransactionCreateResponse
```

Ручное списание/пополнение карты лояльности в компании

Ручное списание/пополнение карты лояльности в компании

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\LoyaltyCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = {{company_id}}; // int | Идентификатор филиала.
$card_id = {{client_loyalty_card_id}}; // int | ID карты лояльности
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$loyalty_transaction_create_request = new \Vgrish\YclientsOpenApi\Model\LoyaltyTransactionCreateRequest(); // \Vgrish\YclientsOpenApi\Model\LoyaltyTransactionCreateRequest

try {
    $result = $apiInstance->loyaltyCardTransactionCreate($company_id, $card_id, $accept, $content_type, $authorization, $loyalty_transaction_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardApi->loyaltyCardTransactionCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| Идентификатор филиала. | |
| **card_id** | **int**| ID карты лояльности | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **loyalty_transaction_create_request** | [**\Vgrish\YclientsOpenApi\Model\LoyaltyTransactionCreateRequest**](../Model/LoyaltyTransactionCreateRequest.md)|  | [optional] |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyCardTransactionCreateResponse**](../Model/LoyaltyCardTransactionCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardTypeByChainIdGetList()`

```php
loyaltyCardTypeByChainIdGetList($chain_id, $accept, $content_type, $authorization): \Vgrish\YclientsOpenApi\Model\LoyaltyCardTypeByChainIdGetListResponse
```

Получить список типов карт, доступных в сети

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\LoyaltyCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = {{chain_id}}; // int | Идентификатор сети
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->loyaltyCardTypeByChainIdGetList($chain_id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardApi->loyaltyCardTypeByChainIdGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| Идентификатор сети | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyCardTypeByChainIdGetListResponse**](../Model/LoyaltyCardTypeByChainIdGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardTypeByClientPhoneGetList()`

```php
loyaltyCardTypeByClientPhoneGetList($company_id, $phone, $accept, $content_type, $authorization): \Vgrish\YclientsOpenApi\Model\LoyaltyCardTypeByClientPhoneGetListResponse
```

Получить список типов карт доступных для выдачи клиенту

Возвращает список типов карт, которые доступны для выдачи клиенту салона.    | Атрибут        | Тип    | Описание                                                                                                     |  |----------------|--------|--------------------------------------------------------------------------------------------------------------|  | id             | int    | Идентификатор типа карты                                                                                     |  | title          | string | Название типа карты                                                                                          |  | salon_group_id | int    | Идентификатор сети, где создан тип карты                                                                     |  | salon_group    | object | Объект, содержащий в себе поля \"id\" и \"title\": идентификатор сети, где создан тип карты и название этой сети |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\LoyaltyCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = {{company_id}}; // int | ID компании
$phone = {{client_phone}}; // string | Номер телефона клиента
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->loyaltyCardTypeByClientPhoneGetList($company_id, $phone, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardApi->loyaltyCardTypeByClientPhoneGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| ID компании | |
| **phone** | **string**| Номер телефона клиента | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyCardTypeByClientPhoneGetListResponse**](../Model/LoyaltyCardTypeByClientPhoneGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardTypeByCompanyIdGetList()`

```php
loyaltyCardTypeByCompanyIdGetList($company_id, $accept, $content_type, $authorization): \Vgrish\YclientsOpenApi\Model\LoyaltyCardTypeByCompanyIdGetListResponse
```

Получить список типов карт доступных в филиале

Возвращает список типов карт, которые действуют для данного филиала.    Атрибуты и их описания соответсвуют методу \"Коллекция типов карт доступных клиенту\", описанному выше.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\LoyaltyCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = {{company_id}}; // int | ID компании
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->loyaltyCardTypeByCompanyIdGetList($company_id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltyCardApi->loyaltyCardTypeByCompanyIdGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| ID компании | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyCardTypeByCompanyIdGetListResponse**](../Model/LoyaltyCardTypeByCompanyIdGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
