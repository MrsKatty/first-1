-- добавляет новую строку в таблицу. В скобках нужно перечислять все ячейки и значения,
-- в которые мы хотим добавить записи
insert into goods (name)
values ('рубашка');

insert into goods (name, price)
values ('толстовка', 150);

--изменение данных. Указываем название таблицы и поля, которые нужно изменить
update goods
set price=2;

update goods
set price=22
where id=4;

update goods
set price=22
where id=4 OR id=2;

--удаление строки
delete from goods
where id=6;


--для товаров, у которых цена больше 20, удалить цену
update goods
set price=NULL
where price>20;

--установить цену для всех шорт 20
update goods
set price=20
where name='шорты';


-- ЧТО ТАКОЕ ОПЕРАТОР BETWEEN?
select *
from football_players
where salary>=1000 AND salary<=1000000;

select *
from football_players
where salary between 1000 AND 1000000;


--ЧТО ТАКОЕ IN?
--найти всех футболистов нападающих или полузащитников
select *
from football_players
where dep='нападающий' or dep='полузащ';

select *
from football_players
where dep IN('нападающий', 'полузащ');


--ЧТО ТАКОЕ LIKE?
-- % любое колво символов
-- _ заменяет любой один символ
select *
from football_players
where name like 'Криш%'


--вывести всех футболистов которые работают в отделе, название которого содержит ровно 5 символов
select *
from football_players
where dep like '_____';



--Функции Агрегироввания - вычисляют групповые характеристики полей таблицы
--COUNT определяет количество строк или значений поля, выбранных посредством запроса и не являющихся NULL-значениями;
--SUM вычисляет сумму всех выбранных значений данного поля;
--AVG вычисляет среднее значение для всех выбранных значений данного поля;
--МАХ вычисляет наибольшее из всех выбранных значений данного поля;
--MIN вычисляет наименьшее из всех выбранных значений данного поля.
select max(salary), min(salary), SUM(salary), AVG(salary)
from football_players;

select count(name)
from football_players;



--удалил зарплату у Кришттиану
update football_players
set salary=NULL
where name='Криштиану';

select count(salary)
from football_players;



--Считает количество всех строк в таблице, не зависимо от того есть ли где-нибудь значение NULL
select count(*)
from football_players;


--                            ВЛОЖЕННЫЕ ЗАПРОСЫ
select *
from football_players
where salary>(select AVG(salary)
              from football_players);




--Найти работника с самой большой зарплатой
select *
from football_players
where salary=(select max(salary)
              from football_players);



--Найти работника с самой маленькой зарплатой
select *
from football_players
where salary=(select min(salary)
              from football_players);



--Вывести информацию о сотрудниках, имеющих зп больше средней зп среди защитников

select *
from football_players
where salary>(select AVG(salary)
              from football_players
              where dep='защит');




--Вывести всех футболистов, у которых вторая буква в имени  Е

select *
from football_players
where name like '_е%';


--найти всех у кого последние две буквы в фамилии НУ (В случае записи ФИО типа Петров П.П.)

select *
from football_players
where name like '%ну %' or name like '%ну';


--Группировка по
-- При группировке все записи в таблице разбиваются на группы с одиноаковым значением в том поле по которому производится групировка. В выводе запроса могут использоваться только те поля, по которым произволится группировка. По остальным полям могут выводиться их групповые характеристики: минимум, максимум, среднее и т.д.

select dep, AVG(salary)
from football_players
group by dep;
