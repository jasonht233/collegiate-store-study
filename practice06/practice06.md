abou how to use the MYSQL 

SQL; Structured Query Language 

SQL stands for Structured Query Language


(using the navicat- free trail)
    1. 
        create the new database - we call it "php"
    2.
        I create a new table - we call it msg 
    3.
        create file 

SQL language:

select: select data from a database
    eg:
    select * from table_name;
        ^           
        all the data in the table name
    or
    select column1, column2.... from table_name 

insert: by language, we can add the values into the table 
    INSERT INTO table_name (column1, column2) VALUES (value1, value2)

    INSERT INTO table VALUES (value1, value2)

update: current line. 
    UPDATE file_name
    SET FILED_NAME = "xxx" , FILED_NAME = "XX" 
    WHERE (condition);  

delete: delete current line 
    DELETE file_name
    WHERE id = XXXX;

find(*important):

SELECT * FROM table_time; 

    SELECT * FROM table_time WHERE condition; 
    (like choose something not to print or chose something to print for condition)


    SELECT * FROM table_time ORDER BY condition;
    SELECT * FROM msg ORDER BY intime DESC;
    (odered by teh condiion);


    SELECT * FROM table_time LIMIT a, b 
    show or find only from a to b 
    a is not included 







