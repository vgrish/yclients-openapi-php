# # ClientResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID клиента | 
**name** | **string** | Имя клиента | 
**surname** | **string** | Фамилия клиента | [optional] 
**patronymic** | **string** | Отчество клиента | [optional] 
**display_name** | **string** |  | [optional] 
**phone** | **string** | Телефон клиента | [optional] 
**email** | **string** | Email клиента | [optional] 
**card** | **string** | Номер карты клиента | [optional] 
**birth_date** | **string** | Дата рождения клиента в формате yyyy-mm-dd | [optional] 
**comment** | **string** | Комментарий | [optional] 
**discount** | **int** | Скидка клиента | [optional] 
**visits** | **int** |  | [optional] 
**sex_id** | **int** | Пол клиента (1 - мужской, 2 - женский, 0 - не известен) | [optional] 
**sex** | **string** |  | [optional] 
**sms_check** | **int** | 1 - Поздравлять с Днем Рождения по SMS, 0 - не поздравлять | [optional] 
**sms_bot** | **int** |  | [optional] 
**sms_not** | **int** | 1 - Исключить клиента из SMS рассылок, 0 - не исключать | [optional] 
**spent** | **int** | Сколько потратил средств в компании на момент добавления | [optional] 
**paid** | **int** |  | [optional] 
**balance** | **int** | Баланс клиента | [optional] 
**importance_id** | **int** | Класс важности клиента (0 - нет, 1 - бронза, 2 - серебро, 3 - золото) | [optional] 
**importance** | **string** |  | [optional] 
**categories** | **string[]** |  | [optional] 
**last_change_date** | **string** |  | [optional] 
**custom_fields** | **map[string,object]** | Массив дополнительных полей клиента в виде пар \&quot;api-key\&quot;: \&quot;value\&quot; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


