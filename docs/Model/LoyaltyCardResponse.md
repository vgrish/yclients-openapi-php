# # LoyaltyCardResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор карты лояльности | [optional]
**balance** | **float** | Баланс карты лояльности | [optional]
**points** | **int** |  | [optional]
**paid_amount** | **float** | Сумма \&quot;Оплачено\&quot; | [optional]
**sold_amount** | **float** | Сумма \&quot;Продано\&quot; | [optional]
**visits_count** | **int** | Количество визитов | [optional]
**number** | **string** | Номер карты | [optional]
**type_id** | **int** | Идентификатор типа карты лояльности | [optional]
**salon_group_id** | **int** | Идентификатор сети, где создана карта | [optional]
**type** | **map[string,object]** | Объект, содержащий в себе поля \&quot;id\&quot; и \&quot;title\&quot;: идентификатор типа карты и название типа карты, соотвественно | [optional]
**salon_group** | **map[string,object]** | Объект, содержащий в себе поля \&quot;id\&quot; и \&quot;title\&quot;: идентификатор сети, где создан тип карты и название этой сети | [optional]
**programs** | [**map[string,object][]**](map.md) | Массив с информацией об акциях, привязанных к карте лояльности | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
