# # ClientGetListRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**page** | **int** | Номер страница | [optional]
**page_size** | **int** | Количество выводимых строк на странице. Максимум 200. (По умолчанию 25) | [optional]
**fields** | **string[]** | Поля, которые нужно вернуть в ответе | [optional]
**order_by** | **string** | По какому полю сортировать | [optional]
**order_by_direction** | **string** | Как сортировать (по возрастанию / по убыванию) | [optional]
**operation** | **string** | Тип операции | [optional]
**filters** | [**\Vgrish\YclientsOpenApi\Model\ClientGetListRequestFilters[]**](ClientGetListRequestFilters.md) | Фильтры для поиска по клиентам | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
