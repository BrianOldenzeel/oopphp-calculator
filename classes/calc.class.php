<?php

//wat moet een rekenmachine kunnen? berekenen dus berkeken method maken
//wat heeft een rekenmachine nodig? 2 cijfers en een operator dus daar properties van

class Calc
{
    private $oper;
    private $num1;
    private $num2;


    public function __construct(string $operator, int $num1, int $num2)
    {
        $this->oper = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculater()
    {
        switch ($this->oper) {
            case 'add';
                $results = $this->num1 + $this->num2;
                break;

            case 'sub';
                $results = $this->num1 - $this->num2;
                break;

            case 'div';
                $results = $this->num1 / $this->num2;
                break;

            case 'mul';
                $results = $this->num1 * $this->num2;
                break;
        }
        return $results;
    }
}