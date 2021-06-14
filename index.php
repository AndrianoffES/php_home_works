<?php  
// Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
// Затем написать скрипт, который работает по следующему принципу:
//если $a и $b положительные, вывести их разность;
//если $а и $b отрицательные, вывести их произведение;
//если $а и $b разных знаков, вывести их сумму;

//решил сделать сразу в видe функции

function num($a,$b){
    switch($a&&$b){
        case ($a>0&&$b>0):
            echo($a-$b);
            break;
        case ($a<0&&$b<0):
            echo ($a*$b);
            break;
        case($a||$b<0):
            echo ($a+$b);
            break;
    }

}


 //Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.


$a =3;
switch($a){
case($a=0): echo "0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15";
break;
case($a=1): echo "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15";
break;
case($a=2): echo "2,3,4,5,6,7,8,9,10,11,12,13,14,15";
break;
case($a=3): echo "3,4,5,6,7,8,9,10,11,12,13,14,15";
break;
case($a=4): echo "4,5,6,7,8,9,10,11,12,13,14,15";
break;
case($a=5): echo "5,6,7,8,9,10,11,12,13,14,15";
break;
case($a=6): echo "6,7,8,9,10,11,12,13,14,15";
break;
case($a=7): echo "7,8,9,10,11,12,13,14,15";
break;
case($a=8): echo "8,9,10,11,12,13,14,15";
break;
case($a=9): echo "9,10,11,12,13,14,15";
break;
case($a=10): echo "10,11,12,13,14,15";
break;
case($a=11): echo "11,12,13,14,15";
break;
case($a=12): echo "12,13,14,15";
break;
case($a=13): echo "13,14,15";
break;
case($a=14): echo "14,15";
break;
case($a15): echo "15";
break;
}


//Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

function sum ($a,$b){
    return  $a + $b;
}
function subtraction ($a, $b){
    return $a-$b;
}
function multiply ($a, $b){
    return $a*$b;
}
function splitting ($a, $b){
    return $a/$b;
}
//Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
//где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения 
//операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение 
//(использовать switch).

function mathOperation($a, $b, $operation){
    var_dump($operation);
    switch($operation){
        case 'splitting':
            $result=splitting($a,$b);

            echo $result;
        break;
        case 'multiply': 
            $result=multiply($a,$b);
            echo $result;
        break;
        case 'sum':
            $result=sum($a,$b);
            echo $result;
        break;
        case 'subtraction':
            $result=subtraction($a,$b);
            echo $result;
        break;
        
    }
}
//Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале 
//при помощи встроенных функций PHP.
// я это сделал в первом домашнем заднии, там навреное надо было без функции это делать?
// поэтому тут просто повторю эту функцию
$year=date('Y');
echo $year; // это помещаем в подвал шаблона html и все

//С помощью рекурсии организовать функцию возведения числа в степень. 
//Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power ($val, $pow){
    if ($pow===1){
        return $val;
    }
    else{
        return $val*power($val, $pow-1);
    }
}
   

?>