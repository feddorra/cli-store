<?php


namespace Feddorra\Employee;


use Feddorra\DataBase;

/**
 * Class EmployeeRepository
 *
 * @package Feddorra\Employee
 */
class EmployeeRepository {

    /**
     * @param EmployeeInterface $employee
     * @return false|\PDOStatement
     */
    public function save(EmployeeInterface $employee) {
        if($employee->getId()) {
            $sql = "
                UPDATE employee
                SET name = '{$employee->getName()}'
                  , surname = '{$employee->getSurname()}'
                  , phone = '{$employee->getPhoneNumber()}'
                  , password = '{$employee->getPassword()}'
                WHERE id = '{$employee->getId()}'
            ";
        } else {
            $sql = "
                INSERT INTO employee
                (name, surname, phone, password)
                VALUES
                ('{$employee->getName()}', '{$employee->getSurname()}', '{$employee->getPhoneNumber()}', '{$employee->getPassword()}')
            ";
        }
        return DataBase::getInstance()->query($sql);
    }

    /**
     * @param int|null $id
     * @return array|Employee
     */
    public function select(?int $id = null) {
        $sql = "
            SELECT id
                 , name
                 , surname
                 , phone
            FROM employee
        ";
        if($id === null) {
            $employeesQuery = DataBase::getInstance()->query($sql);
            $employees = [];
            while ($employeeRecord = $employeesQuery->fetch()) {
                $employee = new Employee();
                $employee
                    ->setId($employeeRecord["id"])
                    ->setName($employeeRecord["name"])
                    ->setSurname($employeeRecord["surname"])
                    ->setPhoneNumber($employeeRecord["phone"]);
                $employees[] = $employee;
            }
            return $employees;
        }
        $employeeQuery = DataBase::getInstance()->query($sql . " WHERE id = '{$id}'");
        $employeeRecord = $employeeQuery->fetch();
        $employee = new Employee();
        $employee
            ->setId($employeeRecord["id"])
            ->setName($employeeRecord["name"])
            ->setSurname($employeeRecord["surname"])
            ->setPhoneNumber($employeeRecord["phone"]);
        return $employee;
    }

    /**
     * @param EmployeeInterface $employee
     */
    public function delete(EmployeeInterface $employee) {
        DataBase::getInstance()->query("
            DELETE FROM employee
            WHERE id = '{$employee->getId()}'
        ");
    }

}