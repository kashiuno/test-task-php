## Тестовое задание на позицию PHP разработчика.

### Требования:

1. Создать страницу списка карт.
2. Создать детальный просмотр для карт.
3. Вывести карты на главную страницу по аналогии с кредитами.
4. Сделать возможность переходить по ссылке на детальный просмотр карты с главной страницы.
   
Ресурсы взять из modules/cards/requests/ApiData.php

5. Создать фильтр для контроллера просмотра карт, который позволит по переменной окружения открывать доступ к определенным действиям.

Переменная окружения, на которую нужно завязаться: YII_ENV_DEV
Если она false не давать переходить к кредитам (выводить 404)
У фильтра должна быть возможность подключения к любому контроллеру (закрывать ссылки не обязательно)

### Требования к верстке:
Главное чтобы не выглядело, как голый html :)

### Проект можно запустить:

`php yii serve`
