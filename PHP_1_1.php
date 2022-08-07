<?php
echo "Hello, world!\n";
$name = readline ("Как вас зовут? ");
$age = readline("Сколько вам лет? ");
echo "Ваc зовут $name вам $age лет\n";

const TASK = ("Какая задача стоит перед вами сегодня? ");
const TIME = ("Сколько примерно времени эта задача займет? ");

$task1 = readline (TASK);
$time1 = readline (TIME);

$task2 = readline (TASK);
$time2 = readline (TIME);

$task3 = readline (TASK);
$time3 = readline (TIME);

$total_hours = (int)$time1 + (int)$time2 + (int)$time3;

echo "$name, сегодня у вас запланировано 3 приоритетных задач на день :\n";
echo "$task1 ({$time1}ч)\n", "$task2 ({$time2}ч)\n", "$task3 ({$time3}ч)\n";
echo "примерное время выполнеия плана = ";
echo "{$total_hours}ч";
