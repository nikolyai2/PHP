<?php
echo "В каком году произошло крешение Руси?\n",
    "Есть три варианта ответа \n";

while(true){
echo ("a)810 \n");
echo ("b)990 \n");
echo ("c)740 \n");
$answap = readline("Ваш ответ: ");


if ($answap == 990 || $answap == "b") {
    echo("Вы ответили верно");
    break;
}elseif ($answap == 810 || $answap == "a" || $answap == "c" || $answap ==740) {
    echo "Вы ответили неверно ";
    break;
}echo ("Введите коректный ответ\n");
}


$affairs = (int)readline("Сколько у вас запланированных дел? ");
const TASK = ("Какая задача стоит перед вами сегодня? ");
const TIME = ("Сколько примерно времени эта задача займет? ");
$result = 0;
$out = "";

for ($i = 0; $i < $affairs; $i++) {
    $task = "task$i";
    $time = "time$i";
    $$task = readline(TASK);
    $$time = (int)readline(TIME);
    $result += $$time;
    $out .= "- {$$task} ({$$time}ч) \n";
}
echo ($out);
echo "примерное время выполнеия плана = ({$result}ч) ";



$number = (int)readline ("Введите число ");
$i = "$number" % 8;
switch ($i) {
    case "1" :
        echo("1 палец");
        break;
    case "2":
    case "0":
        echo ("2 палец");
        break;
    case "3":
    case "7":
        echo ("3 палец");
        break;
    case "4":
    case "6":
        echo ("4 палец");
        break;
    case "5":
        echo ("5 палец");
        break;
}