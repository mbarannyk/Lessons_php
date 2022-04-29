create DATABASE Cities;
USE Cities;


create table Ukrainian_Cities(
    id int UNSIGNED NOT NULL UNIQUE AUTO_INCREMENT,
    name varchar(40)
);
SHOW TABLES;
SELECT * FROM Ukrainian_Cities;
INSERT INTO Ukrainian_Cities (name) VALUES ('Авдіївка');
INSERT INTO Ukrainian_Cities (name) VALUES ('Алупка'), ('Алушта'), ('Алчевськ'), ('Антрацит'), ('Арциз'), ('Біла Церква'), ('Білгород-Дністровський'), ('Білогірськ'), ('Білопілля'), 
('Балаклія'), ('Барвінкове'), ('Бахмач'), ('Бахчисарай'), ('Баштанка'), ('Бердичів'), ('Бердянськ'), ('Берислав'), ('Богодухів'), ('Богуслав'), ('Болград'), ('Болехів'), 
('Борислав'), ('Бориспіль'), ('Бородянка'), ('Борщів'), ('Боярка'), ('Бровари'), ('Броди'), ('Брянка'), ('Буринь'), ('Бурштин'), ('Буськ'), ('Буча'), ('Бучач'), ('Вільногірськ'), 
('Вільнянськ'), ('Вільшанка'), ('Вінниця'), ('Валки'), ('Вараш'), ('Варва'), ('Василівка'), ('Васильків'), ('Ватутіне'), ('Вахрушеве'), ('Вашківці'), ('Великі Мости'), ('Великий Бурлук'),
 ('Верхньодніпровськ'), ('Виноградов'), ('Вишгород'), ('Вишневе'), ('Вовчанськ'), ('Вознесенськ'), ('Волноваха'), ('Володимир-Волинський'), ('Волочиськ'), ('Вугледар'), ('Гірське'), 
 ('Гадяч'), ('Гайворон'), ('Гайсин'), ('Галич'), ('Генічеськ'), ('Глиняни'), ('Глобине'), ('Глухів'), ('Гола Пристань'), ('Горішні Плавні'), ('Горлівка'),
 ('Городенка'), ('Городище'), ('Городня'), ('Городок'), ('Горохів'), ('Гребінка'), ('Гуляйполе'), ('Гусятин'), ('Дебальцеве'), ('Дергачі'), ('Десна'), ('Джанкой'), ('Дзержинськ'), 
 ('Димитров'), ('Дніпро'), ('Добровеличківка'), ('Добромиль'), ('Добропілля'), ('Докучаєвськ'), ('Донецьк'), ('Дрогобич'), ('Дружківка'), ('Дубляни'), ('Дубно'), ('Дубровиця'), 
 ('Дунаївці'), ('Енергодар'), ('Євпаторія'), ('Єнакієве'), ('Жашків'), ('Жданівка'), ('Жидачів'), ('Житомир'), ('Жмеринка'), ('Жовква'), ('Жовті Води');

 INSERT INTO Ukrainian_Cities (name) VALUES ('Зіньків'), ('Заліщики'), ('Запоріжжя'), ('Збараж'), ('Зборів'), ('Звенигородка'), ('Згурівка'), ('Здолбунів'), 
 ('Зміїв'), ("Знам'янка"), ('Золоте'), ('Золотоноша'), ('Золочів'), ('Зоринськ'), ('Зугрес'), ('Іванків'), ('Івано-Франківськ'), ('Ізмаїл'), ('Ізюм'), 
 ('Ізяслав'), ('Іллічівськ'), ('Ірпінь'), ('Іршава'), ('Ічня'), ('Ківерці'), ('Кілія'), ('Кіровоград'), ('Кіровське'), ('Кіцмань'), ('Кагарлик'), ('Калинівка'), 
 ('Калуш'), ("Кам'янець-Подільський"), ("Кам'янське"), ('Канів'), ('Карлівка'), ('Каховка'), ('Керч'), ('Київ'), ('Кобеляки'), ('Ковель'), ('Козятин'), 
 ('Коломия'), ('Компаніївка'), ('Конотоп'), ('Коростень'), ('Коростишів'), ('Корсунь-Шевченківський'), ('Костопіль'), ('Костянтинівка'), ('Котовськ'), ('Краматорськ'),
 ('Красилів'), ('Красноармійськ'), ('Красногвардійське'), ('Красноград'), ('Краснодон'), ('Красноперекопськ'), ('Красятичі'), ('Кременець'), ('Кременчук'),
 ('Кривий Ріг'), ('Кролевець'), ("Куп'янськ"), ('Ладижин'), ('Ланівці'), ('Лебедин'), ('Лисичанськ'), ('Лозова'), ('Лохвиця'), ('Лубни'), ('Луганськ'), ('Лутугине'), 
 ('Луцьк'), ('Львів'), ('Любомль'), ('Люботин'), ('Макіївка'), ('Мала Виска'), ('Малин'), ('Маріуполь'), ('Марганець'), ('Мелітополь'), ('Мерефа'), ('Миколаїв'), 
 ('Миргород'), ('Миронівка'), ('Могилів-Подільський'), ('Молодогвардійськ'), ('Молочанськ'), ('Монастириська'), ('Монастирище'), ('Мостиська'), ('Мукачево');

 INSERT INTO Ukrainian_Cities (name) VALUES ('Ніжин'), ('Нікополь'), ('Надвірна'), ('Немирів'), ('Нетішин'), ('Нижньогірський'), ('Нова Каховка'), ('Новгород-Сіверський'),
  ('Новгородка'), ('Новий Буг'), ('Новоархангельськ'), ('Нововолинськ'), ('Новоград-Волинський'),
  ('Новогродівка'), ('Новодністровськ'), ('Новомиргород'), ('Новомосковськ'), ('Новопсков'), ('Новоселиця'), ('Новоукраїнка'), ('Носівка'), ('Обухів'), ('Овруч'), ('Одеса'),
   ('Олевск'), ('Олександрівськ'), ('Олександрія'), ('Олешки'), ('Онуфріївка'), ('Орєхов'), ('Орджонікідзе'), ('Остер'), ('Острог'), ('Охтирка'), ('Очаків'), 
   ('Південне'), ('Підволочиськ'), ('Підгайці'), ('Підгородне'), ('Павлоград'), ('Первомайськ'), ('Первомайський'), ('Перевальськ'), ('Перемишляни'), ('Перечин'), 
   ('Перещепине'), ('Переяслав-Хмельницький'), ('Першотравенськ'), ('Петрівське'), ('Петрове'), ('Пирятин'), ('Погребище'), ('Подволочинск'), ('Пологи'),
    ('Полонне'), ('Полтава'), ('Попасна'), ('Почаїв'), ('Привілля'), ('Прилуки'), ('Приморськ'), ("Прип'ять"),
    ('Путівль'), ('Рівне'), ('Радехів'), ('Радивилів'), ('Радомишль'), ('Рахів'), ('Ровеньки'), ('Рогатин'), ('Рожище'), ('Роздольне'), ('Рокитне'), ('Ромни'), 
    ('Рубіжне'), ('Сєвєродонецьк'), ('Сімферополь'), ('Саки'), ('Самбір'), ('Сарни'), ('Світловодськ'), ('Свалява'), ('Сватове'), ('Свердловськ'), ('Севастополь'),
     ('Седнєв'), ('Селидове'), ('Семенівка'), ('Синельникове'), ('Скадовськ'), ('Скалат'), ('Сквира'), ('Сколе'), ('Славута'), ('Славутич'), ("Слов'янськ"), ('Сміла'),
      ('Снігурівка'), ('Сніжне'), ('Снятин'), ('Сокаль'), ('Сокиряни'), ('Соледар'), ('Сосниця'), ('Срібне'), ('Ставище'), ('Старий Самбір'), ('Старобільськ'), 
      ('Старокостянтинів'), ('Стаханов'), ('Сторожинець'), ('Стрий'), ('Судак'), ('Суми'), ('Суходільськ'), ('Таврійськ'), ('Талалаївка'), ('Тальне'), ('Тараща'),
     ('Татарбунари'), ('Теплогірськ'), ('Теплодар'), ('Теребовля'), ('Тернівка'), ('Тернопіль'), ('Тетіїв'), ('Тисмениця'), ('Тлумач'), ('Токмак'), ('Торез'), ('Тростянець'),
     ('Трускавець'), ('Тульчин'), ('Тячів'), ('Угнів'), ('Ужгород'), ('Українка'), ('Умань'), ('Устинівка'), ('Фастів'), ('Феодосія'), ('Харків'), ('Харцизьк'), ('Херсон'),
     ('Хирів'), ('Хмільник'), ('Хмельницький'), ('Хорол'), ('Хотин'), ('Христинівка'), ('Хуст'), ('Червоний Лиман'), ('Червоний луч'), ('Червоноград'), ('Червонозаводське'),
      ('Червонопартизанськ'), ('Черкаси'), ('Чернівці'), ('Чернігів'), ('Чигирин'), ('Чоп'), ('Чорнобиль'), ('Чорноморське'), ('Чортків'), ('Чугуїв'), ('Шаргород'),
       ('Шахтарськ'), ('Шепетівка'), ('Шостка'), ('Шпола'), ('Шумськ'), ('Щастя'), ('Щолкіно'), ('Щорс'), ('Яворів'), ('Яготин'), ('Ялта'), ('Ямпіль'), ('Яремче'), ('Ясинувата');

       mysqldump -u root -p Cities > /home/maryano4ka/Документы/php-lessons/Lessons_php/lesson_14/task_2/UkrCities_dump.sql 

      