<?php


namespace Feddorra\Store\Employee;


/**
 * Interface EmployeeInterface
 *
 * @package Feddorra\Store\Employee
 */
interface EmployeeInterface {

    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getSurname(): string;

    /**
     * @return string
     */
    public function getPhoneNumber(): string;

    /**
     * @return string
     */
    public function getPassword(): string;

    /**
     * @param int $id
     * @return EmployeeInterface
     */
    public function setId(int $id): EmployeeInterface;

    /**
     * @param string $name
     * @return EmployeeInterface
     */
    public function setName(string $name): EmployeeInterface;

    /**
     * @param string $surname
     * @return EmployeeInterface
     */
    public function setSurname(string $surname): EmployeeInterface;

    /**
     * @param string $password
     * @return EmployeeInterface
     */
    public function setPhoneNumber(string $password): EmployeeInterface;

    /**
     * @param string $password
     * @return EmployeeInterface
     */
    public function setPassword(string $password): EmployeeInterface;

}