insert into msg (content, user,intime) values ('hello world','userA',1111);
select * from msg;

UPDATE msg
SET content = 'good morning', user = 'nobody'
WHERE id >= 7;

SELECT * FROM msg;

DELETE msg WHERE id = 9;
DELETE msg WHERE id > 1;
SELECT * FROM msg;


SELECT * FROM msg ;
SELECT * FROM msg ORDER BY intime;
SELECT * FROM msg ORDER BY intime DESC;
SELECT * FROM msg LIMIT 1,3;