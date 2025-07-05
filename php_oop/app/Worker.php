<?php

class Worker
{

    // Фиксированные значения
        // Строки
        // Числа/Флоат
        // Булевые значения
        // Null
        // Массивы

    public string $name;
    public int $age;
    public array $hours;

    // Динамичные значения
        // Функции
    public function work(): void
    {
        print_r('Im working');
    }
}
