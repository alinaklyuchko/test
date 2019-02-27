<?php
/**
 * Created by PhpStorm.
 * User: alina
 * Date: 26.02.19
 * Time: 14:52
 */

class EmployersHour extends Employers
{
    public $salary;
    public function __construct ($name, $firstname, $patronymic, $dateOfBirth, $department, $position)
    {
        parent::__construct($name, $firstname, $patronymic, $dateOfBirth, $department, $position);
        $this->name = $name;
        $this->firstName = $firstname;
        $this->patronymic = $patronymic;
        $this->dateOfBirth = $dateOfBirth;
        $this->department = $department;
        $this->position = $position;

    }
    public function salary($hours, $ratePerHour){
        $this->salary = $hours * $ratePerHour;
    }
}