it practice only for the basic 
knowledge about the 



how to write php:

<?php ........ ?>
(tips: it can mix with the html)

    echo 'XX'-> print 

variable
using the dollar sign: "$"

type:
    1. $a1 = 1 ;(int)
    2. $a2 = 1.5;(double)
    3. $a3 = 'a3';
    4. $a5 = [1,2,3];
    5. $a501 = array();
    6. $a6 = new stdClass; 
    7. $a7 = null;

php variable scope:

    (1)global:
        outside a function 
        if some one want to use in a function 
        we must use the keyword "global"
        in the function 

    (2)static 
        use the keywrod for static 

    (3)local 

for print and echo:

for echo  "<h2>" .     $var    .  "<\h2>"
           ^^^^^               ^^^
           we can sue the html |||
        style to "print" the   ||| 
        line                   |||
                              the different part we can use the "." to separate different parts 
(tips: we can sue the var_dump($a) to print the varaible)

conditional statement:

if.. else.. . 
if.. elseif...... else...
switch:
    switch(n){
        case label1:
            code.........
            break;
        case label2:
            code........
            break;
        case label3:
            code........
            break;
        default:
            code...
            break;
    }

foreach: 
foreach(list "as" the variable):
    code.............


list(array):
    sort($array)


about class:

class_name var = new class()

use the class's member 

$var->var (we don't neet $ for the next var)

use the class's function

$var->func_name()






