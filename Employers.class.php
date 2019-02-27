<?php
/**
 * Created by PhpStorm.
 * User: alina
 * Date: 27.02.19
 * Time: 2:12
 */

abstract class Employers
{
    public $name;
    public $firstName;
    public $patronymic;
    public $dateOfBirth;
    public $department;
    public $position;

    abstract public function __construct($name, $firstname, $patronymic, $dateOfBirth, $department, $position);


}