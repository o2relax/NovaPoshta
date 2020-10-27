<?php

return [

    'error_answer' => 'Ошибка ответа с сервера',
    'error_data' => 'Ошибка получения данных',

    'statusCode' => [
        '1' => 'Ожидается получение на НП',
        '2' => 'ТТН удалена',
        '3' => 'ТТН не найдена',
        '4' => 'Отправление на сортировке',
        '41' => 'Отправление на сортировке в пределах города',
        '5' => 'Отправление в пути',
        '6' => 'Отправление в городе получателя',
        '7' => 'Посылка прибыла в отделение',
        '8' => 'Посылка прибыла в отделение (8)',
        '9' => 'Посылка получена',
        '10' => 'Посылка получена, деньги отправлены',
        '11' => 'Посылка получена, деньги получены',
        '14' => 'Посылка выдана для осмотра получателем',

        '101' => 'На пути к получателю',
        '102' => 'Возврат посылки по времени (102)',
        '103' => 'Отказ от посылки (103)',
        '104' => 'Изменение адреса',
        '105' => 'Хранение прекращено',
        '106' => 'Получено и создана ТТН обратной доставки',
        '108' => 'Отказ от посылки (108)',
        '112' => 'Дата доставки перенесена получателем',

        /// refactor
        'sync' => 'Данные получены',
        '200' => 'Все прошло успешно',
        '404' => '404 ошибка запроса',
        '429' => 'Превышен лимит запросов в минуту',

        '1000' => 'Украинские области синхронизированы',
        '1001' => 'Русские названия облостей синхронизированы',
        '1002' => 'Одна или несколько украинских областей не смогли обновиться',
        '1003' => 'Одна или несколько областей не смогли сохранить русское имя',
        '1004' => 'Все данные синхронизированы',
        '1005' => 'Одна или несколько строчек данных не синхронизированы',

        '20000101582' => 'Пользователь не определен',
        '20000100520' => 'Email имеет неверный формат',
        '20000100525' => 'Email слишком длинное',
        '20000100526' => 'FirstName имеет недопустимые символы',
        '20000100527' => 'FirstName не указан',
        '20000100528' => 'FirstName слишком длинное',
        '20000100532' => 'LastName имеет недопустимые символы',
        '20000100533' => 'LastName не указан',
        '20000100534' => 'LastName слишком длинное',
        '20000900740' => 'Вы можете создавать только контрагентов получателей (Recipient)',
        '20000100552' => 'Phone в неверном формате (0675554433 / 380675554433 / +380675554433)',
        '20000100556' => 'Phone не указан',
        '20000300427' => 'Получатель не принадлежит этому пользователю',

        '20000201204' => 'Срок действия ключа API истек',
        '20000201100' => 'Найдено 2 или более регионов',
        '20000201173' => 'ЭН уже удалена',
        '20000200226' => 'Параметр груза для места отправления (OptionsSeat) не заполнено',
        '20000200275' => 'Ошибка в регионе',
        '20000200834' => 'Регион не выбран',
        '20000200295' => 'Дом получателя указан некорректно',

        '20000201503' => 'Данное отделение не принимает такой вес',
        '20000200279' => 'Город отправки не найден',
        '20000200276' => 'Город отправки указан не верно',
        '30000200880' => 'Дата отправки указана не верно',
        '20000201059' => 'Проблема при создании отправки',
        '20000200151' => 'Описание заполнено неверно',
        '20000201103' => 'Проблема создания контрагента. Неверное имя получателя',

        '20000201774' => 'ContactRecipient To Doors must be full. ContactRecipient должен быть заполнен',
        '20000201939' => 'Cost calculate error. Ошибка расчета стоимости.',
        '20000202381' => 'Not enough parameters to calculate the cost. Недостаточно параметров для расчета стоимости.',
        '20000202381' => 'Not enough parameters to calculate the cost. Недостаточно параметров для расчета стоимости.',
        '20000201051' => 'Calculate error. Please try again. Ошибка расчета. Пожалуйста, попробуйте еще раз.',
        '20000200235' => 'OwnershipForm не указан',

        '20000300403' => 'ContactSender не существует',
        '20000300434' => 'Неверный формат телефона',
        '20000400454' => 'Контрагент не найден',
        '20000400455' => 'Дата должна быть позднее, чем сегодня',
        '20000400458' => 'FindByString не верен',
        '20000400449' => 'City не указан',
        '20000400456' => 'DateTime имеет неверный формат',
        '20000400474' => 'Страница не указана',
        '20000401805' => 'Только JWT идентификация',
        '20000500626' => 'SettlementRef не указан',
        '20000500675' => 'StreetName не указан',
        '20000200068' => 'Ошибка авторизации API (неверный ключ)',
        '20000200565' => 'DocumentBarcodes и/или DocumentRefs не указаны',

        '20000900757' => 'Строка очень длинная',
        '20000900763' => 'MiddleName имеет недопустимые символы',
        '20000900764' => 'MiddleName слишком длинное',

        '20000900752' => 'Не указан Ref',
        '20000900767' => 'Ошибка получения улиц (CityRef)',
        '20000900754' => 'CounterpartyType не верен (только PrivatePerson / Organization)',
        '20000900755' => 'Email должен быть пустым',
        '20000900756' => 'Phone должен быть пустым',
        '20000900758' => 'FirstName должен быть пустым',
        '20000900765' => 'MiddleName должен быть пустым',
        '20000900766' => 'LastName должен быть пустым',
        '20000900772' => 'CounterpartyProperty не верен (только Sender / Recipient)',
        '20000900768' => 'Ошибка получения улиц (город не найден)',
        '30000200884' => 'Стоимость изменена до цены наложного платежа',
        '20000201382' => 'Отделение отправителя не найдено / закрыто',
        '20000201552' => 'Отделение получателя не найдено / закрыто',
        '20000201775' => 'Неправильно указан телефон ополучателя',
        '20000301007' => 'Неправильный формат. Документы должны быть массивом',

        '30000201469' => 'CargoType изменен на значение Parcel',
        '30000900779' => 'Counterparty не уникален',

        '20000200104' => 'CityRecipient не указан',
        '20000200268' => 'RecipientAddress не указан',
        '20000300431' => 'Recipient не указан',
        '20000300401' => 'ContactRecipient не указан',

    ],

];
