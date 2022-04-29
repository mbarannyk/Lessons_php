SHOW DATABASES;
CREATE DATABASE Список_товарів;
USE Список_товарів;
CREATE TABLE Products (
    id int UNSIGNED NOT NULL UNIQUE AUTO_INCREMENT,
    Назва_товару varchar(20),
    Сезон varchar(20),
    Ціна float
);
INSERT INTO Products VALUES (1, 'Полуниця', 'Літо', 90.00);
INSERT INTO Products (Назва_товару, Сезон, Ціна) VALUES ('Банан', 'Зима', 30.55), 
('Груша', 'Осінь', 28.99), ('Мандарини', 'Зима', 35.45), ('Кавун', 'Літо', 8.25), 
('Яблуко', 'Осінь', 12.50), ('Апельсин', 'Зима', 38.65), ('Малина', 'Літо', 75.25),('Грецький горіх', 'Зима', 25.25),
('Сливи', 'Осінь', 45.55), ('Ананс', 'Зима', 65.60), ('Диня', 'Літо', 20.35), ('Гранат', 'Зима', 53.55);