
####1. Сохранение дополнительных свойств в заказе. 
/local/templates/test/components/bitrix/sale.order.ajax/
Например,  сохранить в куки значение get-параметра "utm_source" и установить его в свойстве заказа UTM_SOURCE.

####2. Выгрузка каталога из 1с.

2.1. После завершения выгрузки отправить письмо на почту.
/local/php_interface/ini.php

2.2. При выгрузке не менять название и код разделов каталога.
Настраивается в:
«Инфоблоки - Типы инфоблоков - Каталоги - Каталог товаров 1С», на закладке «Поля разделов» убираем флаги:
Если код задан то проверяем на уникальность.


####3. Кастомизация компонентов.
/local/templates/test/components/bitrix/

На примере компонента bitrix:sale.basket.basket.line показать, как можно кастомизировать компонент. Например, фото товара брать не из стандартных полей, а из папки на сервере (/upload/photo/) (название файла соответствует артикулу). P.S. Данную задачу можно решить, используя result_modifier.php, но важно показать кастомизацию компонента.
