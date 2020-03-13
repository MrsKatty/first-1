

-- выбрать все из таблицы salarytable
SELECT *
FROM salarytable;


-- выбрать по имени и зарплате из таблицы salarytable
SELECT `name`, `salary`
FROM salarytable;


 --Выбрать всех, у кого зарплата меньше 1000 из таблицы salarytable
SELECT `name`, `salary`
FROM salarytable
where salary<1000;

--Выбрать всех, у кого зарплата от 1654 до 1561160 из таблицы salarytable
SELECT *
FROM salarytable
where salary>=1654 and salary<=1561160;


--Выбрать всех из отдела ученых, у кого зарплата больше 1654 из таблицы salarytable
SELECT *
FROM salarytable
where dep="Ученый" and salary>1654;


--Выбрать всех, у кого зарплата не меньше 1654 из таблицы salarytable
SELECT *
FROM salarytable
where not salary<1654 ;


--Упорядочить по зарплате
SELECT *
FROM salarytable
order by salary;


--Упорядочить по зарплате по возрастанию
SELECT *
FROM salarytable
order by salary ASC;


--Упорядочить по зарплате по убыванию
SELECT *
FROM salarytable
order by salary DESC;


--отсортировать по депортаментам в алфавитном порядке и по зарплате по убыванию
SELECT *
FROM salarytable
order by dep ASC, salary DESC;


--выводит таблицу c переименоваными столбцами
SELECT `name` as 'имя', dep as 'Отдел', salary as 'зарплата'
FROM salarytable;


--посчитать налоги для каждого работника
SELECT `name` as 'имя', dep as 'Отдел', salary*0.13 as 'налоги'
FROM salarytable;


--посчитать налоги для каждого работника
SELECT `name` as 'имя', dep as 'Отдел', salary-(salary*0.13) as 'зарплата после налогов'
FROM salarytable;
