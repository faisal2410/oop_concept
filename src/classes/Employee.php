<?php

/*

Calculate the employee salary based on the id, name, number of working days, working hours per day, hourly rate, total leave taken

*/ 
namespace App\classes;

class Employee
{


    private $working_days;


    public function __construct(
        private int $id,
        private string $name,
        private int $total_leave_taken,
        private int $working_hours_per_day = 8,
        private string $hourly_rate = "15"
    ) {
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getWorkingDays(): int
    {
        return $this->working_days;
    }
    public function getTotalLeaveTaken(): int
    {
        return $this->total_leave_taken;
    }

    public function getSalaryAmount($total_days): int
    {
        $this->working_days = $total_days - $this->total_leave_taken;
        $salary = $this->working_days * $this->working_hours_per_day * $this->hourly_rate;
        return $salary;
    }
}

$emp1 = new Employee(101, "Faisal ahmed", 4);
$emp2 = new Employee(102, "Abdur Rahman Talha", 2);

// Employee1

$salary = $emp1->getSalaryAmount(20);
echo $emp1->getName() . " has worked for " . $emp1->getWorkingDays() . " days and taken " . $emp1->getTotalLeaveTaken() . "  days leaves. \n";
echo $emp1->getName() . " salary is {$salary} \n \n";


// Employee2

$salary2 = $emp2->getSalaryAmount(20);
echo $emp2->getName() . " has worked for " . $emp2->getWorkingDays() . " days and taken " . $emp1->getTotalLeaveTaken() . "  days leaves. \n";
echo $emp2->getName() . " salary is {$salary2} \n";







/*

✅Previous Version
class Employee
{
    public int $working_days;
    

    public function __construct(
        public int $id,
        public string $name,
        public int $total_leave_taken,
        public int $working_hours_per_day = 8,
        public int $hourly_rate = 15
    ) {
    }

    public function getSalaryAmount($total_days): int
    {
        $this->working_days = $total_days - $this->total_leave_taken;
        $salary = $this->working_days * $this->working_hours_per_day * $this->hourly_rate;
        return $salary;
    }
}

$emp1=new Employee(101, "Faisal ahmed",4);
$emp2= new Employee(102, "Afnan Ferdousi",2,10,60);

echo "Total Salary for {$emp1->name}".": $".$emp1->getSalaryAmount(20)." \n";
echo "Total Salary for {$emp2->name}".": $".$emp2->getSalaryAmount(25)." \n";




*/
