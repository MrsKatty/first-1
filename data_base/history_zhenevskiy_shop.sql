--найти средний размер комиссионных продавцов в каждом городе

select city, round(AVG(comm),2)
from sales_people
group by city


-- Having
-- Условие, записанное после ключевого слова Where применяются к каждой записи таблицы в отдельности, условие, записанное после ключевого слова having применяются к группам записей, по-этому инструкция havind не используется без инструкции group by. Т.к условие, записываемые после having применяются к группам записей это дает возможность ичсползовать в условиях функции агрегирования (min, max, sum< avg и т.д)

--вывести список городов, в которых средний размер комиссионных продавцов больше 0,14.

select city, round(AVG(comm),2)
from sales_people
group by city
having AVG(comm) > .14;


--найти средний рейтинг покупателей в каждом городе

select city, AVG(rating)
from customers
group by city;

--вывести список городов, в которых минимальный рейтинг покупателей выше среднего всех покупателей

select city, MIN(rating)
from customers
group by city
having MIN(rating) > (select AVG(rating)
                      from customers);



                      -- ВЛОЖЕННЫЕ ЗАПРОСЫБ ВОЗВРАЩАЮЩИЕ НЕ ЕДИНСТВЕННОЕ ЗНАЧЕНИЕ

--ALL
--ANY
--SOME

-- Найти покупателей у которых рейтинг выше рейтинга любого покупателя из Лондона
select *
from customers
where rating > ALL(select rating from customers where city = 'ROME');


-- вывести список заказов на сумму более 1000

select *
from orders
where AMT > 1000;

-- вывести список городов , в которых живут покупатели, совершившие покупку на сумму более 5000

select city
from customers
where cnum IN(select cnum from orders where AMT > 5000);



-- написать запрос, который выводит список городов, в которых проживают клиенты. Из резельтата запроса удалить дублирующие города.
-- distinct удаляет дублирующие данные в запросе

select distinct city
from customers

--chop.sales_people.snum (полный адрес данных. База_данных.таблица.столбец)

--объединение таблиц  sales_people и orders по столбцу snum
select *
from sales_people, orders
where sales_people.snum = orders.snum;

--объединение таблиц  customers и orders по столбцу сnum
select *
from customers, orders
where customers.cnum = orders.cnum;

--объединение таблиц  customers и sales_people по столбцу snum
select *
from customers, sales_people
where customers.snum = sales_people.snum;


-- найти общую сумму заказов для каждого продавца
select sname, SUM(AMT)
from sales_people, orders
where sales_people.snum = orders.snum
group by sname


-- посчитать количество заказов для каждого продавца

select sname, COUNT(*)
from sales_people, orders
where sales_people.snum = orders.snum
group by sname

-- количество и сумма заказов по каждому продавцу и заголовки столбцов подписать по русски

select sname as "Имя", COUNT(*) as "количество заказов", SUM(AMT) as "сумма заказов"
from sales_people, orders
where sales_people.snum = orders.snum
group by sname


-- найти фамилию продавца из лондона с самыми маленькими коммисионными

select sname
from sales_people
where city = "London" AND comm = (select MIN(comm) from sales_people where city = "London");

-- найти средний рейтинг покупателей в каждом городе

select AVG(rating), city
from customers
GROUP BY city;

-- объеденить все таблицы в одну

select *
from sales_people, orders, customers
where sales_people.snum = orders.snum AND customers.cnum = orders.cnum

-- посчетиать средний рейтинг покупателей для каждого продавца

SELECT
    sname,
    AVG(rating)
FROM
    sales_people,
    orders,
    customers
WHERE
    sales_people.snum = orders.snum
    AND
    customers.cnum = orders.cnum
GROUP BY
    sname


-- найти среднюю сумму заказов для каждого продавца на каждую дату

select sname, odate, AVG(AMT), count(AMT)
from sales_people, orders
where sales_people.snum = orders.snum
GROUP BY sname, odate;

-- среднюю сумму заказов на кождое число

select odate, round(AVG(AMT), 2)
from orders
GROUP BY odate;
